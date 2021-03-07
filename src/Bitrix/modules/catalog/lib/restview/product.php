<?php

namespace Bitrix\Catalog\RestView;

final class Product extends \Bitrix\Rest\Integration\View\Base
{
    /**
     * @return array
     * return fields all type product
     */
    public function getFields()
    {
    }
    protected function prepareFieldAttributs($info, $attributs)
    {
    }
    private function getFieldsIBlockElement()
    {
    }
    private function getFieldsIBlockPropertyValuesByFilter($filter)
    {
    }
    private function getFieldsCatalogProductCommonFields()
    {
    }
    private function getFieldsCatalogProductByFilter($filter)
    {
    }
    private function getFieldsCatalogProduct()
    {
    }
    private function getFieldsCatalogProductByType($id)
    {
    }
    private function getFieldsCatalogProductByTypeProduct()
    {
    }
    private function getFieldsCatalogProductByTypeSKU()
    {
    }
    private function getFieldsCatalogProductByTypeOffer()
    {
    }
    private function getFieldsCatalogProductByTypeSet()
    {
    }
    public function getFieldsByFilter(array $filter)
    {
    }
    private static function getProductTypes($catalogType)
    {
    }
    private static function getUserType()
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
    protected function internalizeDateValue($value)
    {
    }
    protected function internalizeDateTimeValue($value)
    {
    }
    protected function internalizeDateProductPropertyValue($value)
    {
    }
    protected function internalizeDateTimeProductPropertyValue($value)
    {
    }
    protected function internalizeExtendedTypeValue($value, $info)
    {
    }
    public function internalizeArguments($name, $arguments)
    {
    }
    public function externalizeFieldsGet($fields, $fieldsInfo = [])
    {
    }
    public function externalizeListFields($list, $fieldsInfo = [])
    {
    }
    public function externalizeResult($name, $fields)
    {
    }
    public function convertKeysToSnakeCaseArguments($name, $arguments)
    {
    }
    public function checkFieldsList($arguments)
    {
    }
    public function checkArguments($name, $arguments)
    {
    }
    protected function checkFieldsDownload($fields)
    {
    }
    protected function getActionUriToDownload()
    {
    }
    protected function externalizeFileValue($name, $value, $fields)
    {
    }
    protected function externalizeExtendedTypeValue($name, $value, $fields, $fieldsInfo)
    {
    }
}