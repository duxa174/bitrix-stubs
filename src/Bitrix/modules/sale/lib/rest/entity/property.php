<?php

namespace Bitrix\Sale\Rest\Entity;

class Property extends \Bitrix\Sale\Rest\Entity\Base
{
    const PROPERTY_TYPE_STRING = 'STRING';
    const PROPERTY_TYPE_YN = 'Y/N';
    const PROPERTY_TYPE_NUMBER = 'NUMBER';
    const PROPERTY_TYPE_ENUM = 'ENUM';
    const PROPERTY_TYPE_FILE = 'FILE';
    const PROPERTY_TYPE_DATE = 'DATE';
    const PROPERTY_TYPE_LOCATION = 'LOCATION';
    public function prepareFieldInfos($fields)
    {
    }
    public function getFields()
    {
    }
    public function getFieldsByType($type)
    {
    }
    protected function getFieldsSettingsByType($type)
    {
    }
    protected function getFieldsByTypeString()
    {
    }
    protected function getFieldsByTypeLocation()
    {
    }
    protected function getFieldsSettingsByTypeString()
    {
    }
    protected function getFieldsSettingsByEitherYNType()
    {
    }
    protected function getFieldsSettingsByNumberType()
    {
    }
    protected function getFieldsSettingsByEnumType()
    {
    }
    protected function getFieldsSettingsByFileType()
    {
    }
    protected function getFieldsSettingsByDateType()
    {
    }
    protected function getFieldsSettingsByLocation()
    {
    }
    public function convertKeysToSnakeCaseArguments($name, $arguments)
    {
    }
    public function internalizeArguments($name, $arguments)
    {
    }
    public function externalizeResult($name, $fields)
    {
    }
}