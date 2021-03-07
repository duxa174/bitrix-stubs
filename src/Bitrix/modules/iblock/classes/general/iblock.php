<?php

class CAllIBlock
{
    public $LAST_ERROR = "";
    protected static $disabledCacheTag = array();
    protected static $enableClearTagCache = 0;
    protected static $catalogIncluded = \null;
    protected static $workflowIncluded = \null;
    public static function ShowPanel($IBLOCK_ID = 0, $ELEMENT_ID = 0, $SECTION_ID = "", $type = "news", $bGetIcons = \false, $componentName = "", $arLabels = array())
    {
    }
    public static function AddPanelButtons($mode, $componentName, $arButtons)
    {
    }
    public static function GetComponentMenu($mode, $arButtons)
    {
    }
    public static function GetPanelButtons($IBLOCK_ID = 0, $ELEMENT_ID = 0, $SECTION_ID = 0, $arOptions = array())
    {
    }
    /**
     * @param int $iblock_id
     * @return CDBResult
     */
    public static function GetSite($iblock_id)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Block by ID
    ///////////////////////////////////////////////////////////////////
    public static function GetByID($ID)
    {
    }
    /**
     * @param int $ID
     * @param string $FIELD
     * @return mixed
     */
    public static function GetArrayByID($ID, $FIELD = "")
    {
    }
    public static function CleanCache($ID)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // New block
    ///////////////////////////////////////////////////////////////////
    function Add($arFields)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Update
    ///////////////////////////////////////////////////////////////////
    function Update($ID, $arFields)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Function deletes iblock by ID
    ///////////////////////////////////////////////////////////////////
    public static function Delete($ID)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Check function called from Add and Update
    ///////////////////////////////////////////////////////////////////
    function CheckFields(&$arFields, $ID = \false)
    {
    }
    public static function SetPermission($IBLOCK_ID, $arGROUP_ID)
    {
    }
    public static function SetMessages($ID, $arFields)
    {
    }
    public static function GetMessages($ID, $type = "")
    {
    }
    public static function GetFieldsDefaults()
    {
    }
    /**
     * @param string $fieldName
     * @return array|null
     */
    public static function getFieldDefaultSettings(string $fieldName) : ?array
    {
    }
    public static function SetFields($ID, $arFields)
    {
    }
    public static function GetFields($ID)
    {
    }
    public static function GetProperties($ID, $arOrder = array(), $arFilter = array())
    {
    }
    public static function GetGroupPermissions($ID)
    {
    }
    public static function GetPermission($IBLOCK_ID, $FOR_USER_ID = \false)
    {
    }
    public static function OnBeforeLangDelete($lang)
    {
    }
    public static function OnLangDelete($lang)
    {
    }
    public static function OnGroupDelete($group_id)
    {
    }
    public static function MkOperationFilter($key)
    {
    }
    public static function FilterCreate($field_name, $values, $type, $cOperationType = \false, $bSkipEmpty = \true)
    {
    }
    public static function ForLIKE($str)
    {
    }
    public static function FilterCreateEx($fname, $vals, $type, &$bFullJoin, $cOperationType = \false, $bSkipEmpty = \true)
    {
    }
    public static function _MergeIBArrays($iblock_id, $iblock_code = \false, $iblock_id2 = \false, $iblock_code2 = \false)
    {
    }
    public static function OnSearchGetURL($arFields)
    {
    }
    public static function ReplaceSectionUrl($url, $arr, $server_name = \false, $arrType = \false)
    {
    }
    public static function _GetProductUrl($OF_ELEMENT_ID, $OF_IBLOCK_ID, $server_name = \false, $arrType = \false)
    {
    }
    public static function ReplaceDetailUrl($url, $arr, $server_name = \false, $arrType = \false)
    {
    }
    public static function OnSearchReindex($NS = array(), $oCallback = \NULL, $callback_method = "")
    {
    }
    public static function GetElementCount($iblock_id)
    {
    }
    public static function ResizePicture($arFile, $arResize)
    {
    }
    public static function FilterPicture($filePath, $arFilter)
    {
    }
    public static function NumberFormat($num)
    {
    }
    public static function _Order($by, $order, $default_order, $nullable = \true)
    {
    }
    public static function GetAdminIBlockEditLink($IBLOCK_ID, $arParams = array(), $strAdd = "")
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Iblock\Url\AdminPage\IblockBuilder
     *
     * @param int $IBLOCK_ID
     * @param int|null $SECTION_ID
     * @param array $arParams
     * @param string $strAdd
     * @return string
     */
    public static function GetAdminSectionEditLink($IBLOCK_ID, $SECTION_ID, $arParams = array(), $strAdd = "")
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Iblock\Url\AdminPage\IblockBuilder
     *
     * @param int $IBLOCK_ID
     * @param int|null $ELEMENT_ID
     * @param array $arParams
     * @param string $strAdd
     * @return string
     */
    public static function GetAdminElementEditLink($IBLOCK_ID, $ELEMENT_ID, $arParams = array(), $strAdd = "")
    {
    }
    public static function GetAdminSubElementEditLink($IBLOCK_ID, $ELEMENT_ID, $SUBELEMENT_ID, $arParams = array(), $strAdd = '', $absoluteUrl = \false)
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Iblock\Url\AdminPage\IblockBuilder
     *
     * @param int $IBLOCK_ID
     * @param array $arParams
     * @param string $strAdd
     * @return string
     */
    public static function GetAdminElementListLink($IBLOCK_ID, $arParams = array(), $strAdd = "")
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Iblock\Url\AdminPage\IblockBuilder
     *
     * @param int $IBLOCK_ID
     * @param array $arParams
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function GetAdminElementListScriptName($IBLOCK_ID, $arParams = array())
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Iblock\Url\AdminPage\IblockBuilder
     *
     * @param int $IBLOCK_ID
     * @param array $arParams
     * @param string $strAdd
     * @return string
     */
    public static function GetAdminSectionListLink($IBLOCK_ID, $arParams = array(), $strAdd = "")
    {
    }
    /**
     * @deprecated
     * @see \Bitrix\Iblock\Url\AdminPage\IblockBuilder
     *
     * @param int $IBLOCK_ID
     * @param array $arParams
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function GetAdminSectionListScriptName($IBLOCK_ID, $arParams = array())
    {
    }
    private static function isPublicSidePanel()
    {
    }
    private static function replaceScriptName($url)
    {
    }
    /**
     * @param int $IBLOCK_ID
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function GetAdminListMode($IBLOCK_ID) : string
    {
    }
    public static function CheckForIndexes($IBLOCK_ID)
    {
    }
    public static function GetAuditTypes()
    {
    }
    public static function roundDB($value)
    {
    }
    public static function _transaction_lock($IBLOCK_ID)
    {
    }
    public static function isShortDate($strDate)
    {
    }
    public static function _Upper($str)
    {
    }
    function _Add($ID)
    {
    }
    public static function _NotEmpty($column)
    {
    }
    public static function makeFilePropArray($data, $del = \false, $description = \null, $options = array())
    {
    }
    public static function makeFileArray($data, $del = \false, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromId($file_id, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromPath($file_path, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromArray($file_array, $description = \null, $options = array())
    {
    }
    public static function disableTagCache($iblock_id)
    {
    }
    public static function enableTagCache($iblock_id)
    {
    }
    public static function clearIblockTagCache($iblock_id)
    {
    }
    public static function registerWithTagCache($iblock_id)
    {
    }
    public static function enableClearTagCache()
    {
    }
    public static function disableClearTagCache()
    {
    }
    public static function isEnabledClearTagCache()
    {
    }
    public static function getDefaultJpegQuality()
    {
    }
    public static function checkActivityDatesAgent($iblockId, $previousTime)
    {
    }
    /**
     * Returns default rights for apply to iblock (admin access and public reading).
     *
     * @return array
     */
    public static function getDefaultRights() : array
    {
    }
}