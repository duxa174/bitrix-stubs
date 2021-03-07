<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
class CAdminList
{
    public const MODE_PAGE = 'normal';
    public const MODE_LIST = 'list';
    public const MODE_ACTION = 'frame';
    public const MODE_EXPORT = 'excel';
    public const MODE_CONFIG = 'settings';
    var $table_id;
    /** @var CAdminSorting */
    var $sort;
    var $aHeaders = array();
    var $aVisibleHeaders = array();
    /** @var CAdminListRow[] */
    var $aRows = array();
    var $aHeader = array();
    var $arVisibleColumns = array();
    var $aFooter = array();
    var $sNavText = '';
    var $arFilterErrors = array();
    var $arUpdateErrors = array();
    var $arUpdateErrorIDs = array();
    var $arGroupErrors = array();
    var $arGroupErrorIDs = array();
    var $arActionSuccess = array();
    var $bEditMode = \false;
    var $bMultipart = \false;
    var $bCanBeEdited = \false;
    var $bCanBeDeleted = \false;
    var $arActions = array();
    var $arActionsParams = array();
    /** @var CAdminContextMenuList */
    var $context = \false;
    var $sContent = \false, $sPrologContent = '', $sEpilogContent = '';
    var $bShowActions;
    var $onLoadScript;
    var $arEditedRows;
    var $isPublicMode = \false;
    private $filter;
    protected $mode = \null;
    /**
     * @param string $table_id
     * @param CAdminSorting|bool $sort
     */
    public function __construct($table_id, $sort = \false)
    {
    }
    /**
     * @deprecated
     * @param string $table_id
     * @param CAdminSorting|bool $sort
     */
    public function CAdminList($table_id, $sort = \false)
    {
    }
    public function getFilter()
    {
    }
    //id, name, content, sort, default
    public function AddHeaders($aParams)
    {
    }
    function ShowSettings($aAllCols, $aCols, $aOptions)
    {
    }
    public function AddVisibleHeaderColumn($id)
    {
    }
    public function GetVisibleHeaderColumns()
    {
    }
    public function AddAdminContextMenu($aContext = array(), $bShowExcel = \true, $bShowSettings = \true)
    {
    }
    public function SetContextMenu(array $menu = [], array $additional = [], array $config = []) : void
    {
    }
    protected function GetSystemContextMenu(array $config = []) : array
    {
    }
    protected function InitContextMenu(array $menu = [], array $additional = []) : void
    {
    }
    /**
     * @param string|int $ID
     * @return bool
     */
    public function IsUpdated($ID)
    {
    }
    /**
     * @return bool
     */
    public function EditAction()
    {
    }
    /**
     * Returns field values in for inline edit grid mode.
     *
     * @return array
     */
    public function GetEditFields() : array
    {
    }
    /**
     * Copy files from uploader to edit fields.
     *
     * @return void
     */
    public function ConvertFilesToEditFields() : void
    {
    }
    /**
     * @return array|false
     */
    public function GroupAction()
    {
    }
    /**
     * Returns true if the user has set the flag "To all" in the list.
     *
     * @return bool
     */
    public function IsGroupActionToAll()
    {
    }
    /**
     * @return void
     */
    protected function PrepareAction()
    {
    }
    /**
     * @return string|null
     */
    public function GetAction()
    {
    }
    /**
     * @return array|null
     */
    protected function GetGroupIds()
    {
    }
    /**
     * @return void
     */
    protected function initMode() : void
    {
    }
    /**
     * @return string
     */
    public function getCurrentMode() : string
    {
    }
    /**
     * @return bool
     */
    public function isPageMode() : bool
    {
    }
    /**
     * @return bool
     */
    public function isExportMode() : bool
    {
    }
    /**
     * @return bool
     */
    public function isAjaxMode() : bool
    {
    }
    /**
     * @return bool
     */
    public function isConfigMode() : bool
    {
    }
    public function ActionRedirect($url)
    {
    }
    public function ActionAjaxReload($url)
    {
    }
    public function ActionPost($url = \false, $action_name = \false, $action_value = 'Y')
    {
    }
    public function ActionDoGroup($id, $action_id, $add_params = '')
    {
    }
    public function InitFilter($arFilterFields)
    {
    }
    public function IsDefaultFilter()
    {
    }
    public function &AddRow($id = \false, $arRes = array(), $link = \false, $title = \false)
    {
    }
    public function AddFooter($aFooter)
    {
    }
    public function NavText($sNavText)
    {
    }
    /**
     * @param \Bitrix\Main\UI\PageNavigation $nav
     * @param string $title
     * @param bool $showAllways
     * @param bool $post
     */
    public function setNavigation(\Bitrix\Main\UI\PageNavigation $nav, $title, $showAllways = \true, $post = \false)
    {
    }
    public function Display()
    {
    }
    public function DisplayExcel()
    {
    }
    public function AddGroupActionTable($arActions, $arParams = array())
    {
    }
    public function ShowActionTable()
    {
    }
    public function DisplayList($arParams = array())
    {
    }
    public function AddUpdateError($strError, $id = \false)
    {
    }
    public function AddGroupError($strError, $id = \false)
    {
    }
    public function AddActionSuccessMessage($strMessage)
    {
    }
    public function AddFilterError($strError)
    {
    }
    public function BeginPrologContent()
    {
    }
    public function EndPrologContent()
    {
    }
    public function BeginEpilogContent()
    {
    }
    public function EndEpilogContent()
    {
    }
    public function BeginCustomContent()
    {
    }
    public function EndCustomContent()
    {
    }
    public function CreateChain()
    {
    }
    /**
     * @param CAdminChain $chain
     */
    public function ShowChain($chain)
    {
    }
    public function CheckListMode()
    {
    }
    protected function DisplayEditButtons() : void
    {
    }
}
class CAdminListRow
{
    var $aHeaders = array();
    var $aHeadersID = array();
    var $aFields = array();
    var $aActions = array();
    var $table_id;
    var $indexFields = 0;
    var $edit = \false;
    var $id;
    var $bReadOnly = \false;
    var $aFeatures = array();
    var $bEditMode = \false;
    var $arRes;
    var $link;
    var $title;
    var $pList;
    var $isPublicMode = \false;
    /**
     * CAdminListRow constructor.
     * @param array &$aHeaders
     * @param string $table_id
     */
    public function __construct(&$aHeaders, $table_id)
    {
    }
    /** @deprecated
     * @param array &$aHeaders
     * @param string $table_id
     */
    public function CAdminListRow(&$aHeaders, $table_id)
    {
    }
    function SetFeatures($aFeatures)
    {
    }
    function AddField($id, $text, $edit = \false, $isHtml = \true)
    {
    }
    /**
     * @param string $id
     * @param array|boolean $arAttributes
     * @return void
     */
    function AddCheckField($id, $arAttributes = array())
    {
    }
    /**
     * @param string $id
     * @param array $arValues
     * @param array|boolean $arAttributes
     * @return void
     */
    function AddSelectField($id, $arValues = array(), $arAttributes = array())
    {
    }
    /**
     * @param string $id
     * @param array|boolean $arAttributes
     * @return void
     */
    function AddInputField($id, $arAttributes = array())
    {
    }
    /**
     * @param string $id
     * @param array|boolean $arAttributes
     * @param bool $useTime
     * @return void
     */
    function AddCalendarField($id, $arAttributes = array(), $useTime = \false)
    {
    }
    /**
     * @param string $id
     * @param array|boolean $currencies
     * @param array|boolean $arAttributes
     * @return void
     */
    function AddMoneyField($id, $arAttributes = [])
    {
    }
    function AddViewField($id, $sHTML)
    {
    }
    function AddEditField($id, $sHTML)
    {
    }
    /**
     * @param string $id
     * @param bool|array $showInfo
     * @return void
     */
    function AddViewFileField($id, $showInfo = \false)
    {
    }
    /**
     * @param string $id
     * @param bool|array $showInfo
     * @param array $inputs
     * @return void
     */
    function AddFileField($id, $showInfo = \false, $inputs = array())
    {
    }
    function AddActions($aActions)
    {
    }
    function __AttrGen($attr)
    {
    }
    function VarsFromForm()
    {
    }
    function Display()
    {
    }
    /**
     * @param string $url
     * @return string
     */
    protected function getActionLink($url)
    {
    }
    /**
     * @param array $item
     * @return bool
     */
    protected function getActionsItemLink(array $item)
    {
    }
}