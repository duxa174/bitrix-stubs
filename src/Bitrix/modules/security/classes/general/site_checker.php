<?php

class CSecuritySiteChecker
{
    const ADMIN_PAGE_URL = "/bitrix/admin/security_scanner.php";
    const CHECKING_REPEAT_TIME = 2592000;
    //60*60*24*30, one month
    const CACHE_DIR = "/security/site_checker";
    const CACHE_BASE_ID = "sec_site_check";
    const SESSION_DATA_KEY = "SECURITY_SITE_CHECKER";
    protected $allTests = array();
    protected $neededTests = "";
    protected $neededTestName = "";
    protected static $tableName = "b_security_sitecheck";
    protected static $dbFields = array("ID", "TEST_DATE", "RESULTS");
    /** @var CSecurityTemporaryStorage */
    protected $sessionData = \null;
    protected $isCheckRequirementsNeeded = \true;
    /**
     * @param array $pTests
     * @param bool $pIsFirstStart
     * @param bool $pIsCheckRequirementsNeeded
     * @throws Exception
     */
    public function __construct($pTests = array(), $pIsFirstStart = \false, $pIsCheckRequirementsNeeded = \true)
    {
    }
    /**
     * Start testing and return results
     * @param array $pParams
     * @return array|bool
     */
    public function startTesting($pParams = array())
    {
    }
    /**
     * Run several tests
     * @param string|array $pType
     * @param bool $pIsFirstStart
     * @param bool $pIsCheckRequirementsNeeded
     * @return array|bool
     */
    public static function runTestPackage($pType = "", $pIsFirstStart = \false, $pIsCheckRequirementsNeeded = \true)
    {
    }
    /**
     * Return current percent of complete testing
     * @return int
     */
    public function getPercent()
    {
    }
    /**
     * Return saved testing results
     * @param array $pFilter
     * @param int $pMaxCount
     * @return bool|CDBResult
     */
    protected static function getList($pFilter = array(), $pMaxCount = 1)
    {
    }
    /**
     * Add new testing results ro DB
     * @param array $pResults
     * @return bool
     */
    public static function addResults($pResults)
    {
    }
    /**
     * Return last saved testing results
     * @return array
     */
    public static function getLastTestingInfo()
    {
    }
    /**
     *
     */
    public static function clearTemporaryData()
    {
    }
    /**
     * Return true if administrator must run testing
     * @return bool
     */
    public static function isNewTestNeeded()
    {
    }
    /**
     * @param $timestamp
     * @return string
     */
    protected static function getFormatedDate($timestamp)
    {
    }
    /**
     *
     */
    protected static function clearCache()
    {
    }
    /**
     *
     */
    public function isAnyCheckingExists()
    {
    }
    /**
     *
     */
    protected function finalizeLastTest()
    {
    }
    /**
     * @return bool
     */
    public function isAllTestCompleted()
    {
    }
    /**
     * @param array $pResults
     * @return int
     */
    public static function calculateCriticalResults($pResults = array())
    {
    }
    /**
     * @return bool
     */
    public static function OnAdminInformerInsertItems()
    {
    }
    /**
     * @return string
     */
    protected function getCurrentTestName()
    {
    }
    /**
     * @param string $pTestName
     * @param array $pParams
     * @return array
     */
    protected function makeParamsForTest($pTestName, $pParams)
    {
    }
    /**
     * @return int
     */
    protected function getNextStep()
    {
    }
    /**
     * @return bool
     */
    protected function initializeAvailableTests()
    {
    }
    /**
     * @param string|array $pTests
     * @return bool
     */
    protected function initializeNeededTests($pTests)
    {
    }
}