<?php

namespace Bitrix\Catalog\Component;

class VariationForm extends \Bitrix\Catalog\Component\BaseForm
{
    /** @var \Bitrix\Catalog\v2\Sku\BaseSku */
    protected $entity;
    protected function showCatalogProductFields() : bool
    {
    }
    protected function showSpecificCatalogParameters() : bool
    {
    }
    public static function formatFieldName($name) : string
    {
    }
    protected function buildDescriptions() : array
    {
    }
    protected function getPriceDescriptions() : array
    {
    }
    protected function preparePriceDescription(array $fields = []) : array
    {
    }
    private static function getDescriptionCurrencyList()
    {
    }
    protected function getMeasureRatioDescription() : array
    {
    }
    protected function getFieldValue(array $field)
    {
    }
    protected function getPriceFieldValue(array $field)
    {
    }
    protected function getCurrencyFieldValue(array $field)
    {
    }
    protected function getMeasureRatioFieldValue()
    {
    }
    protected function getAdditionalValues(array $values) : array
    {
    }
    public function getControllers() : array
    {
    }
    protected function getCatalogProductFieldsList() : array
    {
    }
}