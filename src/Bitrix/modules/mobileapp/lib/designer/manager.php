<?php

namespace Bitrix\MobileApp\Designer;

class Manager
{
    const IS_ALREADY_EXISTS = 3;
    const SUCCESS = 1;
    const FAIL = 0;
    const EMPTY_REQUIRED = 4;
    const APP_TEMPLATE_IS_NOT_EXISTS = 5;
    const PREVIEW_IMAGE_SIZE = 150;
    const SIMPLE_APP_TEMPLATE = "simple";
    /**
     * Creates a new application with "global" configuration by default
     *
     * @param string $appCode - application code
     * @param array $data - application data (name, short name, folder and etc)
     * @param array $initConfig
     *
     * @return int
     * @throws \Exception
     * @see AppTable::getMap to get a bit more information about possible keys in $data
     */
    public static function createApp($appCode = "", $data = array(), $initConfig = array())
    {
    }
    private static function getTemplateList()
    {
    }
    /**
     * Removes application by code
     *
     * @param string $appCode application code
     *
     * @return bool
     */
    public static function removeApp($appCode)
    {
    }
    /**
     * Binds file to the application
     *
     * @param $fileArray - file array
     * @param $appCode - application code
     */
    public static function registerFileInApp(&$fileArray, $appCode)
    {
    }
    /**
     *  Unbinds file
     *
     * @param $fileId - identifier of file in b_file table
     * @param $appCode - application code
     */
    public static function unregisterFileInApp($fileId, $appCode)
    {
    }
    /**
     * Add configuration to application
     *
     * @param string $appCode - application code
     * @param $platform - platform code
     *
     * @see ConfigTable::getSupportedPlatforms for details on availible platforms
     *
     * @param array $config - configuration
     *
     * @return bool
     */
    public static function addConfig($appCode = "", $platform, $config = array())
    {
    }
    /**
     * Removes configuration
     *
     * @param string $appCode - application code
     * @param array $platform - platform code
     *
     * @see ConfigTable::getSupportedPlatforms for details on availible platforms
     * @return bool
     */
    public static function removeConfig($appCode = "", $platform = array())
    {
    }
    /**
     * Updates configuration
     *
     * @param string $appCode  application code
     * @param array $platform  platform code
     * @param array $config  new configuration
     *
     * @see ConfigTable::getSupportedPlatforms
     *
     * @return bool
     */
    public static function updateConfig($appCode = "", $platform = "", $config = array())
    {
    }
    /**
     * Return configuration in JSON format
     *
     * @param $appCode - application code
     * @param bool $platform - platform code
     *
     * @see ConfigTable::getSupportedPlatforms for details on availible platforms
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getConfigJSON($appCode, $platform = false)
    {
    }
    /**
     * Checks if the configuration is already exists
     *
     * @param $folder
     * @param $appCode - application code
     * @param bool $useOffline
     * @param string $templateCode
     * @return bool
     * @throws \Bitrix\Main\IO\FileNotFoundException
     * @see ConfigTable::getSupportedPlatforms for details on availible platforms
     */
    public static function copyFromTemplate($folder, $appCode, $useOffline = false, $templateCode = "simple")
    {
    }
    /**
     * Binds (and creates if it's necessary) template to the application folder
     *
     * @param $templateId - symbolic code of the template
     * @param $folder - the application folder
     * @param bool $createNew - flag of the necessity of creating a new template
     */
    public static function bindTemplate($templateId, $folder, $createNew)
    {
    }
    /**
     * Return files of the application
     * @param $appCode - application code
     * @return array
     */
    public static function getAppFiles($appCode)
    {
    }
    /**
     * Converts the namespace string to the array
     * and assigns the given value to the key of deepest level of the namespace
     *
     * @param $namespace - namespace string
     * @param $value - value
     *
     * <br>
     *
     * Here is an example:
     * <code>
     * $namespace = "\depth0\depth1\depth3"
     * $value = "value1";
     * $resultArray = \Bitrix\MobileApp\Designer\Manager\nameSpaceToArray($namespace,$value));
     *
     * <b>Result:</b>
     * array(
     *  "depth0"=>array(
     *    "depth1"=>array(
     *      "depth2"=>"value1"
     *    )
     *  )
     *);
     *
     * </code>
     *
     * @return array
     */
    private function nameSpaceToArray($namespace, $value)
    {
    }
    private static function addVirtualParams(&$structuredConfig, $platform)
    {
    }
}