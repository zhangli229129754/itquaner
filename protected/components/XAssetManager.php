<?php
/**
 * 屏蔽YII默认资源管理
 *
 * @author     mole <mole1230@gmail.com>
 * @version    $Id: JAssetManager.php 628 2011-06-13 09:07:03Z chenjin $
 */
class XAssetManager extends CAssetManager
{
	private $_basePath;

	private $_published=array();

	/**
	 * 将asset的hash生成改为以文件名为基础hash
	 *
	 * @param string $path
	 * @param bool $hashByName
	 * @param int $level
	 * @param bool $forceCopy
	 */
	public function publish ($path, $hashByName = true, $level = -1, $forceCopy = false)
	{
		if(isset($this->_published[$path]))
			return $this->_published[$path];
		else if(($src = realpath($path)) !== false)
		{
			if(is_file($src))
			{
				$dir = $this->hash($hashByName ? basename($src) : dirname($src));
				$fileName=basename($src);
				$dstDir=$this->getBasePath().DIRECTORY_SEPARATOR.$dir;
				$dstFile=$dstDir.DIRECTORY_SEPARATOR.$fileName;

				if($this->linkAssets)
				{
					if(!is_file($dstFile))
					{
						if(!is_dir($dstDir))
						{
							mkdir($dstDir);
							@chmod($dstDir,0777);
						}
						symlink($src,$dstFile);
					}
				}
				
				else if(@filemtime($dstFile)<@filemtime($src) || $forceCopy)
				{
					if(!is_dir($dstDir))
					{
						@mkdir($dstDir);
						@chmod($dstDir,0777);
					}
					@copy($src,$dstFile);
				}
				

				return $this->_published[$path]=$this->getBaseUrl()."/$dir/$fileName";
			}
			else if(is_dir($src))
			{
				$dir = $this->hash($hashByName ? basename($src) : $src);
				$dstDir = $this->getBasePath().DIRECTORY_SEPARATOR.$dir;

				if($this->linkAssets)
				{
					if(!is_dir($dstDir))
						symlink($src,$dstDir);
				}
				else if(!is_dir($dstDir) || $forceCopy)
					CFileHelper::copyDirectory($src,$dstDir,array('exclude'=>$this->excludeFiles,'level'=>$level));

				return $this->_published[$path]=$this->getBaseUrl().'/'.$dir;
			}
		}
		throw new CException(Yii::t('yii','The asset "{asset}" to be published does not exist.',
			array('{asset}'=>$path)));
	}
	
	/**
	 * @return string the root directory storing the published asset files. Defaults to 'WebRoot/assets'.
	 */
	public function getBasePath()
	{
		if($this->_basePath===null)
		{
			$request=Yii::app()->getRequest();
			$this->setBasePath(dirname($request->getScriptFile()).DIRECTORY_SEPARATOR.self::DEFAULT_BASEPATH);
		}
		return $this->_basePath;
	}

	/**
	 * Sets the root directory storing published asset files.
	 * @param string $value the root directory storing published asset files
	 * @throws CException if the base path is invalid
	 */
	public function setBasePath($value)
	{
		if(($basePath=realpath($value))!==false && is_dir($basePath))
			$this->_basePath=$basePath;
		else
			throw new CException(Yii::t('yii','CAssetManager.basePath "{path}" is invalid. Please make sure the directory exists and is writable by the Web server process.',
				array('{path}'=>$value)));
	}
}