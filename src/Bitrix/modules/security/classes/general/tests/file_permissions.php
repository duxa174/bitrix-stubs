<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityFilePermissionsTest
 * @since 12.5.0
 */
class CSecurityFilePermissionsTest extends \CSecurityBaseTest
{
    const MAX_OUTPUT_FILES = 5;
    protected $internalName = "FilePermissionsTest";
    protected static $interestingFileExtentions = array(".php", ".js", ".htaccess", ".html");
    protected static $skipDirs = array("upload");
    protected $filesCount = 0;
    protected $filesPath = array();
    protected $maximumExecutionTime = 0.0;
    protected $savedMaxExecutionTime = 0.0;
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    /**
     * Check test requirements (e.g. max_execution_time)
     *
     * @param array $params
     * @throws CSecurityRequirementsException
     * @return bool
     */
    public function checkRequirements($params = array())
    {
    }
    /**
     * Run test and return results
     * @param array $params
     * @return array
     */
    public function check(array $params = array())
    {
    }
    /**
     * @param string $pFileName
     * @return bool
     */
    protected static function isInterestingDir($pFileName)
    {
    }
    /**
     * @param string $pFileName
     * @return bool
     */
    protected static function isInterestingFile($pFileName)
    {
    }
    /**
     * @param string $pDir
     * @throws Exception
     * @return bool
     */
    protected function checkWorldWritableDirRecursive($pDir)
    {
    }
    /**
     * @param string $pFilePath
     */
    protected function addFilePath($pFilePath)
    {
    }
    /**
     * @return array
     */
    protected function getFilesPath()
    {
    }
    /**
     * @param string $pGlue
     * @return string
     */
    protected function getFilesPathInString($pGlue = "<br>")
    {
    }
}