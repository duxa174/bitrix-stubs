<?php

namespace Bitrix\Sale\Discount\Prediction;

final class Manager
{
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var  Manager */
    private static $instance;
    /** @var  int */
    private $userId;
    private function __construct()
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
     * Returns first prediction which has user by current basket.
     * @param Basket $basket Basket.
     * @param array  $product Target product.
     * @return mixed|null
     * @throws SystemException
     */
    public function getFirstPredictionTextByProduct(\Bitrix\Sale\Basket $basket, array $product)
    {
    }
    private function tryToFindPredictionConnectedProducts(\Bitrix\Sale\Basket $basket, array $product)
    {
    }
    private function getProductUrl($productId)
    {
    }
    private function getSectionUrl($sectionId)
    {
    }
    private function getProductName($productId)
    {
    }
    private function getSectionName($sectionId)
    {
    }
    private function getSectionIdsByProduct(array $product)
    {
    }
    private function getSectionIdsByElement($elementId)
    {
    }
    private function extendSectionIds(array $sectionIds)
    {
    }
    /**
     * Extends to sku ids.
     * @param array $productIds
     * @return array
     */
    private function extendProductIds(array $productIds)
    {
    }
    private function checkProductInBasket(array $product, \Bitrix\Sale\Basket $basket)
    {
    }
    private function buildTextByPredictionDiscount(\Bitrix\Sale\Basket $basket, array $discount)
    {
    }
    private function findFirstPredictionDiscount(array $discounts, $typePrediction)
    {
    }
    private function addProductToBasket(\Bitrix\Sale\Basket $basket, array $product)
    {
    }
    private function getDiscounts(\Bitrix\Sale\Basket $basket)
    {
    }
    private function isValidProduct(array $product)
    {
    }
}