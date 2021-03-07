<?php

abstract class CAllMain
{
    var $ma, $mapos;
    var $sDocPath2, $sDirPath, $sUriParam;
    var $sDocTitle;
    var $sDocTitleChanger = \null;
    var $arPageProperties = array();
    var $arPagePropertiesChanger = array();
    var $arDirProperties = array();
    var $sLastError;
    /** @var Asset */
    public $oAsset;
    /**
     * Array of css, js, and inline strings
     */
    var $sPath2css = array();
    var $arHeadStrings = array();
    var $arHeadScripts = array();
    /**
     * Additional css, js and inline strings. Need to include in specifik place.
     */
    var $arHeadAdditionalCSS = array();
    var $arHeadAdditionalScripts = array();
    var $arHeadAdditionalStrings = array();
    var $arHeadBeforeCSSStrings = array();
    var $bInAjax = \false;
    var $version;
    var $arAdditionalChain = array();
    var $FILE_PERMISSION_CACHE = array();
    var $arPanelButtons = array();
    var $arPanelFutureButtons = array();
    var $ShowLogout = \false;
    var $ShowPanel = \NULL;
    var $PanelShowed = \false;
    var $showPanelWasInvoked = \false;
    var $buffer_content = array();
    var $buffer_content_type = array();
    var $buffer_man = \false;
    var $buffer_manual = \false;
    var $auto_buffer_cleaned, $buffered = \false;
    /**
     * @var CApplicationException
     */
    var $LAST_ERROR = \false;
    var $ERROR_STACK = array();
    var $arIncludeDebug = array();
    var $aCachedComponents = array();
    var $ShowIncludeStat = \false;
    var $_menu_recalc_counter = 0;
    var $__view = array();
    /** @var CEditArea */
    var $editArea = \false;
    /** @var array */
    var $arComponentMatch = \false;
    var $arAuthResult;
    private $__componentStack = array();
    public function __construct()
    {
    }
    public function reinitPath()
    {
    }
    public function GetCurPage($get_index_page = \null)
    {
    }
    public function SetCurPage($page, $param = \false)
    {
    }
    public function GetCurUri($addParam = "", $get_index_page = \null)
    {
    }
    public function GetCurPageParam($strParam = "", $arParamKill = array(), $get_index_page = \null)
    {
    }
    public function GetCurParam()
    {
    }
    public function GetCurDir()
    {
    }
    public function GetFileRecursive($strFileName, $strDir = \false)
    {
    }
    public function IncludeAdminFile($strTitle, $filepath)
    {
    }
    public function SetAuthResult($arAuthResult)
    {
    }
    public function AuthForm($mess, $show_prolog = \true, $show_epilog = \true, $not_show_links = "N", $do_die = \true)
    {
    }
    public function ShowAuthForm($message)
    {
    }
    /**
     * @param bool $mode
     */
    public function SetNeedCAPTHA($mode)
    {
    }
    /**
     * @return bool
     */
    public function NeedCAPTHA()
    {
    }
    public function NeedCAPTHAForLogin($login)
    {
    }
    public function GetMenuHtml($type = "left", $bMenuExt = \false, $template = \false, $sInitDir = \false)
    {
    }
    public function GetMenuHtmlEx($type = "left", $bMenuExt = \false, $template = \false, $sInitDir = \false)
    {
    }
    public function GetMenu($type = "left", $bMenuExt = \false, $template = \false, $sInitDir = \false)
    {
    }
    /**
     * @deprecated Use HttpRequest::isHttps()
     * @return bool
     */
    public static function IsHTTPS()
    {
    }
    public function GetTitle($property_name = \false, $strip_tags = \false)
    {
    }
    public function SetTitle($title, $arOptions = \null)
    {
    }
    public function ShowTitle($property_name = "title", $strip_tags = \true)
    {
    }
    public function SetPageProperty($PROPERTY_ID, $PROPERTY_VALUE, $arOptions = \null)
    {
    }
    public function GetPageProperty($PROPERTY_ID, $default_value = \false)
    {
    }
    public function ShowProperty($PROPERTY_ID, $default_value = \false)
    {
    }
    public function GetProperty($PROPERTY_ID, $default_value = \false)
    {
    }
    public function GetPagePropertyList()
    {
    }
    public static function InitPathVars(&$site, &$path)
    {
    }
    public function SetDirProperty($PROPERTY_ID, $PROPERTY_VALUE, $path = \false)
    {
    }
    public function InitDirProperties($path)
    {
    }
    public function GetDirProperty($PROPERTY_ID, $path = \false, $default_value = \false)
    {
    }
    public function GetDirPropertyList($path = \false)
    {
    }
    public function GetMeta($id, $meta_name = \false, $bXhtmlStyle = \true)
    {
    }
    public function GetLink($id, $rel = \null, $bXhtmlStyle = \true)
    {
    }
    public static function ShowBanner($type, $html_before = "", $html_after = "")
    {
    }
    public function ShowMeta($id, $meta_name = \false, $bXhtmlStyle = \true)
    {
    }
    public function ShowLink($id, $rel = \null, $bXhtmlStyle = \true)
    {
    }
    public function SetAdditionalCSS($Path2css, $additional = \false)
    {
    }
    /** @deprecated */
    public function GetAdditionalCSS()
    {
    }
    public function GetCSSArray()
    {
    }
    /** @deprecated use Asset::getInstance()->getCss() */
    public function GetCSS($cMaxStylesCnt = \true, $bXhtmlStyle = \true, $assetTargetType = \Bitrix\Main\Page\AssetShowTargetType::ALL)
    {
    }
    public function ShowCSS($cMaxStylesCnt = \true, $bXhtmlStyle = \true)
    {
    }
    /** @deprecated $Asset::getInstance->addString($str, $bUnique, $location); */
    public function AddHeadString($str, $bUnique = \false, $location = \Bitrix\Main\Page\AssetLocation::AFTER_JS_KERNEL)
    {
    }
    public function GetHeadStrings($location = \Bitrix\Main\Page\AssetLocation::AFTER_JS_KERNEL)
    {
    }
    public function ShowHeadStrings()
    {
    }
    /** @deprecated use Asset::getInstance()->addJs($src, $additional) */
    public function AddHeadScript($src, $additional = \false)
    {
    }
    /** @deprecated use Asset::getInstance()->addBeforeJs($content) */
    public function AddLangJS($content)
    {
    }
    /** @deprecated use Asset::getInstance()->addString($content, false, \Bitrix\Main\Page\AssetLocation::AFTER_JS, $mode) */
    public function AddAdditionalJS($content)
    {
    }
    public static function IsExternalLink($src)
    {
    }
    /** @deprecated deprecated use Asset::addCssKernelInfo() */
    public function AddCSSKernelInfo($module = '', $arCSS = array())
    {
    }
    /** @deprecated deprecated use Asset::addJsKernelInfo() */
    public function AddJSKernelInfo($module = '', $arJS = array())
    {
    }
    /** @deprecated use Asset::getInstance()->groupJs($from, $to) */
    public function GroupModuleJS($from = '', $to = '')
    {
    }
    /** @deprecated use Asset::getInstance()->moveJs($module) */
    public function MoveJSToBody($module = '')
    {
    }
    /** @deprecated use Asset::getInstance()->groupCss($from, $to) */
    public function GroupModuleCSS($from = '', $to = '')
    {
    }
    /** @deprecated use Asset::getInstance()->setUnique($type, $id) */
    public function SetUniqueCSS($id = '', $cssType = 'page')
    {
    }
    /** @deprecated */
    public function SetUniqueJS($id = '', $jsType = 'page')
    {
    }
    /** @deprecated use Asset::getInstance()->getJs($type) */
    public function GetHeadScripts($type = 0)
    {
    }
    public function ShowHeadScripts()
    {
    }
    public function ShowBodyScripts()
    {
    }
    public function ShowHead($bXhtmlStyle = \true)
    {
    }
    public function ShowAjaxHead($bXhtmlStyle = \true, $showCSS = \true, $showStrings = \true, $showScripts = \true)
    {
    }
    public function SetShowIncludeAreas($bShow = \true)
    {
    }
    public function GetShowIncludeAreas()
    {
    }
    public function SetPublicShowMode($mode)
    {
    }
    public function GetPublicShowMode()
    {
    }
    public function SetEditArea($areaId, $arIcons)
    {
    }
    public function IncludeStringBefore()
    {
    }
    public function IncludeStringAfter($arIcons = \false, $arParams = array())
    {
    }
    public function IncludeString($string, $arIcons = \false)
    {
    }
    public function GetTemplatePath($rel_path)
    {
    }
    public function SetTemplateCSS($rel_path)
    {
    }
    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    // COMPONENTS 2.0 >>>>>
    public function IncludeComponent($componentName, $componentTemplate, $arParams = array(), $parentComponent = \null, $arFunctionParams = array(), $returnResult = \false)
    {
    }
    /**
     * Returns false or instance of current component being executed.
     *
     * @return boolean|CBitrixComponent
     *
     */
    public function getCurrentIncludedComponent()
    {
    }
    /**
     * Returns a current component stack.
     * @return array
     */
    public function getComponentStack()
    {
    }
    public function AddViewContent($view, $content, $pos = 500)
    {
    }
    public function ShowViewContent($view)
    {
    }
    public function GetViewContent($view)
    {
    }
    public static function OnChangeFileComponent($path, $site)
    {
    }
    // <<<<< COMPONENTS 2.0
    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
    // $arParams - do not change!
    public function IncludeFile($rel_path, $arParams = array(), $arFunctionParams = array())
    {
    }
    public function AddChainItem($title, $link = "", $bUnQuote = \true)
    {
    }
    public function GetNavChain($path = \false, $iNumFrom = 0, $sNavChainPath = \false, $bIncludeOnce = \false, $bShowIcons = \true)
    {
    }
    public function _mkchain($arChain, $strChainTemplate, $bIncludeOnce = \false, $bShowIcons = \true)
    {
    }
    public function ShowNavChain($path = \false, $iNumFrom = 0, $sNavChainPath = \false)
    {
    }
    public function ShowNavChainEx($path = \false, $iNumFrom = 0, $sNavChainPath = \false)
    {
    }
    /*****************************************************/
    public function SetFileAccessPermission($path, $arPermissions, $bOverWrite = \true)
    {
    }
    public function RemoveFileAccessPermission($path, $arGroups = \false)
    {
    }
    public function CopyFileAccessPermission($path_from, $path_to, $bOverWrite = \false)
    {
    }
    public function GetFileAccessPermission($path, $groups = \false, $task_mode = \false)
    {
    }
    public function GetFileAccessPermissionByUser($intUserID, $path, $groups = \false, $task_mode = \false)
    {
    }
    /***********************************************/
    public function SaveFileContent($abs_path, $strContent)
    {
    }
    public function GetFileContent($path)
    {
    }
    /**
     * @deprecated Use LPA::Process()
     */
    public static function ProcessLPA($filesrc = \false, $old_filesrc = \false)
    {
    }
    /**
     * @deprecated Use LPA::ComponentChecker()
     */
    public static function LPAComponentChecker(&$arParams, &$arPHPparams, $parentParamName = \false)
    {
    }
    public static function _ReplaceNonLatin($str)
    {
    }
    public function GetLangSwitcherArray()
    {
    }
    public function GetSiteSwitcherArray()
    {
    }
    /*
    Returns an array of roles for a module
    W - max rights (admin)
    D - min rights (access denied)
    
    $module_id - a module id
    $arGroups - array of groups ID, if not set then for current useer
    $use_default_role - "Y" - use default role
    $max_role_for_super_admin - "Y" - for group ID=1 return max rights
    */
    public static function GetUserRoles($module_id, $arGroups = \false, $use_default_role = "Y", $max_role_for_super_admin = "Y", $site_id = \false)
    {
    }
    /*
    Returns an array of rights for a module
    W - max rights (admin)
    D - min rights (access denied)
    
    $module_id - a module id
    $arGroups - array of groups ID, if not set then for current useer
    $use_default_level - "Y" - use default role
    $max_right_for_super_admin - "Y" - for group ID=1 return max rights
    */
    public static function GetUserRight($module_id, $arGroups = \false, $use_default_level = "Y", $max_right_for_super_admin = "Y", $site_id = \false)
    {
    }
    public static function GetUserRightArray($module_id, $arGroups = \false)
    {
    }
    public static function GetGroupRightList($arFilter, $site_id = \false)
    {
    }
    public static function GetGroupRight($module_id, $arGroups = \false, $use_default_level = "Y", $max_right_for_super_admin = "Y", $site_id = \false)
    {
    }
    public static function SetGroupRight($module_id, $group_id, $right, $site_id = \false)
    {
    }
    public static function DelGroupRight($module_id = '', $arGroups = array(), $site_id = \false)
    {
    }
    public static function GetMainRightList()
    {
    }
    public static function GetDefaultRightList()
    {
    }
    public static function err_mess()
    {
    }
    /*
    Returns a cookie value by the name
    
    $name			: cookie name (without prefix)
    $name_prefix	: name prefix (if not set get from options)
    */
    public function get_cookie($name, $name_prefix = \false)
    {
    }
    /**
     * Sets a cookie and spreads it through domains.
     *
     * @deprecated Use \Bitrix\Main\HttpResponse::addCookie().
     *
     * @param string $name Cookie name (without prefix)
     * @param string $value value
     * @param bool|int $time expire date
     * @param string $folder cookie dir
     * @param bool|string $domain cookie domain
     * @param bool $secure secure flag
     * @param bool|int $spread to spread or not to spread
     * @param bool $name_prefix name prefix (if not set get from options)
     * @param bool $httpOnly
     */
    public function set_cookie($name, $value, $time = \false, $folder = "/", $domain = \false, $secure = \false, $spread = \true, $name_prefix = \false, $httpOnly = \false)
    {
    }
    /**
     * @deprecated Use \Bitrix\Main\Web\Cookie::getCookieDomain().
     * @return string
     */
    public function GetCookieDomain()
    {
    }
    public function StoreCookies()
    {
    }
    public function HoldSpreadCookieHTML($bSet = \false)
    {
    }
    // Returns string with images to spread cookies
    public function GetSpreadCookieHTML()
    {
    }
    /**
     * Returns array of urls which contain signed cross domain cookies.
     *
     * @return array
     */
    public function GetSpreadCookieUrls()
    {
    }
    public function ShowSpreadCookieHTML()
    {
    }
    public function AddPanelButton($arButton, $bReplace = \false)
    {
    }
    public function AddPanelButtonMenu($button_id, $arMenuItem)
    {
    }
    public function GetPanel()
    {
    }
    public function ShowPanel()
    {
    }
    public static function PrintHKGlobalUrlVar()
    {
    }
    public abstract function GetLang($cur_dir = \false, $cur_host = \false);
    public function GetSiteByDir($cur_dir = \false, $cur_host = \false)
    {
    }
    public function RestartWorkarea($start = \false)
    {
    }
    public function AddBufferContent($callback)
    {
    }
    public function RestartBuffer()
    {
    }
    public function &EndBufferContentMan()
    {
    }
    public function EndBufferContent($content = "")
    {
    }
    public function ResetException()
    {
    }
    public function ThrowException($msg, $id = \false)
    {
    }
    public function GetException()
    {
    }
    /**
     * @deprecated Use Main\Text\Encoding::convertEncoding()
     * @param $string
     * @param $charset_in
     * @param $charset_out
     * @return mixed
     */
    public function ConvertCharset($string, $charset_in, $charset_out)
    {
    }
    /**
     * @deprecated Use Main\Text\Encoding::convertEncoding()
     * @param $arData
     * @param $charset_from
     * @param $charset_to
     * @return mixed
     */
    public function ConvertCharsetArray($arData, $charset_from, $charset_to)
    {
    }
    public function CaptchaGetCode()
    {
    }
    public function CaptchaCheckCode($captcha_word, $captcha_sid)
    {
    }
    public function UnJSEscape($str)
    {
    }
    /**
     * @deprecated Use CAdminFileDialog::ShowScript instead
     */
    public static function ShowFileSelectDialog($event, $arResultDest, $arPath = array(), $fileFilter = "", $bAllowFolderSelect = \False)
    {
    }
    /*
    array(
    	"URL"=> 'url to open'
    	"PARAMS"=> array('param' => 'value') - additional params, 2nd argument of jsPopup.ShowDialog()
    ),
    */
    public function GetPopupLink($arUrl)
    {
    }
    public static function GetServerUniqID()
    {
    }
    public static function PrologActions()
    {
    }
    /**
     * Sends the response and terminates the application.
     * @param string $output String to output before termination
     */
    public static function FinalActions($output = "")
    {
    }
    /**
     * @internal
     */
    public static function RunFinalActionsInternal()
    {
    }
    /**
     * @deprecated Will be removed soon
     */
    public static function EpilogActions()
    {
    }
    /**
     * @deprecated Use \Bitrix\Main\Application::addBackgroundJob()
     * @param string|bool $func
     * @param array $args
     * @return bool|null
     */
    public static function ForkActions($func = \false, $args = array())
    {
    }
}
class CAllSite
{
    var $LAST_ERROR;
    public static function InDir($strDir)
    {
    }
    public static function InPeriod($iUnixTimestampFrom, $iUnixTimestampTo)
    {
    }
    public static function InGroup($arGroups)
    {
    }
    public static function GetWeekStart()
    {
    }
    public static function GetDateFormat($type = "FULL", $lang = \false, $bSearchInSitesOnly = \false)
    {
    }
    public static function GetTimeFormat($lang = \false, $bSearchInSitesOnly = \false)
    {
    }
    public function CheckFields($arFields, $ID = \false)
    {
    }
    public static function SaveDomains($LID, $domains)
    {
    }
    public function Add($arFields)
    {
    }
    public function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetTemplateList($site_id)
    {
    }
    public static function GetDefList()
    {
    }
    public static function GetSiteDocRoot($site)
    {
    }
    public static function GetSiteByFullPath($path, $bOneResult = \true)
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetArrayByID($ID)
    {
    }
    public static function GetDefSite($LID = \false)
    {
    }
    public static function IsDistinctDocRoots($arFilter = array())
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Returns drop down list with langs
    ///////////////////////////////////////////////////////////////////
    public static function SelectBox($sFieldName, $sValue, $sDefaultValue = "", $sFuncName = "", $field = "class=\"typeselect\"")
    {
    }
    public static function SelectBoxMulti($sFieldName, $Value)
    {
    }
    public static function GetNameTemplates()
    {
    }
    /**
     * Returns current name template
     *
     * If site is not defined - will look for name template for current language.
     * If there is no value for language - returns pre-defined value @see CSite::GetDefaultNameFormat
     * FORMAT_NAME constant can be set in dbconn.php
     *
     * @param $dummy Unused
     * @param string $site_id - use to get value for the specific site
     * @return string ex: #LAST_NAME# #NAME#
     */
    public static function GetNameFormat($dummy = \null, $site_id = "")
    {
    }
    /**
     * Returns default name template
     * By default: Russian #LAST_NAME# #NAME#, English #NAME# #LAST_NAME#
     *
     * @return string - one of two possible default values
     */
    public static function GetDefaultNameFormat()
    {
    }
    public static function GetCurTemplate()
    {
    }
}
class _CLangDBResult extends \CDBResult
{
    public function __construct($res)
    {
    }
    function Fetch()
    {
    }
}
class CAllLanguage
{
    var $LAST_ERROR;
    public static function GetList(&$by, &$order, $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    public function CheckFields($arFields, $ID = \false)
    {
    }
    public function Add($arFields)
    {
    }
    public function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function SelectBox($sFieldName, $sValue, $sDefaultValue = "", $sFuncName = "", $field = "class=\"typeselect\"")
    {
    }
    public static function GetLangSwitcherArray()
    {
    }
}
class CLanguage extends \CAllLanguage
{
}
class CLangAdmin extends \CLanguage
{
}
abstract class CAllFilterQuery
{
    var $cnt = 0;
    var $m_query;
    var $m_words;
    var $m_fields;
    var $m_kav;
    var $default_query_type;
    var $rus_bool_lang;
    var $error;
    var $procent;
    var $ex_sep;
    var $clob;
    var $div_fields;
    var $clob_upper;
    var $errorno;
    /*
    $default_query_type - logic for spaces
    $rus_bool_lang - use russian logic words
    $ex_sep - array with exceptions for delimiters
    */
    public function __construct($default_query_type = "and", $rus_bool_lang = "yes", $procent = "Y", $ex_sep = array(), $clob = "N", $div_fields = "Y", $clob_upper = "N")
    {
    }
    public abstract function BuildWhereClause($word);
    public function GetQueryString($fields, $query)
    {
    }
    public function CutKav($query)
    {
    }
    public function ParseQ($q)
    {
    }
    public function ParseStr($qwe)
    {
    }
    public function PrepareQuery($q)
    {
    }
}
class CAllLang extends \CAllSite
{
}
class CApplicationException
{
    var $msg, $id;
    public function __construct($msg, $id = \false)
    {
    }
    /** @deprecated */
    public function CApplicationException($msg, $id = \false)
    {
    }
    public function GetString()
    {
    }
    public function GetID()
    {
    }
    public function __toString()
    {
    }
}
class CAdminException extends \CApplicationException
{
    var $messages;
    public function __construct($messages, $id = \false)
    {
    }
    public function GetMessages()
    {
    }
    public function AddMessage($message)
    {
    }
}
class CCaptchaAgent
{
    public static function DeleteOldCaptcha($sec = 3600)
    {
    }
}
class CDebugInfo
{
    var $start_time;
    /** @var \Bitrix\Main\Diag\SqlTracker */
    var $savedTracker = \null;
    var $cache_size = 0;
    var $arCacheDebugSave;
    var $arResult;
    static $level = 0;
    var $is_comp = \true;
    var $index = 0;
    public function __construct($is_comp = \true)
    {
    }
    public function Start()
    {
    }
    public function Stop($rel_path = "", $path = "", $cache_type = "")
    {
    }
    public function Output($rel_path = "", $path = "", $cache_type = "")
    {
    }
}
function ShowImage($PICTURE_ID, $iMaxW = 0, $iMaxH = 0, $sParams = \false, $strImageUrl = "", $bPopup = \false, $strPopupTitle = \false, $iSizeWHTTP = 0, $iSizeHHTTP = 0)
{
}