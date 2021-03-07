<?php

namespace Bitrix\Iblock\LandingSource;

class DataLoader extends \Bitrix\Landing\Source\DataLoader
{
    protected $catalogIncluded = null;
    protected $saleIncluded = null;
    protected $iblockId = 0;
    /** @var null|array Catalog description */
    protected $catalog = null;
    protected $productFields = null;
    protected $priceTypes = null;
    /**
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * @return array
     */
    public function getElementListData()
    {
    }
    /**
     * @param string|int $element
     * @return array
     */
    public function getElementData($element)
    {
    }
    /**
     * @return array
     */
    private static function getInternalSettings()
    {
    }
    /**
     * @return array
     */
    protected function getPreparedSelectFields()
    {
    }
    /**
     * Returns element order.
     *
     * @return array
     */
    protected function getOrder()
    {
    }
    /**
     * Returns max element count for showing.
     *
     * @return int
     */
    protected function getLimit()
    {
    }
    /**
     * @return void
     */
    protected function initIblock()
    {
    }
    /**
     * @return array
     */
    protected function getIblockElementListFilter()
    {
    }
    /**
     * @param array $filter
     * @return array
     */
    protected function compileIblockElementListFilter(array $filter)
    {
    }
    /**
     * @param array $settings
     * @param array $select
     * @return void
     */
    private function prepareSelectFields(array &$settings, array $select)
    {
    }
    /**
     * @param array $settings
     * @param array $order
     * @return void
     */
    private static function prepareOrder(array &$settings, array $order)
    {
    }
    /**
     * @return array
     */
    protected function getProductFields()
    {
    }
    private function getFilterFieldsDescription()
    {
    }
    private static function getFilterPropertiesDescription(array $filter)
    {
    }
    private function getFilterProductPropertiesDescription()
    {
    }
    private function getFilterOfferPropertiesDescription()
    {
    }
    /**
     * @param array $settings
     * @return array
     */
    private function getElementsInternal(array $settings)
    {
    }
    /**
     * @param array $property
     * @return mixed|null
     */
    private static function getPropertyValue(array $property)
    {
    }
    private static function loadProduct(array &$result, array $fields)
    {
    }
    private function loadPrices(array &$result)
    {
    }
    private function fillElementSeo(array &$row)
    {
    }
    /**
     * @param int $iblockId
     * @param array $propertyIds
     * @param string $mode
     * @return array
     */
    private function getAllowedPropertyId($iblockId, array $propertyIds, $mode)
    {
    }
    /**
     * Return user groups. Now worked only with current user.
     *
     * @return array
     */
    protected function getUserGroups()
    {
    }
    /**
     * @return array
     */
    protected function getPriceTypes()
    {
    }
}