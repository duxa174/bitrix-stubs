<?php

namespace Bitrix\Catalog\Ebay;

class ExportOfferSKU extends \Bitrix\Catalog\Ebay\ExportOffer
{
    protected $arSKUExport = array();
    protected $arSelectOfferProps;
    protected $arProperties;
    protected $arOfferIBlock = array();
    protected $arOffers = array();
    protected $intOfferIBlockID = 0;
    public function __construct($catalogType, $params)
    {
    }
    protected function getOffers()
    {
    }
    protected function getSKUExport()
    {
    }
    protected function getOfferTemplateUrl()
    {
    }
    protected function getOffersItemsDb($itemId)
    {
    }
    protected function getProperties($arItem)
    {
    }
    protected function getItemParams(array $itemOffer)
    {
    }
    /**
     * @param \_CIBElement $obOfferItem
     * @param array $arItem
     * @return array|mixed
     */
    protected function getItemProps($obOfferItem, array $arItem)
    {
    }
    /**
     * @param \CIBlockResult $rsOfferItems
     * @param array $arItem
     * @return array
     */
    protected function getMinPriceOffer($rsOfferItems, $arItem)
    {
    }
    protected function nextItem()
    {
    }
}