<?php

namespace Bitrix\Sale\Controller;

class BasketItem extends \Bitrix\Sale\Controller\Controller
{
    public function getPrimaryAutoWiredParameter()
    {
    }
    //region Actions
    public function getFieldsAction()
    {
    }
    public function getFieldsCatalogProductAction()
    {
    }
    public function modifyAction(array $fields)
    {
    }
    public function addAction(array $fields)
    {
    }
    public function addCatalogProductAction(array $fields)
    {
    }
    public function updateAction(\Bitrix\Sale\BasketItem $basketItem, array $fields)
    {
    }
    public function updateCatalogProductAction(\Bitrix\Sale\BasketItem $basketItem, array $fields)
    {
    }
    public function getAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function deleteAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    public function canBuyAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getBasePriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getBasePriceWithVatAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getCurrencyAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getDefaultPriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getDiscountPriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getFinalPriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getInitialPriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getPriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getPriceWithVatAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getProductIdAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getQuantityAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getReservedQuantityAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getVatAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getVatRateAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function getWeightAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function isBarcodeMultiAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function isCustomMultiAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function isCustomPriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function isDelayAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    public function isVatInPriceAction(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /*public function checkProductBarcodeAction(\Bitrix\Sale\BasketItem $basketItem, array $fields)
    	{
    		$r = false;
    		if ($basketItem)
    		{
    			$r = Provider::checkProductBarcode($basketItem, $fields);
    		}
    
    		if ($r)
    			return true;
    		else
    		{
    			$this->addError(new Error('barcode check failed',200150000010));
    			return null;
    		}
    
    	}*/
    //endregion
    protected function get(\Bitrix\Sale\BasketItem $basketItem, array $fields = [])
    {
    }
    public static function prepareFields($fields)
    {
    }
    protected function checkPermissionEntity($name)
    {
    }
    protected function addValidate($fields)
    {
    }
}