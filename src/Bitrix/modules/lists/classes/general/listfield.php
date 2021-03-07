<?php

abstract class CListField
{
    /** @var int */
    protected $_iblock_id;
    /** @var  string */
    protected $_field_id;
    /** @var  string */
    protected $_label;
    /** @var CListFieldType */
    protected $_type;
    /** @var int */
    protected $_sort;
    private static $prop_cache = array();
    public function __construct($iblock_id, $field_id, $label, $sort)
    {
    }
    private function _read_from_cache($field_id)
    {
    }
    private function _clear_cache()
    {
    }
    public function GetID()
    {
    }
    public function GetLabel()
    {
    }
    public function GetTypeID()
    {
    }
    public function IsReadOnly()
    {
    }
    public function GetSort()
    {
    }
    public function GetSettingsDefaults()
    {
    }
    public function GetSettings()
    {
    }
    public function SetSettings($arSettings)
    {
    }
    public abstract function IsRequired();
    public abstract function IsMultiple();
    public abstract function GetDefaultValue();
    public abstract function SetSort($sort);
    public abstract function GetArray();
    public function Delete()
    {
    }
    public abstract function Update($arFields);
    public static function Add($iblock_id, $arFields)
    {
    }
}
class CListElementField extends \CListField
{
    private $_iblock_field;
    public function __construct($iblock_id, $field_id, $label, $sort)
    {
    }
    public function IsRequired()
    {
    }
    public function IsMultiple()
    {
    }
    public function GetDefaultValue()
    {
    }
    public function SetSort($sort)
    {
    }
    //This is only backward compatibility method
    public function GetArray()
    {
    }
    public function Delete()
    {
    }
    public function Update($arFields)
    {
    }
    public static function Add($iblock_id, $arFields)
    {
    }
}
class CListPropertyField extends \CListField
{
    private $_property = \false;
    private static $prop_cache = array();
    public function __construct($iblock_id, $field_id, $label, $sort)
    {
    }
    private function getPropertyArrayFromCache($id)
    {
    }
    private static function resetPropertyArrayCache()
    {
    }
    public function IsRequired()
    {
    }
    public function IsMultiple()
    {
    }
    public function GetDefaultValue()
    {
    }
    public function SetSort($sort)
    {
    }
    //This is only backward compatibility method
    public function GetArray()
    {
    }
    public function Delete()
    {
    }
    private static function generatePropertyCode($name, $code, $iblockId, $propertyId = 0)
    {
    }
    public function Update($arFields)
    {
    }
    public static function Add($iblock_id, $arFields)
    {
    }
    private static function existPropertyCode($iblockId, $code, $propertyId = 0)
    {
    }
}