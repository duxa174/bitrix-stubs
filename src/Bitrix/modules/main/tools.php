<?php

/**********************************
Конвертация текста для EMail
**********************************/
class CConvertorsPregReplaceHelper
{
    private $codeMessage = "";
    function __construct($codeMessage = "")
    {
    }
    public function convertCodeTagForEmail($match)
    {
    }
    private $quoteOpened = 0;
    private $quoteClosed = 0;
    private $quoteError = 0;
    public function checkQuoteError()
    {
    }
    private $quoteTableClass = "";
    private $quoteHeadClass = "";
    private $quoteBodyClass = "";
    public function setQuoteClasses($tableClass, $headClass, $bodyClass)
    {
    }
    public function convertOpenQuoteTag($match)
    {
    }
    public function convertCloseQuoteTag()
    {
    }
    public function convertQuoteTag($match)
    {
    }
    public static function extractUrl($match)
    {
    }
    private $linkClass = "";
    public function setLinkClass($linkClass)
    {
    }
    private $linkTarget = "_self";
    public function setLinkTarget($linkTarget)
    {
    }
    private $event1 = "";
    private $event2 = "";
    private $event3 = "";
    public function setEvents($event1 = "", $event2 = "", $event3 = "")
    {
    }
    private $script = "/bitrix/redirect.php";
    public function setScript($script)
    {
    }
    function convertToMailTo($match)
    {
    }
    function convertToHref($match)
    {
    }
    private $codeTableClass = "";
    private $codeHeadClass = "";
    private $codeBodyClass = "";
    private $codeTextClass = "";
    public function setCodeClasses($tableClass, $headClass, $bodyClass, $textAreaClass)
    {
    }
    function convertCodeTagForHtmlBefore($text = "")
    {
    }
    function convertCodeTagForHtmlAfter($text = "")
    {
    }
}
class CJSCore
{
    const USE_ADMIN = 'admin';
    const USE_PUBLIC = 'public';
    private static $arRegisteredExt = array();
    private static $arCurrentlyLoadedExt = array();
    private static $bInited = \false;
    private static $compositeMode = \false;
    /*
    ex: CJSCore::RegisterExt('timeman', array(
    	'js' => '/bitrix/js/timeman/core_timeman.js',
    	'css' => '/bitrix/js/timeman/css/core_timeman.css',
    	'lang' => '/bitrix/modules/timeman/js_core_timeman.php',
    	'rel' => array(needed extensions for automatic inclusion),
    	'use' => CJSCore::USE_ADMIN|CJSCore::USE_PUBLIC
    ));
    */
    public static function RegisterExt($name, $arPaths)
    {
    }
    public static function Init($arExt = array(), $bReturn = \false)
    {
    }
    protected static function registerAssetsAsLoaded($assets)
    {
    }
    /**
     * @param $code - name of extension
     */
    public static function markExtensionLoaded($code)
    {
    }
    /**
     * Returns true if Core JS was inited
     * @return bool
     */
    public static function IsCoreLoaded()
    {
    }
    /**
     * Returns true if JS extension was loaded.
     * @param string $code Code of JS extension.
     * @return bool
     */
    public static function isExtensionLoaded($code)
    {
    }
    public static function GetCoreMessagesScript($compositeMode = \false)
    {
    }
    public static function GetCoreMessages($compositeMode = \false)
    {
    }
    public static function GetHTML($arExt)
    {
    }
    /**
     *
     * When all of scripts are moved to the body, we need this code to add special classes (bx-chrome, bx-ie...) to <html> tag.
     * @return string
     */
    public static function GetInlineCoreJs()
    {
    }
    public static function GetScriptsList()
    {
    }
    public static function GetCoreConfig()
    {
    }
    private static function _loadExt($ext, $bReturn)
    {
    }
    public static function ShowTimer($params)
    {
    }
    public static function IsExtRegistered($ext)
    {
    }
    public static function getExtInfo($ext)
    {
    }
    private static function _RegisterStandardExt()
    {
    }
    private static function _loadJS($js, $bReturn)
    {
    }
    private static function _loadLang($lang, $bReturn, $arAdditionalMess = \false)
    {
    }
    private static function _loadCSS($css, $bReturn)
    {
    }
    /**
     * @param string $extension Extension name
     * @param array $settings Extension settings
     * @param bool $bReturn
     * @return string
     * @throws Main\ArgumentException
     */
    private static function loadSettings($extension, $settings, $bReturn = \false)
    {
    }
    private static function registerJsBundle($bundleName, $files)
    {
    }
    private static function registerCssBundle($bundleName, $files)
    {
    }
}
class CUtil
{
    protected static $alreadyDecodedRequest = \false;
    public static function addslashes($s)
    {
    }
    public static function closetags($html)
    {
    }
    public static function JSEscape($s)
    {
    }
    public static function JSUrlEscape($s)
    {
    }
    public static function PhpToJSObject($arData, $bWS = \false, $bSkipTilda = \false, $bExtType = \false)
    {
    }
    //$data must be in LANG_CHARSET encoding
    public static function JsObjectToPhp($data, $bSkipNative = \false)
    {
    }
    public static function DecodeUtf16($ch)
    {
    }
    public static function JSPostUnescape()
    {
    }
    public static function decodeURIComponent(&$item)
    {
    }
    public static function DetectUTF8($string)
    {
    }
    public static function ConvertToLangCharset($string)
    {
    }
    public static function GetAdditionalFileURL($file, $bSkipCheck = \false)
    {
    }
    public static function InitJSCore($arExt = array(), $bReturn = \false)
    {
    }
    public static function GetPopupSize($resize_id, $arDefaults = array())
    {
    }
    public static function GetPopupOptions($wnd_id)
    {
    }
    public static function SetPopupOptions($wnd_id, $arOptions)
    {
    }
    public static function translit($str, $lang, $params = array())
    {
    }
    /**
     * @deprecated Use strlen()
     * @param $buf
     * @return int
     */
    public static function BinStrlen($buf)
    {
    }
    /**
     * @deprecated Use substr()
     * @param $buf
     * @param $start
     * @param array $args
     * @return string
     */
    public static function BinSubstr($buf, $start, ...$args)
    {
    }
    /**
     * @deprecated Use strpos()
     * @param $haystack
     * @param $needle
     * @param int $offset
     * @return false|int
     */
    public static function BinStrpos($haystack, $needle, $offset = 0)
    {
    }
    /**
     * Convert shorthand notation to integer equivalent
     * @param string $str
     * @return int
     *
     */
    public static function Unformat($str)
    {
    }
    /**
     * Adjust php pcre.backtrack_limit
     * @param int $val
     * @return void
     *
     */
    public static function AdjustPcreBacktrackLimit($val)
    {
    }
    public static function getSitesByWizard($wizard)
    {
    }
}
class CHTTP
{
    var $url = '';
    var $status = 0;
    var $result = '';
    var $fp = \null;
    var $headers = array();
    var $cookies = array();
    var $http_timeout = 30;
    var $user_agent;
    var $follow_redirect = \false;
    var $errno;
    var $errstr;
    var $additional_headers = array();
    private $redirectMax = 5;
    private $redirectsMade = 0;
    private static $lastSetStatus = "";
    public function __construct()
    {
    }
    public static function URN2URI($urn, $server_name = '')
    {
    }
    public function Download($url, $file)
    {
    }
    /**
     * @deprecated Use Bitrix\Main\Web\HttpClient
     */
    public function Get($url)
    {
    }
    /**
     * @deprecated Use Bitrix\Main\Web\HttpClient
     */
    public function Post($url, $arPostData)
    {
    }
    public static function PrepareData($arPostData, $prefix = '')
    {
    }
    /**
     * @deprecated Use Bitrix\Main\Web\HttpClient
     */
    public function HTTPQuery($method, $url, $postdata = '')
    {
    }
    /**
     * @deprecated Use Bitrix\Main\Web\HttpClient
     */
    public function Query($method, $host, $port, $path, $postdata = \false, $proto = '', $post_content_type = 'N', $dont_wait_answer = \false)
    {
    }
    public function SetAuthBasic($user, $pass)
    {
    }
    /**
     * @deprecated Use Bitrix\Main\Web\Uri
     */
    public static function ParseURL($url)
    {
    }
    public function ParseHeaders($strHeaders)
    {
    }
    public function setFollowRedirect($follow)
    {
    }
    public function setRedirectMax($n)
    {
    }
    /**
     * @deprecated Use Bitrix\Main\Web\HttpClient
     */
    public static function sGet($url, $follow_redirect = \false)
    {
    }
    /**
     * @deprecated Use Bitrix\Main\Web\HttpClient
     */
    public static function sPost($url, $arPostData, $follow_redirect = \false)
    {
    }
    public function SetAdditionalHeaders($arHeader = array())
    {
    }
    /** Static Get with the ability to add headers and set the http timeout
     * @deprecated Use Bitrix\Main\Web\HttpClient
     * @static
     * @param $url
     * @param array $arHeader
     * @param int $httpTimeout
     * @return bool|string
     */
    public static function sGetHeader($url, $arHeader = array(), $httpTimeout = 0)
    {
    }
    /** Static Post with the ability to add headers and set the http timeout
     * @deprecated Use Bitrix\Main\Web\HttpClient
     * @static
     * @param $url
     * @param $arPostData
     * @param array $arHeader
     * @param int $http_timeout
     * @return bool|string
     */
    public static function sPostHeader($url, $arPostData, $arHeader = array(), $http_timeout = 0)
    {
    }
    public static function SetStatus($status)
    {
    }
    public static function GetLastStatus()
    {
    }
    public static function SetAuthHeader($bDigestEnabled = \true)
    {
    }
    public static function ParseAuthRequest()
    {
    }
    public static function ParseDigest($sDigest)
    {
    }
    public static function urlAddParams($url, $add_params, $options = array())
    {
    }
    public static function urlDeleteParams($url, $delete_params, $options = array())
    {
    }
    public static function urnEncode($str, $charset = \false)
    {
    }
    public static function urnDecode($str, $charset = \false)
    {
    }
    // search for /../ and ulrencoded /../
    public static function isPathTraversalUri($uri)
    {
    }
}
class UpdateTools
{
    public static function CheckUpdates()
    {
    }
    public static function SetUpdateResult()
    {
    }
    public static function SetUpdateError($strError)
    {
    }
    public static function GetUpdateResult()
    {
    }
}
class CSpacer
{
    var $iMaxChar;
    var $symbol;
    function __construct($iMaxChar, $symbol)
    {
    }
    function InsertSpaces($string)
    {
    }
    function __InsertSpacesCallback($arMatch)
    {
    }
}
/**
 * HTML form elements
 */
