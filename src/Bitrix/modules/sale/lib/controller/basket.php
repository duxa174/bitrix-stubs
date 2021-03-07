<?php

namespace Bitrix\Sale\Controller;

class Basket extends \Bitrix\Sale\Controller\Controller
{
    public function getPrimaryAutoWiredParameter()
    {
    }
    public function getAutoWiredParameters()
    {
    }
    //region Actions
    public function getFieldsAction()
    {
    }
    public function modifyAction(array $fields)
    {
    }
    public function addAction(array $fields)
    {
    }
    public function updateAction(\Bitrix\Sale\BasketItem $basket, array $fields)
    {
    }
    public function getAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function deleteAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function listAction($select = [], $filter, $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    public function canBuyAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getBasePriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getBasePriceWithVatAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getCurrencyAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getDefaultPriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getDiscountPriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getFinalPriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getInitialPriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getPriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getPriceWithVatAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getProductIdAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getQuantityAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getReservedQuantityAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getVatAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getVatRateAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function getWeightAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function isBarcodeMultiAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function isCustomMultiAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function isCustomPriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function isDelayAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function isVatInPriceAction(\Bitrix\Sale\BasketItem $basket)
    {
    }
    public function checkProductBarcodeAction(\Bitrix\Sale\BasketItem $basket, array $fields)
    {
    }
    //endregion
    protected function get(\Bitrix\Sale\BasketItem $basketItem, array $fields = [])
    {
    }
    public static function prepareFields($fields)
    {
    }
    protected function checkPermission($name)
    {
    }
}