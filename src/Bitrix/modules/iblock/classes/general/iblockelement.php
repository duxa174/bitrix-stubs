<?php

class CAllIBlockElement
{
    public $LAST_ERROR = "";
    protected $bWF_SetMove = \true;
    public $strField;
    protected $subQueryProp;
    public $arFilter;
    public $bOnlyCount;
    public $bDistinct;
    public $bCatalogSort;
    public $arFilterIBlocks = array();
    public $arIBlockMultProps = array();
    public $arIBlockConvProps = array();
    public $arIBlockAllProps = array();
    public $arIBlockNumProps = array();
    public $arIBlockLongProps = array();
    public $sSelect;
    public $sFrom;
    public $sWhere;
    public $sGroupBy;
    public $sOrderBy;
    protected static $elementIblock = array();
    /**
     * @param $strField
     * @param $arFilter
     * @return CIBlockElement|null
     */
    public static function SubQuery($strField, $arFilter)
    {
    }
    function CancelWFSetMove()
    {
    }
    function WF_Restore($ID)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Clear history
    ///////////////////////////////////////////////////////////////////
    function WF_CleanUpHistory()
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Send changing status message
    ///////////////////////////////////////////////////////////////////
    function WF_SetMove($NEW_ID, $OLD_ID = 0)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Clears the last or old records in history using parameters from workflow module
    ///////////////////////////////////////////////////////////////////
    function WF_CleanUpHistoryCopies($ELEMENT_ID = \false, $HISTORY_COPIES = \false)
    {
    }
    public static function WF_GetSqlLimit($PS = "BE.", $SHOW_NEW = "N")
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Returns last ID of element in the history
    ///////////////////////////////////////////////////////////////////
    public static function WF_GetLast($ID)
    {
    }
    public static function GetRealElement($ID)
    {
    }
    public static function WF_GetStatusTitle($STATUS_ID)
    {
    }
    public static function WF_GetCurrentStatus($ELEMENT_ID, &$STATUS_TITLE)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Returns permission status
    ///////////////////////////////////////////////////////////////////
    public static function WF_GetStatusPermission($STATUS_ID, $ID = \false)
    {
    }
    public static function WF_IsLocked($ID, &$locked_by, &$date_lock)
    {
    }
    public function MkFilter($arFilter, &$arJoinProps, &$arAddWhereFields, $level = 0, $bPropertyLeftJoin = \false)
    {
    }
    function MkPropertyFilter($res, $cOperationType, $propVAL, $db_prop, &$arJoinProps, &$arSqlSearch)
    {
    }
    function MkPropertyOrder($by, $order, $bSort, $db_prop, &$arJoinProps, &$arSqlOrder)
    {
    }
    function MkPropertyGroup($db_prop, &$arJoinProps, $bSort = \false)
    {
    }
    function MkPropertySelect($PR_ID, $db_prop, &$arJoinProps, $bWasGroup, $sGroupBy, &$sSelect, $bSort = \false)
    {
    }
    function MkAlias($max_alias_len, $alias, &$arIBlockLongProps)
    {
    }
    function PrepareGetList(&$arIblockElementFields, &$arJoinProps, &$arSelectFields, &$sSelect, &$arAddSelectFields, &$arFilter, &$sWhere, &$sSectionWhere, &$arAddWhereFields, &$arGroupBy, &$sGroupBy, &$arOrder, &$arSqlOrder, &$arAddOrderByFields)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Add function
    ///////////////////////////////////////////////////////////////////
    function Add($arFields, $bWorkFlow = \false, $bUpdateSearch = \true, $bResizePictures = \false)
    {
    }
    function DeleteFile($FILE_ID, $ELEMENT_ID, $TYPE = \false, $PARENT_ID = -1, $IBLOCK_ID = \false, $bCheckOnly = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Removes element
    ///////////////////////////////////////////////////////////////////
    public static function Delete($ID)
    {
    }
    public static function GetByID($ID)
    {
    }
    /**
     * Return IBLOCK_ID for element.
     *
     * @param int $ID				Element id.
     * @return bool|int
     */
    public static function GetIBlockByID($ID)
    {
    }
    /**
     * Return IBLOCK_ID for element.
     *
     * @param array $list
     * @return array
     */
    public static function GetIBlockByIDList(array $list)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Checks fields before update or insert
    ///////////////////////////////////////////////////////////////////
    function CheckFields(&$arFields, $ID = \false, $bCheckDiskQuota = \true)
    {
    }
    /**
     * @param int $ELEMENT_ID
     * @param string|int $PROPERTY_CODE
     * @param mixed $PROPERTY_VALUE
     * @return bool
     */
    function SetPropertyValueCode($ELEMENT_ID, $PROPERTY_CODE, $PROPERTY_VALUE)
    {
    }
    public static function GetElementGroups($ID, $bElementOnly = \false, $arSelect = array())
    {
    }
    //////////////////////////////////////////////////////////////////////////
    //
    //////////////////////////////////////////////////////////////////////////
    public static function RecalcSections($ID, $sectionId = \null)
    {
    }
    //////////////////////////////////////////////////////////////////////////
    //
    //////////////////////////////////////////////////////////////////////////
    function SetElementSection($ID, $arSections, $bNew = \false, $bRightsIBlock = 0, $sectionId = \null)
    {
    }
    function __InitFile($old_id, &$arFields, $fname)
    {
    }
    static function __GetFileContent($FILE_ID)
    {
    }
    function UpdateSearch($ID, $bOverWrite = \false)
    {
    }
    public static function GetPropertyValues($IBLOCK_ID, $arElementFilter, $extMode = \false, $propertyFilter = array())
    {
    }
    public static function GetPropertyValuesArray(&$result, $iblockID, $filter, $propertyFilter = array(), $options = array())
    {
    }
    public static function GetProperty($IBLOCK_ID, $ELEMENT_ID, $by = "sort", $order = "asc", $arFilter = array())
    {
    }
    public static function CounterInc($ID)
    {
    }
    public static function GetIBVersion($iblock_id)
    {
    }
    function DeletePropertySQL($property, $iblock_element_id)
    {
    }
    public static function SetPropertyValuesEx($ELEMENT_ID, $IBLOCK_ID, $PROPERTY_VALUES, $FLAGS = array())
    {
    }
    protected static function _check_rights_sql($min_permission, $permissionsBy = \null)
    {
    }
    protected function __GetDescriptionUpdateSql($iblock_id, $property_id, $description = \false)
    {
    }
    /**
     * @param mixed $order
     * @return string
     */
    protected function getIdOrder($order)
    {
    }
}