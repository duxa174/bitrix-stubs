<?php

namespace Bitrix\Sale\Exchange;

class ImportOneCPackage extends \Bitrix\Sale\Exchange\ImportOneCBase
{
    use \Bitrix\Sale\Exchange\PackageTrait;
    use \Bitrix\Sale\Exchange\LoggerTrait;
    const DELETE_IF_NOT_FOUND_RELATED_PAYMENT_DOCUMENT = 0x1;
    private static $instance = null;
    private static $settings = null;
    protected $order = null;
    /**
     * @return static
     */
    public static function getInstance()
    {
    }
    private function __clone()
    {
    }
    private function __construct()
    {
    }
    /**
     * @return Result|null
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function checkSettings()
    {
    }
    /**
     * @param OneC\DocumentBase[] $documents
     * @return Result
     */
    protected function checkDocuments(array $documents)
    {
    }
    /**
     * @param array $list
     * @return mixed|null
     */
    protected function getDeliveryServiceItem(array $list)
    {
    }
    /**
     * @param OneC\DocumentBase[] $documents
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotSupportedException
     */
    protected function convert(array $documents)
    {
    }
    /**
     * @param $typeId
     * @return int
     */
    protected function resolveOwnerEntityTypeId($typeId)
    {
    }
    /**
     * @param array $items
     * @return Result
     */
    protected function checkFields(array $items)
    {
    }
    public static function configuration()
    {
    }
    /**
     * @param ImportBase[] $items
     * @return ImportBase[]
     */
    protected function sortItems(array $items)
    {
    }
    /**
     * @param ImportBase[] $items
     * @return Result
     * @inernal
     */
    protected function import(array $items)
    {
    }
    /**
     * @param ImportBase $item
     * @return bool
     */
    private function importableItems($item)
    {
    }
    /**
     * @return int
     */
    protected static function getParentEntityTypeId()
    {
    }
    /**
     * @return int
     */
    protected static function getShipmentEntityTypeId()
    {
    }
    /**
     * @return int
     */
    protected static function getPaymentCardEntityTypeId()
    {
    }
    /**
     * @return int
     */
    protected static function getPaymentCashEntityTypeId()
    {
    }
    /**
     * @return int
     */
    protected static function getPaymentCashLessEntityTypeId()
    {
    }
    /**
     * @param array $items
     * @return Exchange\Entity\EntityImport|null
     */
    protected function loadParent(array $items)
    {
    }
    /**
     * Modify the shipment collection.
     * Remove shipments that were not submitted for processing
     * Add a note to the order saying the shipment was removed
     * @internal
     * @param Entity\OrderImport $orderImport
     * @param Entity\EntityImport[] $items
     * @return Result
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotSupportedException
     */
    protected function onBeforeShipmentCollectionModify(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, $items)
    {
    }
    protected function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * Modify the payment collection.
     * Remove payments that were not submitted for processing
     * Add a note to the order saying the payment was removed
     * @param Entity\OrderImport $orderImport
     * @param Entity\EntityImport[] $items
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotSupportedException
     * @inernal
     */
    protected function onBeforePaymentCollectionModify(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, $items)
    {
    }
    protected function paymentDelete(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * Modify the order and all dependent entities before import
     * @param Entity\OrderImport $orderImport
     * @param Entity\EntityImport[] $items
     * @return Result
     * @throws ArgumentNullException
     * @internal param Entity\OrderImport $order
     * @inernal
     */
    protected function onBeforeBasketModify(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, $items)
    {
    }
    /**
     * Modify all dependent entities before the order is changed
     * @param Entity\OrderImport $orderImport
     * @param Entity\EntityImport[] $items
     * @return Result
     * @inernal
     */
    protected function onBeforeEntityModify(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, array $items)
    {
    }
    /**
     * Modify shipment after changed
     * @param Entity\OrderImport $orderImport
     * @return Result
     * @internal param ImportBase $entity
     */
    protected function onAfterShipmentModifyChangeStatusOnDelivery(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport)
    {
    }
    /**
     * Modify all dependent entities after the order is changed
     * @param Entity\OrderImport $orderImport
     * @param ImportBase[] $items
     * @return Result
     */
    protected function onAfterEntitiesModify(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, $items)
    {
    }
    /**
     * @param $id
     * @param Entity\EntityImport $item
     * @return Result
     */
    protected function checkParentById($id, \Bitrix\Sale\Exchange\Entity\EntityImport $item)
    {
    }
    /**
     * @param $order
     * @param Exchange\Entity\EntityImport $itemOrder
     * @return Result
     */
    protected function orderIsLoad($order, $itemOrder)
    {
    }
    /**
     * @param Entity\OrderImport $orderImport
     * @param Result $result
     */
    protected function marker(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, \Bitrix\Sale\Result $result)
    {
    }
    /**
     * @param Exchange\Entity\OrderImport $orderImport
     * @param ImportBase[] $items
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult|Result|mixed
     */
    protected function save(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, $items)
    {
    }
    /**
     * @param ImportBase[] $items
     * @return bool
     */
    protected function hasCollisionErrors($items)
    {
    }
    /**
     * @param Entity\OrderImport $orderImport
     * @param ProfileImport[]|Exchange\Entity\EntityImport[] $items
     * @return Result
     * @deprecated
     */
    protected function UpdateCashBoxChecks(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, array $items)
    {
    }
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected function logger(array $items)
    {
    }
}