/**
 * Returns HTML "input"
 */
function InputType($strType, $strName, $strValue, $strCmp, $strPrintValue = \false, $strPrint = "", $field1 = "", $strId = "")
{
}
/**
 * Returns HTML "select"
 *
 * @param string $strBoxName Input name
 * @param CDBResult $a DB result with items
 * @param string $strDetText Empty item text
 * @param string $strSelectedVal Selected item value
 * @param string $field1 Additional attributes
 * @return string
 */
function SelectBox($strBoxName, $a, $strDetText = "", $strSelectedVal = "", $field1 = "class=\"typeselect\"")
{
}
/**
 * Returns HTML multiple "select"
 *
 * @param string $strBoxName Input name
 * @param CDBResult $a DB result with items
 * @param array $arr Selected values
 * @param string $strDetText Empty item text
 * @param bool $strDetText_selected Allow to choose an empty item
 * @param string $size Size attribute
 * @param string $field1 Additional attributes
 * @return string
 */
function SelectBoxM($strBoxName, $a, $arr, $strDetText = "", $strDetText_selected = \false, $size = "5", $field1 = "class=\"typeselect\"")
{
}
/**
 * Returns HTML multiple "select" from array
 *
 * @param string $strBoxName Input name
 * @param array $a Array with items
 * @param array|false $arr Selected values
 * @param string $strDetText Empty item text
 * @param bool $strDetText_selected Allow to choose an empty item
 * @param string $size Size attribute
 * @param string $field1 Additional attributes
 * @return string
 */
