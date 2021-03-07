<?php

abstract class CAllDatabase
{
    var $DBName;
    var $DBHost;
    var $DBLogin;
    var $DBPassword;
    var $bConnected;
    var $db_Conn;
    var $debug;
    var $DebugToFile;
    var $ShowSqlStat;
    var $db_Error;
    var $db_ErrorSQL;
    var $result;
    var $type;
    static $arNodes = array();
    var $column_cache = array();
    var $bModuleConnection;
    var $bNodeConnection;
    var $node_id;
    /** @var CDatabase */
    var $obSlave = \null;
    /**
     * @var integer
     * @deprecated Use \Bitrix\Main\Application::getConnection()->getTracker()->getCounter();
     **/
    var $cntQuery = 0;
    /**
     * @var float
     * @deprecated Use \Bitrix\Main\Application::getConnection()->getTracker()->getTime();
     **/
    var $timeQuery = 0.0;
    /**
     * @var \Bitrix\Main\Diag\SqlTrackerQuery[]
     * @deprecated Use \Bitrix\Main\Application::getConnection()->getTracker()->getQueries();
     **/
    var $arQueryDebug = array();
    /**
     * @var \Bitrix\Main\Diag\SqlTracker
     */
    public $sqlTracker = \null;
    function StartUsingMasterOnly()
    {
    }
    function StopUsingMasterOnly()
    {
    }
    /**
     * @param string $node_id
     * @param boolean $bIgnoreErrors
     * @param boolean $bCheckStatus
     *
     * @return boolean|CDatabase
     */
    function GetDBNodeConnection($node_id, $bIgnoreErrors = \false, $bCheckStatus = \true)
    {
    }
    /**
     * Returns module database connection.
     * Can be used only if module supports sharding.
     *
     * @param string $module_id
     * @param bool $bModuleInclude
     * @return bool|CDatabase
     */
    public static function GetModuleConnection($module_id, $bModuleInclude = \false)
    {
    }
    abstract function Connect($DBHost, $DBName, $DBLogin, $DBPassword);
    abstract function ConnectInternal();
    function DoConnect($connectionName = "")
    {
    }
    function startSqlTracker()
    {
    }
    function GetNowFunction()
    {
    }
    function GetNowDate()
    {
    }
    abstract function DateToCharFunction($strFieldName, $strType = "FULL");
    abstract function CharToDateFunction($strValue, $strType = "FULL");
    abstract function Concat();
    function Substr($str, $from, $length = \null)
    {
    }
    abstract function IsNull($expression, $result);
    abstract function Length($field);
    function ToChar($expr, $len = 0)
    {
    }
    public static function DateFormatToPHP($format)
    {
    }
    public static function FormatDate($strDate, $format = "DD.MM.YYYY HH:MI:SS", $new_format = "DD.MM.YYYY HH:MI:SS")
    {
    }
    /**
     * @param string $strSql
     * @param bool $bIgnoreErrors
     * @param string $error_position
     * @param array $arOptions
     * @return CDBResult
     */
    abstract function Query($strSql, $bIgnoreErrors = \false, $error_position = "", $arOptions = array());
    //query with CLOB
    function QueryBind($strSql, $arBinds, $bIgnoreErrors = \false)
    {
    }
    function QueryLong($strSql, $bIgnoreErrors = \false)
    {
    }
    abstract function ForSql($strValue, $iMaxLength = 0);
    abstract function PrepareInsert($strTableName, $arFields);
    abstract function PrepareUpdate($strTableName, $arFields);
    function ParseSqlBatch($strSql, $bIncremental = \False)
    {
    }
    function RunSQLBatch($filepath, $bIncremental = \False)
    {
    }
    function IsDate($value, $format = \false, $lang = \false, $format_type = "SHORT")
    {
    }
    function GetErrorMessage()
    {
    }
    function GetErrorSQL()
    {
    }
    function DDL($strSql, $bIgnoreErrors = \false, $error_position = "", $arOptions = array())
    {
    }
    function addDebugQuery($strSql, $exec_time, $node_id = 0)
    {
    }
    function addDebugTime($index, $exec_time)
    {
    }
    public abstract function GetIndexName($tableName, $arColumns, $bStrict = \false);
    public function IndexExists($tableName, $arColumns, $bStrict = \false)
    {
    }
}
abstract class CAllDBResult
{
    var $result;
    var $arResult;
    var $arReplacedAliases;
    // replace tech. aliases in Fetch to human aliases
    var $arResultAdd;
    var $bNavStart = \false;
    var $bShowAll = \false;
    var $NavNum, $NavPageCount, $NavPageNomer, $NavPageSize, $NavShowAll, $NavRecordCount;
    var $bFirstPrintNav = \true;
    var $PAGEN, $SIZEN;
    var $SESS_SIZEN, $SESS_ALL, $SESS_PAGEN;
    var $add_anchor = "";
    var $bPostNavigation = \false;
    var $bFromArray = \false;
    var $bFromLimited = \false;
    var $sSessInitAdd = "";
    var $nPageWindow = 5;
    var $nSelectedCount = \false;
    var $arGetNextCache = \false;
    var $bDescPageNumbering = \false;
    /** @var array */
    var $arUserFields = \false;
    var $usedUserFields = \false;
    /** @var array */
    var $SqlTraceIndex = \false;
    /** @var CDatabase */
    var $DB;
    var $NavRecordCountChangeDisable = \false;
    var $is_filtered = \false;
    var $nStartPage = 0;
    var $nEndPage = 0;
    /** @var Main\DB\Result */
    var $resultObject = \null;
    /** @param CDBResult $res */
    public function __construct($res = \null)
    {
    }
    /** @deprecated */
    public function CAllDBResult($res = \null)
    {
    }
    public function __sleep()
    {
    }
    /**
     * @return array
     */
    public abstract function Fetch();
    /**
     * @return array
     */
    protected abstract function FetchInternal();
    public abstract function SelectedRowsCount();
    public abstract function AffectedRowsCount();
    public abstract function FieldsCount();
    public abstract function FieldName($iCol);
    public function NavContinue()
    {
    }
    public function IsNavPrint()
    {
    }
    public function NavPrint($title, $show_allways = \false, $StyleText = "text", $template_path = \false)
    {
    }
    public function GetNavPrint($title, $show_allways = \false, $StyleText = "text", $template_path = \false, $arDeleteParam = \false)
    {
    }
    public function ExtractFields($strPrefix = "str_", $bDoEncode = \true)
    {
    }
    public function ExtractEditFields($strPrefix = "str_")
    {
    }
    public function GetNext($bTextHtmlAuto = \true, $use_tilda = \true)
    {
    }
    public static function NavStringForCache($nPageSize = 0, $bShowAll = \true, $iNumPage = \false)
    {
    }
    public static function GetNavParams($nPageSize = 0, $bShowAll = \true, $iNumPage = \false)
    {
    }
    public function InitNavStartVars($nPageSize = 0, $bShowAll = \true, $iNumPage = \false)
    {
    }
    public function NavStart($nPageSize = 0, $bShowAll = \true, $iNumPage = \false)
    {
    }
    public abstract function DBNavStart();
    public function InitFromArray($arr)
    {
    }
    public function NavNext($bSetGlobalVars = \true, $strPrefix = "str_", $bDoEncode = \true, $bSkipEntities = \true)
    {
    }
    public function GetPageNavString($navigationTitle, $templateName = "", $showAlways = \false, $parentComponent = \null)
    {
    }
    public function GetPageNavStringEx(&$navComponentObject, $navigationTitle, $templateName = "", $showAlways = \false, $parentComponent = \null, $componentParams = array())
    {
    }
    public function SetUserFields($arUserFields)
    {
    }
    protected function AfterFetch(&$res)
    {
    }
}