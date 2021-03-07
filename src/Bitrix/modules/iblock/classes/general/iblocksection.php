<?php

class CAllIBlockSection
{
    var $LAST_ERROR;
    protected static $arSectionCodeCache = array();
    protected static $arSectionPathCache = array();
    protected static $arSectionNavChainCache = array();
    public static function GetFilter($arFilter = array())
    {
    }
    public static function GetTreeList($arFilter = array(), $arSelect = array())
    {
    }
    public static function GetNavChain($IBLOCK_ID, $SECTION_ID, $arSelect = array(), $arrayResult = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Function returns section by ID
    ///////////////////////////////////////////////////////////////////
    public static function GetByID($ID)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // New section
    ///////////////////////////////////////////////////////////////////
    function Add($arFields, $bResort = \true, $bUpdateSearch = \true, $bResizePictures = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Update section properties
    ///////////////////////////////////////////////////////////////////
    function Update($ID, $arFields, $bResort = \true, $bUpdateSearch = \true, $bResizePictures = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Function delete section by its ID
    ///////////////////////////////////////////////////////////////////
    public static function Delete($ID, $bCheckPermissions = \true)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Check function called from Add and Update
    ///////////////////////////////////////////////////////////////////
    function CheckFields(&$arFields, $ID = \false)
    {
    }
    public static function TreeReSort($IBLOCK_ID, $ID = 0, $cnt = 0, $depth = 0, $ACTIVE = "Y")
    {
    }
    public static function ReSort($IBLOCK_ID, $ID = 0, $cnt = 0, $depth = 0, $ACTIVE = "Y")
    {
    }
    function UpdateSearch($ID, $bOverWrite = \false)
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool $bIncCnt
     * @param bool|array $arSelectedFields
     * @return CDBResult
     */
    public static function GetMixedList($arOrder = array("SORT" => "ASC"), $arFilter = array(), $bIncCnt = \false, $arSelectedFields = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // GetSectionElementsCount($ID, $arFilter=Array())
    ///////////////////////////////////////////////////////////////////
    function GetSectionElementsCount($ID, $arFilter = array())
    {
    }
    protected static function _check_rights_sql($min_permission, $permissionsBy = \null)
    {
    }
    function GetCount($arFilter = array())
    {
    }
    function UserTypeRightsCheck($entity_id)
    {
    }
    function RecalcGlobalActiveFlag($arSection, $distance = 0)
    {
    }
    public static function getSectionCodePath($sectionId)
    {
    }
    public static function getSectionCode($sectionId)
    {
    }
    /**
     * Returns a filter by element properties and product fields.
     *
     * @param array $filter
     * @return array
     */
    public static function getElementInherentFilter(array $filter) : array
    {
    }
    /**
     * @param array $filter
     * @return bool
     */
    public static function checkLoadSections(array $filter) : bool
    {
    }
    /**
     * @param array $filter
     * @return array
     */
    protected static function getPreparedFilterById(array $filter) : array
    {
    }
    /**
     * @param mixed $value
     * @return bool
     */
    protected static function clearNull($value) : bool
    {
    }
}