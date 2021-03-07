<?php

namespace Bitrix\Main\Entity;

/**
 * Entity field class for user field
 * @deprecated
 * @package bitrix
 * @subpackage main
 */
class UField extends \Bitrix\Main\Entity\Field
{
    protected $is_multiple, $type_id, $base_type, $field_id;
    public function __construct(array $info)
    {
    }
    public function getTypeMask()
    {
    }
    public function validateValue($value, $primary, $row, \Bitrix\Main\Entity\Result $result)
    {
    }
    public function getTypeId()
    {
    }
    public function isMultiple()
    {
    }
    public function getBaseType()
    {
    }
    public function getFieldId()
    {
    }
    public function getValueFieldName()
    {
    }
    //public static function getDataTypeByBaseType($baseType)
    public static function convertBaseTypeToDataType($baseType)
    {
    }
    public function getColumnName()
    {
    }
}