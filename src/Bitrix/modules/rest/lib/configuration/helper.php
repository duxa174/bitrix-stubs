<?php

namespace Bitrix\Rest\Configuration;

class Helper
{
    const TYPE_SECTION_TOTAL = 'total';
    const STRUCTURE_FILES_NAME = 'files';
    const CONFIGURATION_FILE_EXTENSION = '.json';
    const DEFAULT_ARCHIVE_NAME = 'configuration';
    const DEFAULT_ARCHIVE_FILE_EXTENSIONS = 'zip';
    protected $prefixStatisticBasic = 'DEFAULT_';
    protected $prefixAppContext = 'app';
    protected $prefixUserContext = 'configuration';
    protected $optionEnableZipMod = 'enable_mod_zip';
    protected $optionMaxImportFileSize = 'import_max_size';
    protected $optionBasicAppList = 'uses_basic_app_list';
    protected $defaultMaxSizeImport = 100;
    protected $appConfigurationFolderBackup = 'appConfiguration';
    protected $basicManifest = ['vertical_crm'];
    /** @var Helper|null  */
    private static $instance = null;
    private $sanitizer = null;
    private function __construct()
    {
    }
    /**
     * @return Helper
     */
    public static function getInstance()
    {
    }
    /**
     * Enable or not main option zip_mode nginx
     * @return bool
     */
    public function enabledZipMod()
    {
    }
    /**
     * @return integer
     */
    public function getMaxFileSize()
    {
    }
    /**
     * @param $postfix string a-zA-Z0-9_
     *
     * @return string
     */
    public function getContextUser($postfix)
    {
    }
    /**
     * Context uses action
     * @param integer $appId
     * @return string context
     */
    public function getContextAction($appId = 0)
    {
    }
    /**
     * Sanitize bad value.
     * @param string $value Bad value.
     * @param bool &$bad Return true, if value is bad.
     * @param string $splitter Splitter for bad content.
     * @return string Good value.
     */
    public function sanitize($value, &$bad = false, $splitter = ' ')
    {
    }
    public function getStorageBackupParam()
    {
    }
    public function getStorageBackup()
    {
    }
    //uses configuration app
    /**
     * @param $code string
     *
     * @return boolean
     */
    public function isBasicManifest($code)
    {
    }
    /**
     * @param $manifestCode string
     *
     * @return boolean|string
     */
    public function getBasicApp($manifestCode)
    {
    }
    /**
     * @return array [ manifestCode => appCode ]
     */
    public function getBasicAppList()
    {
    }
    /**
     * @param $manifestCode string
     * @param $appCode string
     * @return boolean
     */
    public function setBasicApp($manifestCode, $appCode)
    {
    }
    /**
     * @param $manifestCode string
     * @return boolean
     */
    public function deleteBasicApp($manifestCode)
    {
    }
    /**
     * @return boolean
     */
    public function sendStatistic()
    {
    }
    /**
     * Every day send statistic basic configuration app
     * @return string
     */
    public static function sendStatisticAgent()
    {
    }
    /**
     * check Event manifest[USES] intersect current entity[USES]
     * @param array $params all event parameters
     * @param array $uses all access uses in current entity
     *
     * @return bool
     */
    public static function checkAccessManifest($params, $uses = [])
    {
    }
}