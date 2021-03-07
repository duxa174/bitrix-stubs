<?php

namespace Bitrix\Sale\Exchange\Entity;

/**
 * Class OrderImport
 * @package Bitrix\Sale\Exchange\Entity
 * @internal
 */
class OrderImport extends \Bitrix\Sale\Exchange\Entity\EntityImport
{
    private static $FIELD_INFOS = null;
    public function __construct($parentEntityContext = null)
    {
    }
    /**
     * @return int
     */
    public function getOwnerTypeId()
    {
    }
    protected function createEntity(array $fileds)
    {
    }
    /**
     * @param Internals\Entity $entity
     * @throws Main\ArgumentException
     */
    public function setEntity(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     */
    protected function checkFields(array $fields)
    {
    }
    /**
     * @return Main\Entity\AddResult|Main\Entity\UpdateResult|Sale\Result|mixed
     */
    public function save()
    {
    }
    public static function getFieldsInfo()
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function add(array $params)
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function update(array $params)
    {
    }
    /**
     * @param array|null $params
     * @return Sale\Result
     */
    public function delete(array $params = null)
    {
    }
    /**
     * @return string
     */
    protected function getExternalFieldName()
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     */
    public function load(array $fields)
    {
    }
    /**
     * @param $collisions
     */
    public function markedEntityCollisions($collisions)
    {
    }
    private static function prepareFieldsBasketProperty($item)
    {
    }
    private function prepareFieldsBasketItem($productXML_ID, $item)
    {
    }
    private function prepareFieldsTax($fields)
    {
    }
    /**
     * @param $code
     * @return string|null
     */
    protected function getCodeAfterDelimiter($code)
    {
    }
    private static function getProduct($code)
    {
    }
    /**
     * @param Sale\BasketBase $basket
     * @param array $item
     * @return Sale\BasketItem|bool
     */
    public static function getBasketItemByItem(\Bitrix\Sale\BasketBase $basket, array $item)
    {
    }
    /**
     * @param array $fields
     * @return array
     */
    public static function getGroupItemsBasketFields($fields)
    {
    }
    /**
     * @param Sale\BasketBase $basket
     * @param array $basketItems
     * @return Sale\Result
     */
    private function fillBasket(\Bitrix\Sale\BasketBase $basket, array $basketItems)
    {
    }
    /**
     * @param array $item
     * @return array
     */
    protected function convertCurrency(array $item)
    {
    }
    /**
     * @internal
     * @param Sale\Basket $basket
     * @return array
     */
    private static function getProductsVatRate(\Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * @param Order $order
     * @param array $fields
     * @param $modifyTaxList
     */
    private function fillTax(\Bitrix\Sale\Order $order, array $fields, $modifyTaxList)
    {
    }
    private function fillProperty(\Bitrix\Sale\Order $order, $fieldsOrderProperty)
    {
    }
    public function refreshData(array $fields)
    {
    }
    /**
     * @param Internals\Entity $order
     * @return int
     * @throws Main\ArgumentException
     */
    public static function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $order)
    {
    }
    private static function getIBlockProduct($iblockId)
    {
    }
    /**
     * Calculate the difference between externally submitted item quantity in the cart and the current quantity
     * @param Sale\Basket $basket
     * @param array $basketItems
     * @return array
     */
    public function calculateDeltaQuantity(\Bitrix\Sale\Basket $basket, array $basketItems)
    {
    }
    /**
     * Decrease item quantity by calculated value for all shipments.
     * Do it for all shipments matching selection parameters and containing the product (Exchange\IShipmentCriterion implementation).
     * @param array $basketItemsIndex
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     */
    public function synchronizeQuantityBasketItems(array $basketItemsIndex)
    {
    }
    /**
     * @return int
     * @internal
     */
    protected function getShipmentTypeId()
    {
    }
    /**
     * @return Exchange\ImportBase
     * @internal
     */
    protected function entityCreateByFactory($typeId)
    {
    }
    public function initFields()
    {
    }
    /**
     * @return array
     * @internal
     */
    protected function getFieldsItems()
    {
    }
    /**
     * @param Sale\BasketItem $basket
     * @return array
     */
    public static function getAttributesItem(\Bitrix\Sale\BasketItem $basket)
    {
    }
    /**
     * @return array
     * @internal
     */
    protected function getFieldsTaxes()
    {
    }
    /**
     * @return array
     */
    protected function getCashBoxChecks()
    {
    }
    /**
     * @param Sale\IBusinessValueProvider $entity
     * @return Order
     */
    protected static function getBusinessValueOrderProvider(\Bitrix\Sale\IBusinessValueProvider $entity)
    {
    }
}