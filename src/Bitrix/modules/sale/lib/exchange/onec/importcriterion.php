<?php

namespace Bitrix\Sale\Exchange\OneC;

class ImportCriterionBase implements \Bitrix\Sale\Exchange\ICriterion
{
    use \Bitrix\Sale\Exchange\BaseTrait;
    protected $entity = null;
    /**
     * @return null|Sale\Internals\CollectableEntity $entity
     */
    public function getEntity()
    {
    }
    /**
     * @param $entity
     */
    public function setEntity($entity = null)
    {
    }
    /**
     * @param $entityTypeId
     * @param $entity
     * @return static
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function getCurrent($entityTypeId, $entity)
    {
    }
    /**
     * @param array $fields
     * @return bool
     */
    public function equals(array $fields)
    {
    }
    protected function getParentTypeId()
    {
    }
    protected function getShipmentTypeId()
    {
    }
}
class ImportCriterionOneCCml2 extends \Bitrix\Sale\Exchange\OneC\ImportCriterionBase
{
    /**
     * @param array $fields
     * @return bool
     */
    public function equals(array $fields)
    {
    }
}
class CriterionOrder extends \Bitrix\Sale\Exchange\OneC\ImportCriterionOneCCml2 implements \Bitrix\Sale\Exchange\ICriterionOrder
{
    /**
     * @param Sale\BasketItem $basketItem
     * @param array $fields
     * @return bool
     */
    public function equalsBasketItemTax(\Bitrix\Sale\BasketItem $basketItem, array $fields)
    {
    }
    /**
     * @param Sale\BasketItem $basketItem
     * @param array $fields
     * @return bool
     */
    public function equalsBasketItem(\Bitrix\Sale\BasketItem $basketItem, array $fields)
    {
    }
    /**
     * @param Sale\BasketItem $basketItem
     * @param array $fields
     * @return bool
     */
    public function equalsBasketItemDiscount(\Bitrix\Sale\BasketItem $basketItem, array $fields)
    {
    }
    /**
     * @param Sale\Order|null $entity
     * @throws Main\ArgumentException
     */
    public function setEntity($entity = null)
    {
    }
}
class CriterionShipment extends \Bitrix\Sale\Exchange\OneC\ImportCriterionOneCCml2
{
    /**
     * @param Sale\Shipment $entity
     * @throws Main\ArgumentException
     */
    public function setEntity($entity = null)
    {
    }
    /**
     * @param array $fields
     * @return bool
     */
    public function equals(array $fields)
    {
    }
}
class CriterionShipmentInvoice extends \Bitrix\Sale\Exchange\OneC\CriterionShipment
{
    protected function getParentTypeId()
    {
    }
    protected function getShipmentTypeId()
    {
    }
}
class CriterionPayment extends \Bitrix\Sale\Exchange\OneC\ImportCriterionOneCCml2
{
    /**
     * @param Sale\Payment|null $entity
     * @throws Main\ArgumentException
     */
    public function setEntity($entity = null)
    {
    }
    /**
     * @param array $fields
     * @return bool
     */
    public function equals(array $fields)
    {
    }
}
/**
 * Class CriterionProfile
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class CriterionProfile extends \Bitrix\Sale\Exchange\OneC\ImportCriterionOneCCml2
{
    /**
     * @param array $fields
     * @return bool
     */
    public function equals(array $fields)
    {
    }
    /**
     * @param Exchange\ProfileImport|null $entity
     * @throws Main\ArgumentException
     */
    public function setEntity($entity = null)
    {
    }
}