function SelectBoxMFromArray($strBoxName, $a, $arr, $strDetText = "", $strDetText_selected = \false, $size = "5", $field1 = "class='typeselect'")
{
}
/**
 * Returns HTML "select" from array data
 */
function SelectBoxFromArray($strBoxName, $db_array, $strSelectedVal = "", $strDetText = "", $field1 = "class='typeselect'", $go = \false, $form = "form1")
{
}
/**
 * Date functions
 */
function Calendar($sFieldName, $sFormName = "skform", $sFromName = "", $sToName = "")
{
}
function CalendarDate($sFromName, $sFromVal, $sFormName = "skform", $size = "10", $param = "class=\"typeinput\"")
{
}
function CalendarPeriod($sFromName, $sFromVal, $sToName, $sToVal, $sFormName = "skform", $show_select = "N", $field_select = "class=\"typeselect\"", $field_input = "class=\"typeinput\"", $size = "10")
{
}
/**
 * Checks date by format
 */
function CheckDateTime($datetime, $format = \false)
{
}
/**
 * Returns the number of a month
 */
function GetNumMonth($month)
{
}
/**
 * Returns unix timestamp from date string
 */
function MakeTimeStamp($datetime, $format = \false)
{
}
/**
 * Parse a date into an array
 */
function ParseDateTime($datetime, $format = \false)
{
}
/**
 * Adds value to the date in timestamp
 */
