 <?php
include_once 'AbstractAdminModule.php';

class ServiceModule extends AbstractAdminModule
{
	protected $oService;

	public function getName()
	{
		$sName = 'Service ';
		if($this->oService instanceof Service && !$this->oService->isNew())
			$sName .= ' : '.$this->oService->getName();
		return $sName;
	}
	

	
	public function init()
	{
		$this->oService = ServicePeer::retrieveByPK(
			$this->oData->get('select',
				$this->oData->get('delete')
			)
		);
            
		if(!$this->oService instanceof Service)
		{
			$this->oService = new Service();
		}
	}
	
	public function ajaxHandler($sAjax)
	{
		switch($sAjax)
		{
			case 'form':
				if($this->oData->isExists('save'))
					$this->doSave();
				$this->aContext['oService'] = $this->oService;
			break;

		}
	}
	
	public function doBuildTemplate()
	{
		if($this->oData->isExists('delete'))
		{
			$this->doDelete();
		}
		else if($this->oData->isExists('deleteChecked'))
		{
			if(is_array($this->oData->get('c')))
			{
				foreach($this->oData->get('c') as $id)
				{
					$this->oService = ServicePeer::retrieveByPK($id);
					
					if($this->oService instanceof Service)
					{
						$this->doDelete();
					}
				}
				$this->oService = new Service();
			}
		}
		$this->prepareService();
	}
	
	private function prepareService()
	{
		$this->regSortable(ServicePeer::getFieldNames(BasePeer::TYPE_COLNAME));
		$this->aContext['oService'] = $this->oService;
		$this->aContext['aService'] = ServicePeer::getAll(
			$this->doHandleParameter(),
			$this->getSortable(),
			$this->getPageList(),
			$oPager
		);

		$this->regPageList(
			$oPager
		);
	}
	
	private function doSave()
	{
		// if($this->oService->isNew())
		// {
		// 	$sCode = Common::parseSaveURLString($this->oService->getName());
		// 	while($oTempPage = ServicePeer::getByCode($sCode))
		// 	{
		// 		$sCode = $sCode.rand(1,9);
		// 	}
		// 	$this->oService->setCode($sCode);
		// }
		//$this->oService->setName($this->oData->get('name'));
		$this->oService->setDescription($this->oData->get('description'));

		$this->doValidate($this->oService);
		if($_FILES['picture']['name'])
		{
			$aSize = array(550,300,1);
			$sFilename = $this->processUpload(
					'picture',
					'contents/'.$this->oApp->sDomain.'/images/',
					explode(',',ConfigurationPeer::FILE_TYPE_IMAGE),
					null,
					false,
					true,
					null,
					array(),
					$aSize
			);
			$sFile = 'contents/'.$this->oApp->sDomain.'/images/'.$sFilename;
		}
		if($this->noError())
		{
			$oCon = $this->getCon();
			try
			{
				$oCon->beginTransaction();
				if($sFilename)
				{
					$sOldFile = 'contents/images/'.$this->oService->getPicture();
					$this->oService->setPicture($sFilename);
				}
				$this->oService->save();
				
				$oCon->commit();
				if(is_file($sOldFile)) unlink($sOldFile);
				$this->info('succeed-Service-saved',
					array(
						$this->oService->getName()
					)
				);
				
				$this->oService = new Service();
			}
			catch (Exception $oEx)
			{
				$oCon->rollBack();
							
				$this->error('failed-Service-saved',
					array(
						$this->oService->getName(),
						$oEx->getMessage()
					)
				);
				$this->errorHandler($oEx);
		  	}
		}
	}
	
	private function doDelete()
	{
		$oCon = $this->getCon();
		try
		{
			$oCon->beginTransaction();
			
			$sFile = 'contents/'.$this->oApp->sDomain.'/images/'.$this->oService->getPicture();
			$this->oService->delete();
			
			$oCon->commit();
			if(is_file($sFile)) unlink($sFile);
			
			$this->info('succeed-Service-deleted',
				array(
					$this->oService->getName()
				)
			);
		}
		catch (Exception $oEx)
		{
			$oCon->rollBack();
						
			$this->error('failed-Service-deleted',
				array(
					$this->oService->getName(),
					$oEx->getCause()->getMessage()
				)
			);
			$this->errorHandler($oEx);
	  	}
		$this->oService = new Service();
	}
}