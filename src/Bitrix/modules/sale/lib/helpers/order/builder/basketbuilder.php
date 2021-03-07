<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

/**
 * Class BasketBuilder
 * @package Bitrix\Sale\Helpers\Order\Builder
 * @internal
 */
abstract class BasketBuilder
{
    const BASKET_CODE_NEW = 'new';
    /** @var IBasketBuilderDelegate */
    protected $delegate = null;
    /** @var OrderBuilder  */
    protected $builder = null;
    /** @var int  */
    protected $maxBasketCodeIdx = 0;
    /** @var array  */
    protected $formData = [];
    /** @var array  */
    protected $needDataUpdate = array();
    /** @var array  */
    protected $basketCodeMap = [];
    /** @var array  */
    protected $cacheProductProviderData = false;
    /** @var array  */
    protected $catalogProductsIds = [];
    /** @var array  */
    protected $catalogProductsData = [];
    /** @var array  */
    protected $providerData = [];
    /** @var array  */
    protected $trustData = [];
    /** @var bool */
    protected $isProductAdded = false;
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\OrderBuilder $builder)
    {
    }
    public function initBasket()
    {
    }
    /**
     * @param int $orderId
     * @return IBasketBuilderDelegate
     */
    protected function getDelegate($orderId)
    {
    }
    /**
     * @return bool
     */
    public function isNeedUpdateNewProductPrice()
    {
    }
    public function checkProductData(array $productData)
    {
    }
    public function preliminaryDataPreparation()
    {
    }
    protected function getExistsItem($moduleId, $productId, array $properties = array())
    {
    }
    public function removeDeletedItems()
    {
    }
    public function itemsDataPreparation()
    {
    }
    public function basketCodeMap()
    {
    }
    // Preparing fields needed by provider
    protected function setItemsFieldsByFormData()
    {
    }
    protected function obtainCatalogProductsData(array $fields = array())
    {
    }
    protected function obtainProviderProductsData()
    {
    }
    protected function isProductAvailable($basketCode, $productFormData, $productProviderData, $isProductDataNeedUpdate)
    {
    }
    //todo: \Bitrix\Catalog\Product\Basket::addProductToBasket()
    public function setItemsFields()
    {
    }
    public function getOrder()
    {
    }
    public function getSettingsContainer()
    {
    }
    public function getErrorsContainer()
    {
    }
    public function getFormData()
    {
    }
    public function getBasket()
    {
    }
    public static function isBasketItemNew($basketCode)
    {
    }
    protected function getItemFromBasket($basketCode, $productData)
    {
    }
    protected function setItemData($basketCode, &$productData, &$item)
    {
    }
    protected function createItem($basketCode, &$productData)
    {
    }
    public function getCatalogMeasures()
    {
    }
    public function sendProductCachedDataToProvider(\Bitrix\Sale\BasketItem $item, \Bitrix\Sale\Order $order, array &$productData)
    {
    }
    public function setBasketItemFields(\Bitrix\Sale\BasketItem &$item, array $fields = array())
    {
    }
    public function finalActions()
    {
    }
    public function isProductAdded()
    {
    }
}