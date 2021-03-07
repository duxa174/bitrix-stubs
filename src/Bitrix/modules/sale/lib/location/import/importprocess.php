<?php

namespace Bitrix\Sale\Location\Import;

final class ImportProcess extends \Bitrix\Sale\Location\Util\Process
{
    const DISTRIBUTOR_HOST = 'www.1c-bitrix.ru';
    const DISTRIBUTOR_PORT = 80;
    //const REMOTE_PATH = 					'/locations_data/compiled/';
    const REMOTE_PATH = '/download/files/locations/pro/';
    const REMOTE_SETS_PATH = 'bundles/';
    const REMOTE_LAYOUT_FILE = 'bundles/layout.csv';
    const REMOTE_TYPE_GROUP_FILE = 'typegroup.csv';
    const REMOTE_TYPE_FILE = 'type.v2.csv';
    const REMOTE_EXTERNAL_SERVICE_FILE = 'externalservice.csv';
    const PACK_STANDARD = 'standard';
    const PACK_EXTENDED = 'extended';
    const LOCAL_SETS_PATH = 'bundles/';
    const LOCAL_LOCATION_FILE = '%s.csv';
    const LOCAL_LAYOUT_FILE = 'layout.csv';
    const LOCAL_TYPE_GROUP_FILE = 'typegroup.csv';
    const LOCAL_TYPE_FILE = 'type.csv';
    const LOCAL_EXTERNAL_SERVICE_FILE = 'externalservice.csv';
    const USER_FILE_DIRECTORY_SESSION_KEY = 'location_import_user_file';
    const USER_FILE_TEMP_NAME = 'userfile.csv';
    const SOURCE_REMOTE = 'remote';
    const SOURCE_FILE = 'file';
    const MAX_CODE_FETCH_BLOCK_LEN = 90;
    const INSERTER_MTU = 99999;
    const INSERTER_MTU_ORACLE = 9999;
    const DB_TYPE_MYSQL = 'mysql';
    const DB_TYPE_MSSQL = 'mssql';
    const DB_TYPE_ORACLE = 'oracle';
    const TREE_REBALANCE_TEMP_BLOCK_LEN = 99999;
    const TREE_REBALANCE_TEMP_BLOCK_LEN_O = 9999;
    const TREE_REBALANCE_TEMP_TABLE_NAME = 'b_sale_location_rebalance';
    const DEBUG_MODE = false;
    protected $sessionKey = 'location_import';
    protected $rebalanceInserter = false;
    protected $stat = array();
    protected $hitData = array();
    protected $useCache = true;
    protected $dbConnection = null;
    protected $dbConnType = null;
    protected $dbHelper = null;
    public function __construct($options)
    {
    }
    public function onBeforePerformIteration()
    {
    }
    /////////////////////////////////////
    // STAGE 1
    protected function stageDownloadFiles()
    {
    }
    protected function getSubpercentForStageDownloadFiles()
    {
    }
    /////////////////////////////////////
    // STAGE 2
    protected function stageDeleteAll()
    {
    }
    protected function getSubpercentForstageDeleteAll()
    {
    }
    /////////////////////////////////////
    // STAGE 2.5
    protected function stageDropIndexes()
    {
    }
    protected function getSubpercentForStageDropIndexes()
    {
    }
    /////////////////////////////////////
    // STAGE 3
    protected function readBlockFromCurrentFile2()
    {
    }
    protected static function checkLocationCodeExists($code)
    {
    }
    protected function importBlock(&$block)
    {
    }
    protected function getCurrentGid()
    {
    }
    protected function stageProcessFiles()
    {
    }
    protected function getSubpercentForStageProcessFiles()
    {
    }
    /////////////////////////////////////
    // STAGE 4
    protected function stageIntegrityPreserve()
    {
    }
    /////////////////////////////////////
    // STAGE 5
    protected function stageRebalanceWalkTree()
    {
    }
    protected function getSubpercentForStageRebalanceWalkTree()
    {
    }
    /////////////////////////////////////
    // STAGE 6
    protected function stageRebalanceCleanupTempTable()
    {
    }
    /////////////////////////////////////
    // STAGE 7
    protected function stageRestoreIndexes()
    {
    }
    protected function getSubpercentForStageRestoreIndexes()
    {
    }
    /////////////////////////////////////
    // about stage util functions
    protected function getLanguageId()
    {
    }
    /**
     * @deprecated
     */
    public function getTypes()
    {
    }
    public function getStatisticsAll()
    {
    }
    public function getStatistics($type = 'TOTAL')
    {
    }
    public function determineLayoutToImport()
    {
    }
    public function convertBlock($block)
    {
    }
    public function checkSource($sType)
    {
    }
    // download layout from server
    public function getRemoteLayout($getFlat = false)
    {
    }
    // download types from server
    public function getRemoteTypes()
    {
    }
    // download external services from server
    public function getRemoteExternalServices()
    {
    }
    // download type groups from server
    public function getRemoteTypeGroups()
    {
    }
    public function getTypeLevels($langId = LANGUAGE_ID)
    {
    }
    public static function getSiteLanguages()
    {
    }
    public function getRequiredLanguages()
    {
    }
    // read type.csv and build type table
    protected function buildTypeTable()
    {
    }
    protected function checkExternalServiceAllowed($code)
    {
    }
    protected function buildExternalSerivceTable()
    {
    }
    protected function buildStaticLocationIndex()
    {
    }
    protected function getLocationCodeToIdMapQuery($buffer, &$result)
    {
    }
    protected function getLocationCodeToIdMap($codes)
    {
    }
    protected function manageExistedLocationIndex($memGroups)
    {
    }
    /////////////////////////////////////
    // about file and network I/O
    protected function checkIndexExistsByName($indexName, $tableName)
    {
    }
    protected function dropIndexByName($indexName, $tableName)
    {
    }
    public static function getIndexMap()
    {
    }
    protected function dropIndexes($certainIndex = false)
    {
    }
    public function restoreIndexes($certainIndex = false)
    {
    }
    private function getCachedBundle($id)
    {
    }
    private function checkNodeIsParent($id)
    {
    }
    private function mergeRebalancedNodes()
    {
    }
    private function acceptRebalancedNode($node)
    {
    }
    private function dropTempTable()
    {
    }
    private function createTempTable()
    {
    }
    protected function checkFileCompletelyRead()
    {
    }
    protected function checkAllFilesRead()
    {
    }
    protected function checkBufferIsFull($bufferSize)
    {
    }
    protected static function downloadFile($fileName, $storeAs, $skip404 = false, $storeTo = false)
    {
    }
    /**
     * @deprecated
     */
    protected static function cleanWorkDirectory()
    {
    }
    protected function getFileNameByIndex($i)
    {
    }
    public function saveUserFile($inputName)
    {
    }
    protected static function explainFileUploadError($error)
    {
    }
    // all this mess is only to get import work on Bitrix24 (which does not provide any temporal directory in a typical meaning)
    protected function getTemporalDirectory()
    {
    }
    protected static function createDirectory($path)
    {
    }
    protected static function deleteDirectory($path)
    {
    }
    protected function normalizeQueryArray($value)
    {
    }
    protected static function parseQueryCode($value)
    {
    }
    public function turnOffCache()
    {
    }
    ########################################################
    ## static part is used in places like wizards, etc
    public static function getExistedTypes()
    {
    }
    public static function getExistedServices()
    {
    }
    public static function createTypes($types, $existed = false)
    {
    }
    protected static function getTranslatedName($names, $languageId)
    {
    }
    public static function createType($type)
    {
    }
    public static function createService($service)
    {
    }
    public static function getTypeMap($file)
    {
    }
    public static function getServiceMap($file)
    {
    }
    // this is generally for e-shop installer
    public static function importFile(&$descriptior)
    {
    }
    public function provideEnFromRu(&$data)
    {
    }
}