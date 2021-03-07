<?php

namespace Bitrix\Rest\Integration\View;

abstract class Base
{
    public abstract function getFields();
    public final function prepareFieldInfos($fields)
    {
    }
    protected function prepareFieldAttributs($info, $attributs)
    {
    }
    public final function getListFieldInfo(array $fieldsInfo, $params = [])
    {
    }
    //region convert keys to snake case
    public final function convertKeysToSnakeCaseFields($fields)
    {
    }
    public final function convertKeysToSnakeCaseSelect($fields)
    {
    }
    public final function convertKeysToSnakeCaseFilter($fields)
    {
    }
    public final function convertKeysToSnakeCaseOrder($fields)
    {
    }
    public function convertKeysToSnakeCaseArguments($name, $arguments)
    {
    }
    protected final function convertKeysToSnakeCase($data)
    {
    }
    //endregion
    //region internalize fields
    /**
     * @param $name
     * @param $arguments
     * @throws NotImplementedException
     * @return array
     */
    public function internalizeArguments($name, $arguments)
    {
    }
    public function internalizeFieldsList($arguments, $fieldsInfo = [])
    {
    }
    public function internalizeFieldsAdd($fields, $fieldsInfo = [])
    {
    }
    public function internalizeFieldsUpdate($fields, $fieldsInfo = [])
    {
    }
    /**
     * @param $fields
     * @param array $fieldsInfo
     * @return array
     * @throws NotImplementedException
     */
    protected final function internalizeFields($fields, array $fieldsInfo)
    {
    }
    protected final function internalizeValue($value, $info)
    {
    }
    protected function internalizeDateValue($value)
    {
    }
    protected function internalizeDateTimeValue($value)
    {
    }
    protected final function internalizeDate($value)
    {
    }
    protected final function internalizeDateTime($value)
    {
    }
    protected final function internalizeFileValue($value)
    {
    }
    protected function internalizeExtendedTypeValue($value, $info)
    {
    }
    protected final function parserFileValue(array $data)
    {
    }
    protected final function internalizeFilterFields($fields, array $fieldsInfo)
    {
    }
    protected final function internalizeSelectFields($fields, array $fieldsInfo)
    {
    }
    protected final function internalizeOrderFields($fields, array $fieldsInfo)
    {
    }
    protected final function internalizeListFields($list, $fieldsInfo = [])
    {
    }
    //endregion
    // region externalize fields
    protected final function externalizeValue($name, $value, $fields, $fieldsInfo)
    {
    }
    protected final function externalizeFields($fields, $fieldsInfo)
    {
    }
    protected final function externalizeDateValue($value)
    {
    }
    protected final function externalizeDateTimeValue($value)
    {
    }
    /**
     * @param $name
     * @param $value
     * @return string
     * @throws NotImplementedException
     */
    protected function externalizeFileValue($name, $value, $fields)
    {
    }
    /**
     * @param $name
     * @param $value
     * @param $fields
     * @param $fieldsInfo
     * @return Result
     */
    protected function externalizeExtendedTypeValue($name, $value, $fields, $fieldsInfo)
    {
    }
    public function externalizeListFields($list, $fieldsInfo = [])
    {
    }
    /**
     * @param $name
     * @param $fields
     * @throws NotImplementedException
     * @return array
     */
    public function externalizeResult($name, $fields)
    {
    }
    public function externalizeFieldsGet($fields, $fieldsInfo = [])
    {
    }
    // endregion
    //region convert keys to camel case
    public final function convertKeysToCamelCase($fields)
    {
    }
    // endregion
    //region check fields
    public final function checkFieldsAdd($fields)
    {
    }
    public final function checkFieldsUpdate($fields)
    {
    }
    public function checkFieldsList($arguments)
    {
    }
    public function checkArguments($name, $arguments)
    {
    }
    protected final function checkRequiredFieldsAdd($fields)
    {
    }
    protected final function checkRequiredFieldsUpdate($fields)
    {
    }
    protected final function checkRequiredFields($fields, array $fieldsInfo, $params = [])
    {
    }
    //endregion
}