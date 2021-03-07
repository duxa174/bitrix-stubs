<?php

namespace Bitrix\Sale\Rest\Entity;

abstract class Base
{
    const TYPE_INT = 'integer';
    const TYPE_FLOAT = 'double';
    const TYPE_STRING = 'string';
    const TYPE_CHAR = 'char';
    const TYPE_LIST = 'list';
    const TYPE_TEXT = 'text';
    const TYPE_FILE = 'file';
    const TYPE_DATE = 'date';
    const TYPE_DATETIME = 'datetime';
    const TYPE_DATATYPE = 'datatype';
    public abstract function getFields();
    public function prepareFieldInfos($fields)
    {
    }
    public function getSettableFields()
    {
    }
    public function getListFieldInfo(array $fieldsInfo, $params = [])
    {
    }
    protected function isNewItem($fields)
    {
    }
    //region convert keys to snake case
    public function convertKeysToSnakeCaseFields($fields)
    {
    }
    public function convertKeysToSnakeCaseSelect($fields)
    {
    }
    public function convertKeysToSnakeCaseFilter($fields)
    {
    }
    public function convertKeysToSnakeCaseOrder($fields)
    {
    }
    public function convertKeysToSnakeCaseArguments($name, $arguments)
    {
    }
    protected function convertKeysToSnakeCase($data)
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
    public function internalizeFieldsList($arguments)
    {
    }
    public function internalizeFieldsAdd($fields)
    {
    }
    public function internalizeFieldsUpdate($fields)
    {
    }
    /**
     * @param $fields
     * @param array $fieldsInfo
     * @return array
     * @throws NotImplementedException
     */
    public function internalizeFieldsModify($fields)
    {
    }
    public function internalizeFieldsTryAdd($fields)
    {
    }
    public function internalizeFieldsTryUpdate($fields)
    {
    }
    public function internalizeFieldsTryModify($fields)
    {
    }
    protected function internalizeFields($fields, array $fieldsInfo)
    {
    }
    protected function internalizeFilterFields($fields, array $fieldsInfo)
    {
    }
    protected function internalizeSelectFields($fields, array $fieldsInfo)
    {
    }
    protected function internalizeOrderFields($fields, array $fieldsInfo)
    {
    }
    public function rewriteFieldsList($arguments)
    {
    }
    protected function rewriteSelectFields($fields)
    {
    }
    protected function rewriteFilterFields($fields)
    {
    }
    protected function rewriteOrderFields($fields)
    {
    }
    /**
     * @throws NotImplementedException
     * @return array
     */
    protected function getRewritedFields()
    {
    }
    protected function internalizeListFields($list, $fieldsInfo = [])
    {
    }
    //endregion
    // region externalize fields
    public function externalizeFields($fields)
    {
    }
    public function externalizeListFields($list)
    {
    }
    /**
     * @param $fields
     * @throws NotImplementedException
     * @return array
     */
    protected function externalizeFieldsModify($fields)
    {
    }
    public function externalizeFieldsTryModify($fields)
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
    // endregion
    //region convert keys to camel case
    public function convertKeysToCamelCase($fields)
    {
    }
    // endregion
    //region check fields
    public function checkFieldsAdd($fields)
    {
    }
    public function checkFieldsUpdate($fields)
    {
    }
    public function checkFieldsModify($fields)
    {
    }
    public function checkArguments($name, $arguments)
    {
    }
    protected function checkRequiredFieldsAdd($fields)
    {
    }
    protected function checkRequiredFieldsUpdate($fields)
    {
    }
    /**
     * @param $fields
     * @throws NotImplementedException
     * @return Result
     */
    protected function checkRequiredFieldsModify($fields)
    {
    }
    protected function checkRequiredFields($fields, array $fieldsInfo, $params = [])
    {
    }
    //endregion
}