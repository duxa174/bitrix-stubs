<?php

namespace Bitrix\Catalog\Model;

class Price extends \Bitrix\Catalog\Model\Entity
{
    /** @var bool Enable offers automation */
    private static $separateSkuMode = null;
    private static $productPrices = [];
    private static $basePriceType = null;
    private static $priceTypes = null;
    private static $extraList = null;
    /**
     * Returns price tablet name.
     *
     * @return string
     */
    public static function getTabletClassName() : string
    {
    }
    public static function recountPricesFromBase($id)
    {
    }
    /**
     * Check and modify fields before add product price. Need for entity automation.
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
     * Check and modify fields before update product price. Need for entity automation.
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
     * Run core automation after add product price.
     *
     * @param int $id
     * @param array $data
     * @return void
     */
    protected static function runAddExternalActions($id, array $data) : void
    {
    }
    /**
     * Run core automation after update product price.
     *
     * @param int $id
     * @param array $data
     * @return void
     */
    protected static function runUpdateExternalActions($id, array $data) : void
    {
    }
    /**
     * Run core automation after delete product price.
     *
     * @param int $id
     * @return void
     */
    protected static function runDeleteExternalActions($id) : void
    {
    }
    /**
     * Returns product price default fields list for caching.
     *
     * @return array
     */
    protected static function getDefaultCachedFieldList() : array
    {
    }
    /**
     * Check and correct quantity range.
     * @internal
     *
     * @param ORM\Data\Result $result        for errors.
     * @param array &$fields                    price data.
     * @return void
     */
    private static function checkQuantityRange(\Bitrix\Main\ORM\Data\Result $result, array &$fields)
    {
    }
    /**
     * Check price value.
     * @internal
     *
     * @param string|int|float|null $price      Price value.
     * @return float|int|null
     */
    private static function checkPriceValue($price)
    {
    }
    private static function loadSettings()
    {
    }
    private static function calculatePriceFromBase($id, array &$fields)
    {
    }
    private static function getPriceIndex(array $row)
    {
    }
    private static function loadProductBasePrices($productId)
    {
    }
}