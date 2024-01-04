<?php

class File extends Singleton
{
    /**
     * Path of the file
     *
     * @var string
     */
    private $_path;

    /**
     * constructor
     *
     * @param string $path Path of the file
     * @return void
     */
    public function __construct($path)
    {
        $this->_path = $path;
    }

    /**
     * Check whether a file exists
     *
     * @param string $path
     * @return boolean
     */
    public static function exists($path)
    {
        $ret = false;
        if (@file_exists($path) && is_file($path)) {
            $ret = true;
        }
        return $ret;
    }

    /**
     * Create a file
     *
     * @param string $path
     * @return File
     * @throws Exception
     */
    public static function create($path)
    {
        if (@touch($path) === false) {
            Logger::error(sprintf('To create file "%s" failed.', $path));
            return false;
        }
        $file = new File($path);
        return $file;
    }

    /**
     * Delete the file
     *
     * @return boolean
     * @throws Exception
     */
    public function delete()
    {
        if (@unlink($this->_path) === false) {
            Logger::error(sprintf('To delete file "%s" failed.', $this->_path));
            return false;
        }
        return true;
    }

    /**
     * Copy the file
     *
     * @param string $newPath
     * @param boolean $overwrite
     * @return boolean
     * @throws FileNotExistException
     * @throws Exception
     */
    public function copy($newPath, $overwrite = false)
    {
        if ($overwrite == false && self::exists($newPath)) {
            throw new Exception(sprintf('Destination file "%s" already exists.', $newPath));
        }
        return @copy($this->_path, $newPath);
    }

    /**
     * Rename the file
     *
     * @param string $newName
     * @return boolean
     * @throws FileNotExistException
     * @throws Exception
     */
    public function rename($newName)
    {
        $newPath = $this->getParentPath() . "/" . $newName;
        if (false == @rename($this->_path, $newPath)) {
            Logger::error(sprintf('To rename file "%s" failed.', $this->_path));
            return false;
        }
        return true;
    }

    /**
     * Move file to other directory
     *
     * @param type $newDir Destination directory path
     * @param type $newName Filename if you want to file a different name in the destination
     * @return boolean
     * @throws FileNotExistException
     * @throws Exception
     */
    public function move($newDir, $newName = null)
    {
        $fileName = $this->getName($this->_path);
        if ($newName != null) {
            $fileName = $newName;
        }
        $newPath = rtrim($newDir, "/") . "/" . $fileName;
        if (false == @rename($this->_path, $newPath)) {
            Logger::error(sprintf('To move file "%s" to "%s" failed.', $this->_path, $newDir));
            return false;
        }
        return true;
    }

    /**
     * Get file path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * Get path of the parent directory
     *
     * @return string
     */
    public function getParentPath()
    {
        return dirname($this->_path);
    }

    /**
     * Get name of the file
     *
     * @return string
     */
    public function getName()
    {
        return basename($this->_path);
    }

    /**
     * Get extension of the file
     *
     * @return string
     */
    public function getExtension()
    {
        $pathInfo = $this->getPathInfo();
        return $pathInfo['extension'];
    }

    /**
     * Get path infomation
     *
     * @return array
     */
    public function getPathInfo()
    {
        return pathinfo($this->_path);
    }

    /**
     * Get size of the file
     *
     * @return int File size
     * @throws Exception
     */
    public function getSize()
    {
        return filesize($this->_path);
    }

    /**
     * Change the permissions of the file
     *
     * @param string $mode
     * @return boolean
     * @throws FileNotExistException
     * @throws Exception
     */
    public function chmod($mode)
    {
        if (@chmod($this->_path, $mode) == false) {
            Logger::error(sprintf('To change permissions to %s of the file "%s" failed.', $mode, $this->_path));
            return false;
        }
        return true;
    }
}
