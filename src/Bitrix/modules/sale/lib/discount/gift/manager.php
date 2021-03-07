<?php

namespace Bitrix\Sale\Discount\Gift;

final class Manager
{
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var SplObjectStorage */
    protected $basketCloneCache;
    /** @var SplObjectStorage */
    protected $basketAddedProduct;
    /** @var  Manager */
    private static $instance;
    /** @var  int */
    private $userId;
    private function __construct()
    {
    }
    /**
     * @param Basket $basket
     * @return Basket
     * @throws \Bitrix\Main\SystemException
     */
    private function getBasketCopy(\Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * @return int
     */
    public function getUserId()
    {
    }
    /**
     * @param int $userId
     * @return $this
     */
    public function setUserId($userId)
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns Singleton of Manager
     * @return Manager
     */
    public static function getInstance()
    {
    }
    /**
     * Returns list of collections with gifts by basket.
     * For performance you may set arguments $discounts and $appliedDiscounts, which respond to basket.
     *
     * @param Basket     $basket Target basket.
     * @param array|null $discounts List of all discounts for basket, which already succeed conditions.
     * @param array|null $appliedDiscounts List of all discounts for basket, which already applied to basket.
     * @return array
     */
    public function getCollectionsByBasket(\Bitrix\Sale\Basket $basket, array $discounts = null, array $appliedDiscounts = null)
    {
    }
    private function getGiftedProductIdsByAppliedDiscount(array $discount)
    {
    }
    private function deleteGiftedProducts(array $gifts, array $giftedProductIds)
    {
    }
    private function getPotentialGiftData(array $discounts, array $appliedDiscounts = array())
    {
    }
    private function isValidProduct(array $product)
    {
    }
    /**
     * Returns list of collections with gifts by product and some basket.
     * If basket does not contain product, then we calculate gifts without the product.
     * After we add the product to basket, calculate gifts and comparing with previous gifts.
     * If there is difference, then the method returns gifts with the product, else the method returns empty array.
     *
     * @param Basket $basket Target basket.
     * @param array $product Array which describes product (@see isValidProduct()).
     * @return array|null
     */
    public function getCollectionsByProduct(\Bitrix\Sale\Basket $basket, array $product)
    {
    }
    private function hasDifference(array $collectionsA, array $collectionsB)
    {
    }
    private function isEqual(\Bitrix\Sale\Discount\Gift\Collection $collectionA, \Bitrix\Sale\Discount\Gift\Collection $collectionB)
    {
    }
    private function getProductIdsFromCollection(\Bitrix\Sale\Discount\Gift\Collection $collection)
    {
    }
    /**
     * Returns basket items in specific format which we can use to insert in discount and build structure which
     * will look like old discounts in \CAllSaleDiscount::DoProcessOrder in DISCOUNT_LIST.
     *
     * @param Basket $basket
     * @param array  $discountData
     * @param array  $calcResults
     * @return array
     */
    private function getAffectedReformattedBasketItemsInDiscount(\Bitrix\Sale\Basket $basket, array $discountData, array $calcResults)
    {
    }
    private function getDiscounts(\Bitrix\Sale\Basket $basket)
    {
    }
    private function checkProductInBasket(array $product, \Bitrix\Sale\Basket $basket)
    {
    }
    private function getItemFromBasket(array $product, \Bitrix\Sale\Basket $basket)
    {
    }
    private function addProductToBasket(\Bitrix\Sale\Basket $basket, array $product)
    {
    }
    private function deleteProductFromBasket(\Bitrix\Sale\Basket $basket, array $product)
    {
    }
    private function existProductInAppliedDiscounts(array $product, array $appliedDiscounts)
    {
    }
    /**
     * Returns true if the product is gift for basket.
     *
     * @param Basket $basket Target basket.
     * @param array  $product Array which describes product (@see isValidProduct()).
     * @return bool|null
     */
    public function isGift(\Bitrix\Sale\Basket $basket, array $product)
    {
    }
    /**
     * Returns true if the discount contains action with gift.
     *
     * @param array $discount Discount.
     * @return bool
     */
    public function isContainGiftAction(array $discount)
    {
    }
    /**
     * Returns true if exists discount with gift.
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function existsDiscountsWithGift()
    {
    }
    /**
     * Disables existence discount with gift.
     * @return void
     */
    public function disableExistenceDiscountsWithGift()
    {
    }
    /**
     * Enables existence discount with gift.
     * @return void
     */
    public function enableExistenceDiscountsWithGift()
    {
    }
}