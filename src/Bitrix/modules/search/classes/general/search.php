<?php

class CAllSearch extends \CDBResult
{
    var $Query;
    //Query parset
    var $Statistic;
    //Search statistic
    var $strQueryText = \false;
    //q
    var $strTagsText = \false;
    //tags
    var $strSqlWhere = "";
    //additional sql filter
    var $strTags = "";
    //string of tags in double quotes separated by commas
    var $errorno = 0;
    var $error = \false;
    var $arParams = array();
    var $url_add_params = array();
    //additional url params (OnSearch event)
    var $tf_hwm = 0;
    var $tf_hwm_site_id = "";
    var $_opt_ERROR_ON_EMPTY_STEM = \false;
    var $_opt_NO_WORD_LOGIC = \false;
    var $offset = \false;
    var $limit = \false;
    var $bUseRatingSort = \false;
    var $flagsUseRatingSort = 0;
    /** @var CSearchFormatter */
    var $formatter = \null;
    function __construct($strQuery = \false, $SITE_ID = \false, $MODULE_ID = \false, $ITEM_ID = \false, $PARAM1 = \false, $PARAM2 = \false, $aSort = array(), $aParamsEx = array(), $bTagsCloud = \false)
    {
    }
    function CSearch($strQuery = \false, $LID = \false, $MODULE_ID = \false, $ITEM_ID = \false, $PARAM1 = \false, $PARAM2 = \false, $aSort = array(), $aParamsEx = array(), $bTagsCloud = \false)
    {
    }
    //combination ($MODULE_ID, $PARAM1, $PARAM2, $PARAM3) is used to narrow search
    //returns recordset with search results
    function Search($arParams, $aSort = array(), $aParamsEx = array(), $bTagsCloud = \false)
    {
    }
    function SetOptions($arOptions)
    {
    }
    function SetOffset($offset)
    {
    }
    function SetLimit($limit)
    {
    }
    function GetFilterMD5()
    {
    }
    function chr($a)
    {
    }
    function GetFreqStatistics($lang_id, $arStem, $site_id = "")
    {
    }
    function Repl($strCond, $strType, $strWh)
    {
    }
    function PrepareSearchResult($str)
    {
    }
    function NavStart($nPageSize = 0, $bShowAll = \true, $iNumPage = \false)
    {
    }
    function Fetch()
    {
    }
    public static function CheckPath($path)
    {
    }
    public static function GetGroupCached()
    {
    }
    public static function QueryMnogoSearch(&$xml)
    {
    }
    //////////////////////////////////
    //reindex the whole server content
    //$bFull = true - no not check change_date. all index tables will be truncated
    //       = false - add new ones. update changed and delete deleted.
    public static function ReIndexAll($bFull = \false, $max_execution_time = 0, $NS = array(), $clear_suggest = \false)
    {
    }
    public static function ReindexModule($MODULE_ID, $bFull = \false)
    {
    }
    public static function GetIndex($MODULE_ID, $ITEM_ID)
    {
    }
    //index one item (forum message, news, etc.)
    //combination of ($MODULE_ID, $ITEM_ID) is used to determine the documents
    public static function Index($MODULE_ID, $ITEM_ID, $arFields, $bOverWrite = \false, $SEARCH_SESS_ID = "")
    {
    }
    public static function KillEntities($str)
    {
    }
    public static function ReindexFile($path, $SEARCH_SESS_ID = "")
    {
    }
    public static function RecurseIndex($path = array(), $max_execution_time = 0, &$NS)
    {
    }
    public static function RemovePHP($str)
    {
    }
    public static function KillTags($str)
    {
    }
    public static function OnChangeFile($path, $site)
    {
    }
    public static function OnGroupDelete($ID)
    {
    }
    public static function __PrepareFilter($arFilter, &$bIncSites, $strSearchContentAlias = "sc.")
    {
    }
    function __PrepareSort($aSort = array(), $strSearchContentAlias = "sc.", $bTagsCloud = \false)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function OnChangeFilePermissions($path, $permission = array(), $old_permission = array(), $arGroups = \false)
    {
    }
    public static function SetContentItemGroups($index_id, $arGroups)
    {
    }
    public static function CheckPermissions($FIELD = "sc.ID")
    {
    }
    public static function SetContentItemParams($index_id, $arParams)
    {
    }
    public static function GetContentItemParams($index_id, $param_name = \false)
    {
    }
    function stddev($arValues)
    {
    }
    function normdev($words_count)
    {
    }
    public static function DeleteOld($SESS_ID, $MODULE_ID = "", $SITE_ID = "")
    {
    }
    public static function DeleteForReindex($MODULE_ID)
    {
    }
    public static function DeleteIndex($MODULE_ID, $ITEM_ID = \false, $PARAM1 = \false, $PARAM2 = \false, $SITE_ID = \false)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function UpdateSite($ID, $arSITE_ID)
    {
    }
    public static function ChangeIndex($MODULE_ID, $arFields, $ITEM_ID = \false, $PARAM1 = \false, $PARAM2 = \false, $SITE_ID = \false)
    {
    }
    public static function ChangeSite($MODULE_ID, $arSite, $ITEM_ID = \false, $PARAM1 = \false, $PARAM2 = \false, $SITE_ID = \false)
    {
    }
    public static function ChangePermission($MODULE_ID, $arGroups, $ITEM_ID = \false, $PARAM1 = \false, $PARAM2 = \false, $SITE_ID = \false, $PARAMS = \false)
    {
    }
}
class CSearchSQLHelper
{
    var $bIncSites = \false;
    var $strSearchContentAlias = "";
    function __construct($strSearchContentAlias)
    {
    }
    function _CallbackURL($field_name, $operation, $field_value)
    {
    }
    function _CallbackPARAMS($field_name, $operation, $field_value)
    {
    }
}
class CAllSearchQuery
{
    var $m_query;
    var $m_parsed_query;
    var $m_words;
    var $m_stemmed_words;
    var $m_stemmed_words_id;
    var $m_fields;
    var $m_kav;
    var $default_query_type;
    var $rus_bool_lang;
    var $no_bool_lang;
    var $m_casematch;
    var $error = "";
    var $errorno = 0;
    var $bTagsSearch = \false;
    var $m_tags_words;
    var $bStemming = \false;
    var $bText = \false;
    function __construct($default_query_type = "and", $rus_bool_lang = "yes", $m_casematch = 0, $site_id = "")
    {
    }
    function GetQueryString($fields, $query, $bTagsSearch = \false, $bUseStemming = \true, $bErrorOnEmptyStem = \false)
    {
    }
    function CutKav($query)
    {
    }
    function ParseQ($q)
    {
    }
    function ParseStr($qwe)
    {
    }
    function StemWord($w)
    {
    }
    function StemQuery($q, $lang = "en")
    {
    }
    function PrepareQuery($q)
    {
    }
}
class CSearchCallback
{
    var $MODULE = "";
    var $max_execution_time = 0;
    var $CNT = 0;
    var $SESS_ID = "";
    function Index($arFields)
    {
    }
}