function AddToTimeStamp($arrAdd, $stmp = \false)
{
}
function ConvertDateTime($datetime, $to_format = \false, $from_site = \false, $bSearchInSitesOnly = \false)
{
}
function ConvertTimeStamp($timestamp = \false, $type = "SHORT", $site = \false, $bSearchInSitesOnly = \false)
{
}
/**
 * Converts a date from site format to specified one
 */
function FmtDate($str_date, $format = \false, $site = \false, $bSearchInSitesOnly = \false)
{
}
function _FormatDateMessage($value, $messages)
{
}
function IsAmPmMode($returnConst = \false)
{
}
function convertTimeToMilitary($strTime, $fromFormat = 'H:MI T', $toFormat = 'HH:MI')
{
}
/**
 * @param string|array $format
 * @param int|bool|\Bitrix\Main\Type\Date $timestamp
 * @param int|bool|\Bitrix\Main\Type\Date $now
 *
 * @return string
 */
function FormatDate($format = "", $timestamp = \false, $now = \false)
{
}
function FormatDateEx($strDate, $format = \false, $new_format = \false)
{
}
function FormatDateFromDB($date, $format = 'FULL', $phpFormat = \false)
{
}
// возвращает время в формате текущего языка по заданному Unix Timestamp
function GetTime($timestamp, $type = "SHORT", $site = \false, $bSearchInSitesOnly = \false)
{
}
// устаревшая функция
function AddTime($stmp, $add, $type = "D")
{
}
/**
 * @deprecated
 */
function ParseDate($strDate, $format = "dmy")
{
}
/**
 * @deprecated
 */
function MkDateTime($strDT, $format = "d.m.Y H:i:s")
{
}
/**
 * @deprecated
 */
function PHPFormatDateTime($strDateTime, $format = "d.m.Y H:i:s")
{
}
/**
 * Array functions
 */
