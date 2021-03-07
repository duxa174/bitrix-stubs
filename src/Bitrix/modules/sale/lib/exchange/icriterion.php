<?php

namespace Bitrix\Sale\Exchange;

interface ICriterion
{
    /**
     * @return mixed
     */
    public function getEntity();
    /**
     * @param $entity
     */
    public function setEntity($entity = null);
    /**
     * @param array $fields
     * @return bool
     */
    public function equals(array $fields);
    /**
     * @param $entityTypeId
     * @param $entity
     * @return mixed
     */
    public static function getCurrent($entityTypeId, $entity);
}
interface ICriterionOrder extends \Bitrix\Sale\Exchange\ICriterion
{
    /**
     * @param BasketItem $basketItem
     * @param array $fields
     * @return mixed
     */
    public function equalsBasketItemTax(\Bitrix\Sale\BasketItem $basketItem, array $fields);
    /**
     * @param BasketItem $basketItem
     * @param array $fields
     * @return mixed
     */
    public function equalsBasketItem(\Bitrix\Sale\BasketItem $basketItem, array $fields);
    /**
     * @param BasketItem $basketItem
     * @param array $fields
     * @return mixed
     */
    public function equalsBasketItemDiscount(\Bitrix\Sale\BasketItem $basketItem, array $fields);
}