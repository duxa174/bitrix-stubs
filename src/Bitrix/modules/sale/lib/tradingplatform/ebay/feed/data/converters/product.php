<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Converters;

class Product extends \Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Converters\DataConverter
{
    protected $ebayCategories;
    protected $attributesList;
    protected $attributesItem;
    protected $variationsVector;
    protected $bitrixCategories;
    protected $siteId;
    public function __construct($params)
    {
    }
    public function convert($data)
    {
    }
    protected function getItemDataOffersOffer($data, $parentSKU)
    {
    }
    protected function getItemDataOffers($data)
    {
    }
    protected function getEbayCategoryAttrName($ebeyAttributeId)
    {
    }
    protected function getAttributesItem($attributesList, $data)
    {
    }
    protected function getItemData($data)
    {
    }
    protected function getListingDetails($iBlockId, $ebayCategory)
    {
    }
    protected function getBitrixItemPropValue($propId, array $props)
    {
    }
    protected function getAttributesList($iblockId, array $ebayCategories)
    {
    }
    /* note:  limitation for Russia - product can be just in one category */
    protected function bitrixToEbayCategories($iblockId, array $bitrixCategories)
    {
    }
    protected static function getEbayCategoriesParams($iblockId, array $bitrixCategories = array())
    {
    }
    protected function getPolicyForCategory($iblockId, $ebayCategory)
    {
    }
}