<?php

class CAllIBlockProperty
{
    public $LAST_ERROR = "";
    public static function GetList($arOrder = array(), $arFilter = array())
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Delete by property ID
    ///////////////////////////////////////////////////////////////////
    public static function Delete($ID)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Add
    ///////////////////////////////////////////////////////////////////
    public function Add($arFields)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // This one called before any Update or Add
    ///////////////////////////////////////////////////////////////////
    public function CheckFields(&$arFields, $ID = \false, $bFormValidate = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Update method
    ///////////////////////////////////////////////////////////////////
    public function Update($ID, $arFields, $bCheckDescription = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Get property information by ID
    ///////////////////////////////////////////////////////////////////
    public static function GetByID($ID, $IBLOCK_ID = \false, $IBLOCK_CODE = \false)
    {
    }
    public static function GetPropertyArray($ID, $IBLOCK_ID, $bCached = \true)
    {
    }
    public static function GetPropertyEnum($PROP_ID, $arOrder = array("SORT" => "asc"), $arFilter = array())
    {
    }
    function UpdateEnum($ID, $arVALUES, $bForceDelete = \true)
    {
    }
    public static function GetUserType($USER_TYPE = \false)
    {
    }
    function FormatUpdateError($ID, $CODE)
    {
    }
    function FormatNotFoundError($ID)
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertyDateTime::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _DateTime_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertyDate::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _Date_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertyXmlID::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _XmlID_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertyFileMan::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _FileMan_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertyHTML::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _HTML_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertyElementList::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _ElementList_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertySequence::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _Sequence_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertyElementAutoComplete::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _ElementAutoComplete_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertySKU::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _SKU_GetUserTypeDescription()
    {
    }
    /**
     * @deprecated deprecated since iblock 17.0.9
     * @see \CIBlockPropertySectionAutoComplete::GetUserTypeDescription()
     *
     * @return array
     */
    public static function _SectionAutoComplete_GetUserTypeDescription()
    {
    }
    function _Update($ID, $arFields, $bCheckDescription = \false)
    {
    }
    function DropColumnSQL($strTable, $arColumns)
    {
    }
    function _Add($ID, $arFields)
    {
    }
}