/*
удаляет дубли в массиве сортировки
массив
Array
(
	[0] => T.NAME DESC
	[1] => T.NAME ASC
	[2] => T.ID ASC
	[3] => T.ID DESC
	[4] => T.DESC
)
преобразует в
Array
(
	[0] => T.NAME DESC
	[1] => T.ID ASC
	[2] => T.DESC ASC
)
*/
function DelDuplicateSort(&$arSort)
{
}
function array_convert_name_2_value($arr)
{
}
function InitBVarFromArr($arr)
{
}
function TrimArr(&$arr, $trim_value = \false)
{
}
function is_set(&$a, $k = \false)
{
}
/**
 * @deprecated Use \Bitrix\Main\Security\Random
 * @param int $pass_len
 * @param bool $pass_chars
 * @return string
 */
function randString($pass_len = 10, $pass_chars = \false)
{
}
/**
 * Alias for randString()
 * @deprecated Use \Bitrix\Main\Security\Random
 * @param int $len
 * @return string
 */
function GetRandomCode($len = 8)
{
}
function TruncateText($strText, $intLen)
{
}
function InsertSpaces($sText, $iMaxChar = 80, $symbol = " ", $bHTML = \false)
{
}
function TrimExAll($str, $symbol)
{
}
function TrimEx($str, $symbol, $side = "both")
{
}
/**
 * @deprecated Use Main\Text\Encoding::convertEncoding()
 * @param $s
 * @return mixed
 */
function utf8win1251($s)
{
}
function ToUpper($str, $lang = \false)
{
}
function ToLower($str, $lang = \false)
{
}
function convert_code_tag_for_email($text = "", $arMsg = array())
{
}
function PrepareTxtForEmail($text, $lang = \false, $convert_url_tag = \true, $convert_image_tag = \true)
{
}
function delete_special_symbols($text, $replace = "")
{
}
function convert_code_tag_for_html_before($text = "")
{
}
function convert_code_tag_for_html_after($text = "", $code_table_class, $code_head_class, $code_body_class, $code_textarea_class)
{
}
function convert_open_quote_tag($quote_table_class, $quote_head_class, $quote_body_class)
{
}
function convert_close_quote_tag()
{
}
function convert_quote_tag($text = "", $quote_table_class, $quote_head_class, $quote_body_class)
{
}
function extract_url($s)
{
}
function convert_to_href($url, $link_class = "", $event1 = "", $event2 = "", $event3 = "", $script = "", $link_target = "_self")
{
}
// используется как вспомогательная функция для TxtToHTML
function convert_to_mailto($s, $link_class = "")
{
}
function TxtToHTML($str, $bMakeUrls = \true, $iMaxStringLen = 0, $QUOTE_ENABLED = "N", $NOT_CONVERT_AMPERSAND = "Y", $CODE_ENABLED = "N", $BIU_ENABLED = "N", $quote_table_class = "quotetable", $quote_head_class = "tdquotehead", $quote_body_class = "tdquote", $code_table_class = "codetable", $code_head_class = "tdcodehead", $code_body_class = "tdcodebody", $code_textarea_class = "codetextarea", $link_class = "txttohtmllink", $arUrlEvent = array(), $link_target = "_self")
{
}
/*********************************
Convertation of HTML to text
*********************************/
function HTMLToTxt($str, $strSiteUrl = "", $aDelete = array(), $maxlen = 70)
{
}
function FormatText($strText, $strTextType = "text")
{
}
function htmlspecialcharsEx($str)
{
}
function htmlspecialcharsback($str)
{
}
function htmlspecialcharsbx($string, $flags = \ENT_COMPAT, $doubleEncode = \true)
{
}
function CheckDirPath($path, $bPermission = \true)
{
}
function CopyDirFiles($path_from, $path_to, $ReWrite = \True, $Recursive = \False, $bDeleteAfterCopy = \False, $strExclude = "")
{
}
function DeleteDirFilesEx($path)
{
}
function DeleteDirFiles($frDir, $toDir, $arExept = array())
{
}
function RewriteFile($abs_path, $strContent)
{
}
function GetScriptFileExt()
{
}
function TrimUnsafe($path)
{
}
function RemoveScriptExtension($check_name)
{
}
function HasScriptExtension($check_name)
{
}
function GetFileExtension($path)
{
}
function GetFileNameWithoutExtension($path)
{
}
function GetFileName($path)
{
}
function IsFileUnsafe($name)
{
}
function GetFileType($path)
{
}
function GetDirectoryIndex($path, $strDirIndex = \false)
{
}
function GetDirIndex($path, $strDirIndex = \false)
{
}
function GetDirIndexArray($strDirIndex = \false)
{
}
function GetPagePath($page = \false, $get_index_page = \null)
{
}
function GetRequestUri()
{
}
//light version of GetPagePath() for menu links
function GetFileFromURL($page, $get_index_page = \null)
{
}
function GetDirPath($sPath)
{
}
/*
This function emulates php internal function basename
but does not behave badly on broken locale settings
*/
function bx_basename($path, $ext = "")
{
}
function bxstrrpos($haystack, $needle)
{
}
function Rel2Abs($curdir, $relpath)
{
}
/**
 * @deprecated Use \Bitrix\Main\IO\Path::normalize()
 */
