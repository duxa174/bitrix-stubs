<?php

class CAdminSubSorting extends \CAdminSorting
{
    public $list_url;
    public function __construct($table_id, $by_initial = \false, $order_initial = \false, $by_name = "by", $ord_name = "order", $list_url = '')
    {
    }
    public function Show($text, $sort_by, $alt_title = \false, $baseCssClass = "")
    {
    }
}
class CAdminSubList extends \CAdminList
{
    /*
     *	list_url - string with params or array:
     *		LINK
     *		PARAMS (array key => value)
     */
    public $strListUrl = '';
    // add
    public $strListUrlParams = '';
    // add
    public $arListUrlParams = array();
    // add
    public $boolNew = \false;
    // add
    public $arFieldNames = array();
    // add
    public $arHideHeaders = array();
    // add
    protected $bPublicMode = \false;
    protected $dialogParams = array();
    protected $requiredDialogParams = array('bxpublic' => 'Y');
    protected $dialogButtons = array('BX.CAdminDialog.btnSave', 'BX.CAdminDialog.btnCancel');
    /**
     * @param string $table_id
     * @param bool|CAdminSubSorting $sort
     * @param string $list_url
     * @param bool|array $arHideHeaders
     */
    public function __construct($table_id, $sort = \false, $list_url, $arHideHeaders = \false)
    {
    }
    /**
     * @deprecated
     * @param $table_id
     * @param bool $sort
     * @param $list_url
     * @param bool $arHideHeaders
     */
    public function CAdminSubList($table_id, $sort = \false, $list_url, $arHideHeaders = \false)
    {
    }
    function GetListUrl($boolFull = \false)
    {
    }
    function __UpdateListUrlParams()
    {
    }
    function __ClearListUrlParams()
    {
    }
    function __AddListUrlParams($strKey, $strValue)
    {
    }
    function __DeleteListUrlParams($mxKey)
    {
    }
    function __SetListUrlParams($mxParams, $boolClear = \false)
    {
    }
    function __ParseListUrl($boolClear = \false)
    {
    }
    function AddHideHeader($strID)
    {
    }
    //id, name, content, sort, default
    public function AddHeaders($aParams)
    {
    }
    public function AddVisibleHeaderColumn($id)
    {
    }
    public function AddAdminContextMenu($aContext = array(), $bShowExcel = \true, $bShowSettings = \true)
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
     * @return array|null
     */
    protected function GetGroupIds()
    {
    }
    public function ActionPost($url = \false, $action_name = \false, $action_value = 'Y')
    {
    }
    public function ActionDoGroup($id, $action_id, $add_params = '')
    {
    }
    public function &AddRow($id = \false, $arRes = array(), $link = \false, $title = \false, $boolBX = \false)
    {
    }
    public function Display()
    {
    }
    public function ShowActionTable()
    {
    }
    public function DisplayList($boolFlag = \true)
    {
    }
    public function CheckListMode()
    {
    }
    function SetBaseFieldNames()
    {
    }
    function AddListFieldNames()
    {
    }
    function SetListFieldNames($boolClear = \true)
    {
    }
    function DeleteFieldNames($arList = array())
    {
    }
    function GetListFieldNames()
    {
    }
    function AddFieldNames($strFieldName, $strFieldType)
    {
    }
    public function setDialogParams($params)
    {
    }
    public function getDialogParams($withRequired = \false)
    {
    }
    public function setDialogButtons($buttons)
    {
    }
    public function getDialogButtons($jsFormat = \false)
    {
    }
    public function getRowAction($url)
    {
    }
    private function prepareGroupMultiControl(string $id, array $action)
    {
    }
    private function createGroupSubControl(array $data)
    {
    }
    /**
     * @param array $actions
     * @return array
     */
    private function compileActions(array $actions)
    {
    }
    private function createGroupSubControlDropdown(array $data)
    {
    }
    /**
     * @param array $data
     * @return string|null
     */
    private function createGroupSubControlText(array $data)
    {
    }
}
class CAdminSubListRow extends \CAdminListRow
{
    /** @var \CAdminSubList pList */
    var $pList;
    public $arFieldNames = array();
    //add
    public $boolBX = \false;
    // add
    public function __construct($aHeaders, $table_id)
    {
    }
    /**
     * @deprecated
     * @param $aHeaders
     * @param $table_id
     */
    function CAdminSubListRow(&$aHeaders, $table_id)
    {
    }
    public function Display()
    {
    }
    function AddFieldNames($strFieldName, $strFieldType = 'HIDDEN')
    {
    }
    function GetFieldNames()
    {
    }
}
class CAdminSubContextMenu extends \CAdminContextMenu
{
    public function __construct($items, $additional_items = array())
    {
    }
    /**
     * @deprecated
     * @param $items
     * @param array $additional_items
     */
    function CAdminSubContextMenu($items, $additional_items = array())
    {
    }
    function Show()
    {
    }
    function GetClassByID($icon_id)
    {
    }
    function GetActiveClassByID($icon_id)
    {
    }
}
class CAdminSubContextMenuList extends \CAdminSubContextMenu
{
    function BeginBar()
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
}
class CAdminSubForm extends \CAdminForm
{
    /*
     *	list_url - string with params or array:
     *		LINK
     *		PARAMS (array key => value)
     *		POST_PARAMS (array key => value)
     */
    var $strListUrl = '';
    // add
    var $strListUrlParams = '';
    // add
    var $arListUrlParams = array();
    // add
    var $strListPostParams = '';
    var $arListPostParams = array();
    var $boolShowSettings = \false;
    public function __construct($name, $tabs, $bCanExpand = \true, $bDenyAutosave = \false, $list_url = '', $boolShowSettings = \false)
    {
    }
    public function CAdminSubForm($name, $tabs, $bCanExpand = \true, $bDenyAutosave = \false, $list_url = '', $boolShowSettings = \false)
    {
    }
    function ShowSettings()
    {
    }
    public function GetListUrl($boolFull = \false)
    {
    }
    public function GetListPostParams($boolType = \false, $boolJS = \false)
    {
    }
    private function __UpdateListUrlParams()
    {
    }
    private function __ClearListUrlParams()
    {
    }
    private function __AddListUrlParams($strKey, $strValue)
    {
    }
    private function __DeleteListUrlParams($mxKey)
    {
    }
    private function __SetListUrlParams($mxParams, $boolClear = \false)
    {
    }
    private function __ParseListUrl($boolClear = \false)
    {
    }
    private function __UpdateListPostParams()
    {
    }
    private function __ClearListPostParams()
    {
    }
    private function __AddListPostParams($strKey, $strValue)
    {
    }
    private function __DeleteListPostParams($mxKey)
    {
    }
    private function __SetListPostParams($mxParams, $boolClear)
    {
    }
    function ShowTabButtons()
    {
    }
    function End()
    {
    }
    public static function closeSubForm($reload = \true, $closeWait = \true)
    {
    }
}
class CAdminSubResult extends \CAdminResult
{
    var $list_url;
    var $list_url_params;
    public function __construct($res, $table_id, $list_url)
    {
    }
    public function CAdminSubResult($res, $table_id, $list_url)
    {
    }
    public function NavStart($nPageSize = 20, $bShowAll = \true, $iNumPage = \false)
    {
    }
    /**
     * @param bool|string $table_id
     * @param int|array $nPageSize
     * @param string $list_url
     * @return int
     */
    public function GetNavSize($table_id = \false, $nPageSize = 20, $list_url = '')
    {
    }
    public function GetNavPrint($title, $show_allways = \true, $StyleText = "", $template_path = \false, $arDeleteParam = \false)
    {
    }
}
class CAdminSubMessage extends \CAdminMessage
{
    public function __construct($message, $exception = \false)
    {
    }
    /**
     * @deprecated
     * @param $message
     * @param bool $exception
     */
    public function CAdminSubMessage($message, $exception = \false)
    {
    }
    function Show()
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