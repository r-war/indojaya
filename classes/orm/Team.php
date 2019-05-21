<?php

require 'orm/om/BaseTeam.php';


/**
 * Skeleton subclass for representing a row from the 'team' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    orm
 */
class Team extends BaseTeam {

	/**
	 * Initializes internal state of Team object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

	public function getPictureUrl()
	{
		$sFile = 'contents/'.$_SESSION[Attributes::SESSION_DOMAIN].'/images/'.$this->getPicture();
		if(is_file($sFile))
		{
			return '/'.$sFile;
		}
		return false;
	}
	
	public function getThumbnailURL($iWidth = null, $iHeight = null, $bFixedSize = false)
	{
		$sPic = $this->getPicture();
		$sFile = 'contents/'.$_SESSION[Attributes::SESSION_DOMAIN].'/images/'.$iWidth.'x'.$iHeight.'_'.$sPic;
		if(!is_file($sFile))
		{
			$sFileReal= 'contents/'.$_SESSION[Attributes::SESSION_DOMAIN].'/images/'.$sPic;
			if(is_file($sFileReal))
			{
				$aImageData = getimagesize($sFileReal);
				if($iWidth && $iHeight)
				{
					if(!$bFixedSize)
					{
						if($aImageData[0] / $aImageData[1] >= $iWidth/$iHeight)
						{
							$iHeight = $aImageData[1]/$aImageData[0]*$iWidth;
						}
						else
						{
							$iWidth = $aImageData[0]/$aImageData[1]*$iHeight;
						}
					}
				}
				else
				{
					if($iHeight)
						$iWidth = $aImageData[0]/$aImageData[1]*$iHeight;
					elseif($iWidth)
						$iHeight = $aImageData[1]/$aImageData[0]*$iWidth;
					else
					{
						$iWidth = $aImageData[0];
						$iHeight = $aImageData[1];
					}
				}
				ImageTool::generateThumbnail(
						$sFileReal,
						$sFile,
						array($iWidth,$iHeight),
						null,
						$bFixedSize
					); 
			}
		}
		
		if(!is_file($sFile))
			$sFile = 'contents/'.$_SESSION[Attributes::SESSION_DOMAIN].'/images/'.$sPic;
			
		return '/'.$sFile;
	}

	// public function getExtra($sLang = 'facebook')
 // 	{
 // 		if(!$sLang)
 // 			return parent::getExtra();
 // 		else
 // 		{
 // 			$sDesc = parent::getExtra();
 // 			$aDesc = json_decode($sDesc,true);
 // 			if(is_array($aDesc))
	//  			return $aDesc[$sLang];
	// 		else 
	// 			return parent::getExtra();
 // 		}
 // 	}
 	
 // 	public function setExtra($sDesc, $sLang ='facebook')
 // 	{
 // 		if(!$sLang)
 // 			parent::setExtra($sDesc);
 // 		else
 // 		{
 // 			$sAllDesc = parent::getExtra();
 // 			$aDesc = json_decode($sAllDesc,true);
 // 			if(!is_array($aDesc)) $aDesc = array();
 // 			$aDesc[$sLang] = $sDesc;
 			
 // 			parent::setExtra(json_encode($aDesc));
 // 		}
 // 	}
} // Team