function _normalizePath($strPath)
{
}
function removeDocRoot($path)
{
}
/*********************************************************************
Language files
*********************************************************************/
function GetMessageJS($name, $aReplace = \false)
{
}
function GetMessage($name, $aReplace = \null)
{
}
/**
 * @deprecated
 */
function HasMessage($name)
{
}
/** @deprecated */
function GetLangFileName($before, $after, $lang = \false)
{
}
/**
 * @deprecated Use \Bitrix\Main\Localization\Loc
 */
function __IncludeLang($path, $bReturnArray = \false, $bFileChecked = \false)
{
}
/**
 * @deprecated Use \Bitrix\Main\Localization\Loc
 */
function IncludeTemplateLangFile($filepath, $lang = \false)
{
}
function IncludeModuleLangFile($filepath, $lang = \false, $bReturnArray = \false)
{
}
/**
 * @deprecated Use \Bitrix\Main\Localization\Loc
 */
function LangSubst($lang)
{
}
/*********************************************************************
Debugging
*********************************************************************/
function mydump($thing, $maxdepth = -1, $depth = 0)
{
}
function SendError($error)
{
}
function AddMessage2Log($sText, $sModule = "", $traceDepth = 6, $bShowArgs = \false)
{
}
function AddEventToStatFile($module, $action, $tag, $label, $action_type = '', $user_id = \null)
{
}
/*********************************************************************
	Quoting reverse (to be removed with 5.4.0)
*********************************************************************/
function UnQuote($str, $type, $preserve_nulls = \false)
{
}
function UnQuoteEx(&$str, $key, $params)
{
}
function __unquoteitem(&$item, $key, $param = array())
{
}
function UnQuoteArr(&$arr, $syb = \false, $preserve_nulls = \false)
{
}
function UnQuoteAll()
{
}
/*********************************************************************
Other functions
*********************************************************************/
function LocalRedirect($url, $skip_security_check = \false, $status = "302 Found")
{
}
function WriteFinalMessage($message = "")
{
}
function FindUserID($tag_name, $tag_value, $user_name = "", $form_name = "form1", $tag_size = "3", $tag_maxlength = "", $button_value = "...", $tag_class = "typeinput", $button_class = "tablebodybutton", $search_page = "/bitrix/admin/user_search.php")
{
}
function GetWhoisLink($ip, $class = '')
{
}
function IsIE()
{
}
function GetCountryByID($id, $lang = \LANGUAGE_ID)
{
}
function GetCountryArray($lang = \LANGUAGE_ID)
{
}
function GetCountries($lang = \LANGUAGE_ID)
{
}
function GetCountryIdByCode($code)
{
}
function GetCountryCodeById($countryId)
{
}
function minimumPHPVersion($vercheck)
{
}
function FormDecode()
{
}
/**
 * @deprecated Use Bitrix\Main\Web\HttpClient
 */
