<?php

require 'orm/om/BaseGalleryPicture.php';


/**
 * Skeleton subclass for representing a row from the 'gallery_picture' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    orm
 */
class GalleryPicture extends BaseGalleryPicture {

	/**
	 * Initializes internal state of GalleryPicture object.
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
		# output youtube video
		$name = $this->getName();
		if (strpos($name, 'video|') !== false) {
			$code = str_replace('video|', '', $name);
			return 'https://www.youtube.com/embed/'. $code .'?autoplay=1';
		}

		$sFile = 'contents/images/'.$this->getPicture();
		if(is_file($sFile))
		{
			return '/'.$sFile;
		}
	}
	
	public function getThumbnailURL($iWidth = null, $iHeight = null, $bFixedSize = false, $idx = 1)
	{
		$sPic = $this->getPicture();
		$sFile = 'contents/images/_thumbs/'.$iWidth.'x'.$iHeight.'_'.$sPic;
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


	public function isPortrait()
	{
		$sPic = $this->getPicture();
		$sFileReal= 'contents/'.$_SESSION[Attributes::SESSION_DOMAIN].'/images/'.$sPic;
		if(is_file($sFileReal))
		{
			$aImageData = getimagesize($sFileReal);
			if($aImageData[0] < $aImageData[1])
				return true;
		}
		
		return false;
	}
} // GalleryPicture
