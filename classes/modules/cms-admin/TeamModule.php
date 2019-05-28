 <?php
include_once 'AbstractAdminModule.php';

class TeamModule extends AbstractAdminModule
{
	protected $oTeam;

	public function getName()
	{
		$sName = 'Team ';
		if($this->oTeam instanceof Team && !$this->oTeam->isNew())
			$sName .= ' : '.$this->oTeam->getName();
		return $sName;
	}
	

	
	public function init()
	{
		$this->oTeam = TeamPeer::retrieveByPK(
			$this->oData->get('select',
				$this->oData->get('delete')
			)
		);
            
		if(!$this->oTeam instanceof Team)
		{
			$this->oTeam = new Team();
		}
	}
	
	public function ajaxHandler($sAjax)
	{
		switch($sAjax)
		{
			case 'form':
				if($this->oData->isExists('save'))
					$this->doSave();
				$this->aContext['oTeam'] = $this->oTeam;
				$this->aContext['social'] = json_decode($this->oTeam->getExtra());
				//$social = json_decode($this->oTeam->getExtra());
				//dump($social->facebook);
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
					$this->oTeam = TeamPeer::retrieveByPK($id);
					
					if($this->oTeam instanceof Team)
					{
						$this->doDelete();
					}
				}
				$this->oTeam = new Team();
			}
		}
		$this->prepareTeam();
	}
	
	private function prepareTeam()
	{
		$this->regSortable(TeamPeer::getFieldNames(BasePeer::TYPE_COLNAME));
		$this->aContext['oTeam'] = $this->oTeam;
		$this->aContext['social'] = json_decode($this->oTeam->getExtra());
		$this->aContext['aTeam'] = TeamPeer::getAll(
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
		// if($this->oTeam->isNew())
		// {
		// 	$sCode = Common::parseSaveURLString($this->oTeam->getName());
		// 	while($oTempPage = TeamPeer::getByCode($sCode))
		// 	{
		// 		$sCode = $sCode.rand(1,9);
		// 	}
		// 	$this->oTeam->setCode($sCode);
		// }
		//$this->oTeam->setName($this->oData->get('name'));
		$this->oTeam->setDescription($this->oData->get('description'));

		$data= $this->oData->get('extra');
		$this->oTeam->setExtra(json_encode($data));

		$this->doValidate($this->oTeam);
		if($_FILES['picture']['name'])
		{
			$aSize = array(334,396,1);
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
					$sOldFile = 'contents/images/'.$this->oTeam->getPicture();
					$this->oTeam->setPicture($sFilename);
				}
				$this->oTeam->save();
				
				$oCon->commit();
				if(is_file($sOldFile)) unlink($sOldFile);
				$this->info('succeed-Team-saved',
					array(
						$this->oTeam->getName()
					)
				);
				
				$this->oTeam = new Team();
			}
			catch (Exception $oEx)
			{
				$oCon->rollBack();
							
				$this->error('failed-Team-saved',
					array(
						$this->oTeam->getName(),
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
			
			$sFile = 'contents/'.$this->oApp->sDomain.'/images/'.$this->oTeam->getPicture();
			$this->oTeam->delete();
			
			$oCon->commit();
			if(is_file($sFile)) unlink($sFile);
			
			$this->info('succeed-Team-deleted',
				array(
					$this->oTeam->getName()
				)
			);
		}
		catch (Exception $oEx)
		{
			$oCon->rollBack();
						
			$this->error('failed-Team-deleted',
				array(
					$this->oTeam->getName(),
					$oEx->getCause()->getMessage()
				)
			);
			$this->errorHandler($oEx);
	  	}
		$this->oTeam = new Team();
	}
}