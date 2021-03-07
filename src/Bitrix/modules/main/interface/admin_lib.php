<?php

class CAdminPage
{
    var $aModules = array();
    var $bInit = \false;
    var $publicMode = \false;
    private $isHideTitle = \false;
    public function __construct()
    {
    }
    public function Init()
    {
    }
    public function ShowTitle()
    {
    }
    public function ShowJsTitle()
    {
    }
    function GetTitle()
    {
    }
    public function isHideTitle()
    {
    }
    public function hideTitle()
    {
    }
    function GetJsTitle()
    {
    }
    public function ShowPopupCSS()
    {
    }
    public function ShowCSS()
    {
    }
    public function GetModulesCSS($module_id = '')
    {
    }
    public function ShowScript()
    {
    }
    public function ShowSectionIndex($menu_id, $module_id = \false)
    {
    }
    function ShowSound()
    {
    }
    public function getSSOSwitcherButton()
    {
    }
    public function getSelfFolderUrl()
    {
    }
}
class CAdminAjaxHelper
{
    /** @var  \Bitrix\Main\Context */
    protected $context;
    /** @var  \Bitrix\Main\HttpResponse */
    protected $httpResponse;
    /** @var  \Bitrix\Main\HttpRequest */
    protected $request;
    protected $skipResponse = \false;
    public function __construct()
    {
    }
    /**
     * Sends JSON response with status "success".
     */
    public function sendJsonSuccessResponse()
    {
    }
    /**
     * Sends JSON response with status "error" and with errors.
     * @param string $message Error message.
     */
    public function sendJsonErrorResponse($message)
    {
    }
    /**
     * Sends JSON response.
     * @param array $params Data structure.
     */
    public function sendJsonResponse($params = array())
    {
    }
    public function decodeUriComponent(\Bitrix\Main\HttpRequest $request = \null)
    {
    }
    /**
     * Returns whether this is an AJAX (XMLHttpRequest) request.
     * @return boolean
     */
    public function isAjaxRequest()
    {
    }
    protected function end()
    {
    }
}
class CAdminSidePanelHelper extends \CAdminAjaxHelper
{
    public function setSkipResponse($skip)
    {
    }
    public function sendSuccessResponse($responseType = "", $dataToForm = array())
    {
    }
    public function reloadPage($redirectUrl, $type)
    {
    }
    /**
     * Returns whether this is an AJAX (XMLHttpRequest) request and SipePanel request.
     * @return boolean
     */
    public function isSidePanelRequest()
    {
    }
    public function isSidePanel()
    {
    }
    public function isPublicSidePanel()
    {
    }
    public function isSidePanelFrame()
    {
    }
    public function isPublicFrame()
    {
    }
    public function setDefaultQueryParams($url)
    {
    }
    public function editUrlToPublicPage($url)
    {
    }
    public function localRedirect($url)
    {
    }
}
/* Left tree-view menu */
class CAdminMenu
{
    var $aGlobalMenu, $aActiveSections = array(), $aOpenedSections = array();
    var $bInit = \false;
    public function __construct()
    {
    }
    function Init($modules)
    {
    }
    function _sort($a, $b)
    {
    }
    function _IncludeMenu($fname)
    {
    }
    function _SetActiveItems(&$aMenu, $aSections = array())
    {
    }
    private function _get_menu_item_width($level)
    {
    }
    private function _get_menu_item_padding($level)
    {
    }
    function Show($aMenu, $level = 0)
    {
    }
    function ShowIcons($aMenu)
    {
    }
    function ShowList($aMenu)
    {
    }
    function ShowTable($aMenu)
    {
    }
    function ShowSubmenu($menu_id, $mode = "menu")
    {
    }
    function _ShowSubmenu(&$aMenu, $menu_id, $mode, $level = 0)
    {
    }
    function ActiveSection()
    {
    }
    function ActiveIcon()
    {
    }
    function AddOpenedSections($sections)
    {
    }
    function IsSectionActive($section)
    {
    }
    function GetOpenedSections()
    {
    }
}
/* Popup menu */
class CAdminPopup
{
    var $name;
    var $id;
    var $items;
    var $params;
    public function __construct($name, $id, $items = \false, $params = \false)
    {
    }
    function Show($bReturnValue = \false)
    {
    }
    public static function GetGlobalIconClass($old_icon)
    {
    }
    public static function PhpToJavaScript($items)
    {
    }
}
class CAdminPopupEx extends \CAdminPopup
{
    protected $element_id;
    /**
     * @param string $element_id
     * @param bool|array $items
     * @param bool|array $params
     */
    public function __construct($element_id, $items = \false, $params = \false)
    {
    }
    public function Show($bReturnValue = \false)
    {
    }
}
/* Context links menu for edit forms */
class CAdminContextMenu
{
    var $items;
    var $additional_items;
    var $bMenuAdded = \false;
    var $bRightBarAdded = \false;
    var $isSidePanel = \false;
    var $isPublicMode = \false;
    var $isPublicSidePanel = \false;
    var $isPublicFrame = \false;
    public function __construct($items, $additional_items = array())
    {
    }
    function prepareItemLink(array &$listItems)
    {
    }
    /**
     * @deprecated
     * @param $items
     * @param array $additional_items
     */
    function CAdminContextMenu($items, $additional_items = array())
    {
    }
    function Show()
    {
    }
    function BeginBar()
    {
    }
    function EndBar()
    {
    }
    function BeginRightBar()
    {
    }
    function EndRightBar()
    {
    }
    function GetClassByID($icon_id)
    {
    }
    function GetActiveClassByID($icon_id)
    {
    }
    /**
     * @param array $item
     * @param CHotKeys $hkInst
     */
    function Button($item, $hkInst)
    {
    }
    function Additional()
    {
    }
}
/* Context links menu for lists */
class CAdminContextMenuList extends \CAdminContextMenu
{
    function BeginBar()
    {
    }
    function GetClassByID($icon_id)
    {
    }
    function GetActiveClassByID($icon_id)
    {
    }
    function Button($item, $hkInst)
    {
    }
    function BeginRightBar()
    {
    }
    function EndRightBar()
    {
    }
}
/* Sorting in lists */
class CAdminSorting
{
    var $by_name;
    var $ord_name;
    var $table_id;
    var $by_initial;
    var $order_initial;
    protected $field;
    protected $order;
    /**
     * @param string $table_id
     * @param string|false $by_initial
     * @param string|false $order_initial
     * @param string $by_name
     * @param string $ord_name
     */
    public function __construct($table_id, $by_initial = \false, $order_initial = \false, $by_name = "by", $ord_name = "order")
    {
    }
    /**
     * @param string $text
     * @param string $sort_by
     * @param string|false $alt_title
     * @param string $baseCssClass
     * @return string
     */
    public function Show($text, $sort_by, $alt_title = \false, $baseCssClass = "")
    {
    }
    /**
     * @return string
     */
    public function getField()
    {
    }
    /**
     * @return string
     */
    public function getOrder()
    {
    }
    /**
     * @return array
     */
    protected function getUserSorting()
    {
    }
}
/* Navigation */
/*
Important Notice:
	CIBlockResult has copy of the methods of this class
	because we need CIBlockResult::Fetch method to be called on iblock_element_admin.php page.
	So this page based on CIBlockResult not on CAdminResult!
*/
class CAdminResult extends \CDBResult
{
    var $nInitialSize;
    var $table_id;
    /**
     * CAdminResult constructor.
     * @param mixed $res
     * @param string $table_id
     */
    public function __construct($res, $table_id)
    {
    }
    /**
     * @deprecated
     * @param mixed $res
     * @param string $table_id
     */
    public function CAdminResult($res, $table_id)
    {
    }
    public function NavStart($nPageSize = 20, $bShowAll = \true, $iNumPage = \false)
    {
    }
    protected function parentNavStart($nPageSize, $bShowAll, $iNumPage)
    {
    }
    /**
     * @param bool|string $table_id
     * @param int|array $nPageSize
     * @return int
     */
    public function GetNavSize($table_id = \false, $nPageSize = 20)
    {
    }
    public function GetNavPrint($title, $show_allways = \true, $StyleText = "", $template_path = \false, $arDeleteParam = \false)
    {
    }
}
class CAdminMessage
{
    /** @var CAdminException */
    var $exception;
    var $message;
    /**
     * @param string|array $message
     * @param CAdminException|bool $exception
     */
    public function __construct($message, $exception = \false)
    {
    }
    /**
     * @deprecated
     * @param string|array $message
     * @param CAdminException|bool $exception
     */
    public function CAdminMessage($message, $exception = \false)
    {
    }
    function Show()
    {
    }
    function _getProgressHtml()
    {
    }
    function _getButtonsHtml()
    {
    }
    function _formatHTML($html)
    {
    }
    function GetMessages()
    {
    }
    function ShowOldStyleError($message)
    {
    }
    function ShowMessage($message)
    {
    }
    function ShowNote($message)
    {
    }
}
class CAdminChain
{
    var $items = array();
    var $id, $bVisible;
    public function __construct($id = \false, $bVisible = \true)
    {
    }
    function AddItem($item)
    {
    }
    function Show()
    {
    }
}
class CAdminMainChain extends \CAdminChain
{
    var $bInit = \false;
    public function __construct($id = \false, $bVisible = \true)
    {
    }
    function Init()
    {
    }
    function AddItem($item)
    {
    }
}
class CAdminTheme
{
    public static function GetList()
    {
    }
    public static function GetCurrentTheme()
    {
    }
}
class CAdminUtil
{
    public static function dumpVars($vars, $arExclusions = array())
    {
    }
    private static function dumpVar($varName, $varValue, $varStack = array())
    {
    }
}
function ShowJSHint($text, $arParams = \false)
{
}