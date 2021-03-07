<?php

class SaleProductsGiftBasketComponent extends \Bitrix\Iblock\Component\ElementList
{
    /** @var \Bitrix\Sale\Discount\Gift\Manager */
    protected $giftManager;
    /** @var  \Bitrix\Sale\Basket */
    private $basket;
    public function __construct($component = \null)
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    private function buildIblockDependedParameters()
    {
    }
    private function prepareIblockInfo()
    {
    }
    private function fetchIblockIds()
    {
    }
    private function getBasket()
    {
    }
    /**
     * @param $item
     *
     * @return bool
     */
    private function isExtendedCatalogProvider(\Bitrix\Sale\BasketItem $item)
    {
    }
    private function getProperties($offersIblockId)
    {
    }
    protected function checkModules()
    {
    }
    /**
     * Initializes gift manager.
     * @return void
     */
    protected function initGiftManager()
    {
    }
    /**
     * Returns gift collections for current basket.
     * @return array
     */
    protected function getGiftCollections()
    {
    }
    /**
     * Returns list of product ids which will be showed on first hit.
     * @return array
     */
    protected function getProductIds()
    {
    }
    /**
     * Returns list of product ids which will be showed via ajax.
     * @return array
     */
    protected function getDeferredProductIds()
    {
    }
    protected function processProducts()
    {
    }
    /**
     * Add offers for each catalog product.
     * @return void
     */
    protected function processOffers()
    {
    }
    /**
     * @param array $item
     */
    protected function setGiftDiscountToMinPrice(array &$item)
    {
    }
}