function QueryGetData($SITE, $PORT, $PATH, $QUERY_STR, &$errno, &$errstr, $sMethod = "GET", $sProto = "", $sContentType = 'N')
{
}
function xmlize_xmldata($data)
{
}
function xml_depth_xmldata($vals, &$i)
{
}
function Help($module = "", $anchor = "", $help_file = "")
{
}
function InitBVar(&$var)
{
}
function init_get_params($url)
{
}
function InitURLParam($url = \false)
{
}
function _ShowHtmlspec($str)
{
}
function ShowNote($strNote, $cls = "notetext")
{
}
function ShowError($strError, $cls = "errortext")
{
}
function ShowMessage($arMess)
{
}
function DeleteParam($ParamNames)
{
}
function check_email($email, $bStrict = \false)
{
}
function initvar($varname, $value = '')
{
}
function ClearVars($prefix = "str_")
{
}
function roundEx($value, $prec = 0)
{
}
function roundDB($value, $len = 18, $dec = 4)
{
}
function bitrix_sessid()
{
}
function bitrix_sessid_set($val = \false)
{
}
function bitrix_sessid_val()
{
}
function bitrix_sess_sign()
{
}
function check_bitrix_sessid($varname = 'sessid')
{
}
function bitrix_sessid_get($varname = 'sessid')
{
}
function bitrix_sessid_post($varname = 'sessid', $returnInvocations = \false)
{
}
function print_url($strUrl, $strText, $sParams = "")
{
}
function IncludeAJAX()
{
}
function GetMenuTypes($site = \false, $default_value = \false)
{
}
function SetMenuTypes($armt, $site = '', $description = \false)
{
}
function ParseFileContent($filesrc, $params = array())
{
}
function EscapePHPString($str, $encloser = '"')
{
}
function UnEscapePHPString($str, $encloser = '"')
{
}
function CheckSerializedData($str, $max_depth = 200)
{
}
function NormalizePhone($number, $minLength = 10)
{
}
function bxmail($to, $subject, $message, $additional_headers = "", $additional_parameters = "", \Bitrix\Main\Mail\Context $context = \null)
{
}
function bx_accelerator_reset()
{
}
function ini_get_bool($param)
{
}
/**
 * Sorting array by column.
 * You can use short mode: Collection::sortByColumn($arr, 'value'); This is equal Collection::sortByColumn($arr, array('value' => SORT_ASC))
 *
 * Pay attention: if two members compare as equal, their relative order in the sorted array is undefined. The sorting is not stable.
 *
 * More example:
 * Collection::sortByColumn($arr, array('value' => array(SORT_NUMERIC, SORT_ASC), 'attr' => SORT_DESC), array('attr' => 'strlen'), 'www');
 *
 * @param array        $array
 * @param string|array $columns
 * @param string|array $callbacks
 * @param bool         $preserveKeys If false numeric keys will be re-indexed. If true - preserve.
 * @param null         $defaultValueIfNotSetValue If value not set - use $defaultValueIfNotSetValue (any cols)
 */
function sortByColumn(array &$array, $columns, $callbacks = '', $defaultValueIfNotSetValue = \null, $preserveKeys = \false)
{
}
function getLocalPath($path, $baseFolder = "/bitrix")
{
}
/**
 * Set session expired, e.g. if you want to destroy session after this hit
 * @param bool $pIsExpired
 */
function setSessionExpired($pIsExpired = \true)
{
}
/**
 * @return bool
 */
function isSessionExpired()
{
}