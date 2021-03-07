<?php

/**
 * Class CSaleGiftProductComponent
 * @deprecated No longer used by internal code and not recommended.
 * Use "sale.products.gift" instead.
 */
class CSaleGiftProductComponent extends \CCatalogViewedProductsComponent
{
    /** @var \Bitrix\Sale\Discount\Gift\Manager */
    protected $giftManager;
    /** @var array */
    private $productIds;
    /**
     * Checks required modules.
     * @throws Exception
     * @return void
     */
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
     * Event called from includeComponent before component execution.
     *
     * <p>Takes component parameters as argument and should return it formatted as needed.</p>
     * @param array[string]mixed $arParams
     * @return array[string]mixed
     *
     */
    public function onPrepareComponentParams($params)
    {
    }
    protected function fillUrlTemplates()
    {
    }
    private function recreateUrlTemplate($keyTemplate, $urlTemplate)
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
     * Returns list of product ids which will be showed.
     * @return array
     */
    protected function getProductIds()
    {
    }
    /**
     * Returns pure offers which exist in $this->linkItems, $this->items.
     * You can use the method after execution parent::setItemsOffers(),
     * which fills necessary $this->linkItems, $this->items.
     * @return array
     */
    private function getPureOffers()
    {
    }
    /**
     * Finds array with data which fully describes offer (SKU) by offer id.
     * The method uses $this->items.
     * @param $offerId
     * @return null|array
     */
    private function findPureOfferInItemsByOfferId($offerId)
    {
    }
    /**
     * Sets offers to specific product. If exists another offer, then it will delete.
     * Notice! List of offers have to belong to identical product.
     * @param array $pureOffers
     * @return void
     */
    private function setPureOffersToProduct(array $pureOffers)
    {
    }
    /**
     * Add offers for each catalog product.
     * @return void
     */
    protected final function setItemsOffers()
    {
    }
    protected function setItemsPrices()
    {
    }
    protected function formatResult()
    {
    }
    /**
     * @param $offer
     * @return mixed
     */
    private function setGiftDiscountToMinPrice(array &$offer)
    {
    }
    /**
     * Returns catalog prices data by product.
     * @param array $item Product.
     * @return array
     */
    protected function getPriceDataByItem(array $item)
    {
    }
    protected function isCurrentProductGift(array $product)
    {
    }
    public function executeComponent()
    {
    }
}