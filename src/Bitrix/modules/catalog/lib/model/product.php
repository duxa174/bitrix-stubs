<?php

namespace Bitrix\Catalog\Model;

class Product extends \Bitrix\Catalog\Model\Entity
{
    /** @var bool Enable offers automation */
    private static $separateSkuMode = null;
    /** @var bool Sale exists */
    private static $saleIncluded = null;
    /**
     * Returns product tablet name.
     *
     * @return string
     */
    public static function getTabletClassName() : string
    {
    }
    /**
     * Delete product item. Use instead of DataManager method.
     *
     * @param int $id
     * @return ORM\Data\DeleteResult
     */
    public static function delete($id) : \Bitrix\Main\ORM\Data\DeleteResult
    {
    }
    /**
     * Check and modify fields before add product. Need for product automation.
     *
     * @param ORM\Data\AddResult $result
     * @param int|null $id
     * @param array &$data
     * @return void
     */
    protected static function prepareForAdd(\Bitrix\Main\ORM\Data\AddResult $result, $id, array &$data) : void
    {
    }
    /**
     * Check and modify fields before update product. Need for product automation.
     *
     * @param ORM\Data\UpdateResult $result
     * @param int $id
     * @param array &$data
     * @return void
     */
    protected static function prepareForUpdate(\Bitrix\Main\ORM\Data\UpdateResult $result, $id, array &$data) : void
    {
    }
    /**
     * Run core automation after add product.
     *
     * @param int $id
     * @param array $data
     * @return void
     */
    protected static function runAddExternalActions($id, array $data) : void
    {
    }
    /**
     * Run core automation after update product.
     *
     * @param int $id
     * @param array $data
     * @return void
     */
    protected static function runUpdateExternalActions($id, array $data) : void
    {
    }
    /**
     * Returns product default fields list for caching.
     *
     * @return array
     */
    protected static function getDefaultCachedFieldList() : array
    {
    }
    /**
     * Run core automation after delete product.
     *
     * @param int $id
     * @return void
     */
    protected static function runDeleteExternalActions($id) : void
    {
    }
    /**
     * Sending messages that the product has become available.
     * @internal
     *
     * @param $id
     * @param array $product
     * @return void
     */
    private static function checkSubscription($id, array $product) : void
    {
    }
    private static function checkPriceValue($price) : ?float
    {
    }
    private static function checkPriceCurrency($currency) : ?string
    {
    }
    private static function calculateAvailable(array &$fields, array &$actions)
    {
    }
    //TODO: remove after create \Bitrix\Catalog\Model\CatalogIblock
    private static function getProductTypes($catalogType)
    {
    }
    //TODO: remove after create \Bitrix\Catalog\Model\CatalogIblock
    private static function getDefaultProductType($catalogType)
    {
    }
}