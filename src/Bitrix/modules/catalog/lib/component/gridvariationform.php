<?php

namespace Bitrix\Catalog\Component;

class GridVariationForm extends \Bitrix\Catalog\Component\VariationForm
{
    /** @var \Bitrix\Catalog\v2\Sku\BaseSku */
    protected $entity;
    protected $headers = [];
    public static function formatFieldName($name) : string
    {
    }
    public static function preparePropertyName(string $name = '') : string
    {
    }
    protected function prepareFieldName(string $name) : string
    {
    }
    protected function getPropertyDescription(\Bitrix\Catalog\v2\Property\Property $property) : array
    {
    }
    public function getColumnValues(bool $allowDefaultValues = true) : array
    {
    }
    public function getGridHeaders() : array
    {
    }
    public function getValues(bool $allowDefaultValues = true) : array
    {
    }
    protected function getAdditionalValues(array $values) : array
    {
    }
    protected function getPropertySettings(\Bitrix\Catalog\v2\Property\Property $property) : array
    {
    }
    protected function getFilePropertyViewHtml($value) : string
    {
    }
    protected function getFilePropertyInputName(array $property) : string
    {
    }
    protected function getFieldValue(array $field)
    {
    }
    protected function getMoneyFieldValue(array $field)
    {
    }
}