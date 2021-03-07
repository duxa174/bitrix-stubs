<?php

namespace Bitrix\Sale\Exchange;

abstract class ExportOneCPackage extends \Bitrix\Sale\Exchange\ExportOneCBase
{
    use \Bitrix\Sale\Exchange\PackageTrait {
        \Bitrix\Sale\Exchange\PackageTrait::load as protected load_AliasTrait;
    }
    use \Bitrix\Sale\Exchange\LoggerTrait;
    use \Bitrix\Sale\Exchange\BaseTrait;
    private static $instance = null;
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
    public static function configuration()
    {
    }
    /**
     * @return int
     */
    protected static function getParentEntityTypeId()
    {
    }
    protected static function getShipmentEntityTypeId()
    {
    }
    protected static function getPaymentCardEntityTypeId()
    {
    }
    protected static function getPaymentCashEntityTypeId()
    {
    }
    protected static function getPaymentCashLessEntityTypeId()
    {
    }
    /**
     * @param array $fields
     * @return Result
     */
    protected function getItems(array $fields)
    {
    }
    /**
     * @param CollectionBase $collection
     * @param Order $order
     * @return array
     */
    protected function loadItemsByCollection(\Bitrix\Sale\Internals\CollectionBase $collection, \Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Entity $entity
     * @return int
     */
    protected function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected function convert(array $items)
    {
    }
    /**
     * @param DocumentBase[] $documents
     */
    protected function convertDocumentFields(array $documents)
    {
    }
    /**
     * @param ImportBase[] $items
     * @return Result;
     */
    protected function convertEntityFields(array $items)
    {
    }
    /**
     * @param ImportBase[] $items
     */
    protected function addItemOrderDelivery(array $items)
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
     * @param $taxes
     * @return int
     */
    protected function getSummOrderTaxes($taxes)
    {
    }
    /**
     * @param ShipmentImport $item
     * @param $orderTax
     * @return array
     */
    protected function getVatRateByShipment(\Bitrix\Sale\Exchange\Entity\ShipmentImport $item, $orderTax)
    {
    }
    /**
     * @param DocumentBase $document
     * @param UserProfileDocument $documentProfile
     */
    protected function prepareDocumentFieldsDeliveryAddress(\Bitrix\Sale\Exchange\OneC\DocumentBase $document, \Bitrix\Sale\Exchange\OneC\UserProfileDocument $documentProfile)
    {
    }
    /**
     * @param ImportBase $item
     * @param OrderImport $orderImport
     * @throws ArgumentException
     */
    protected function prepareEntityFieldsBusinessValue(\Bitrix\Sale\Exchange\ImportBase $item, \Bitrix\Sale\Exchange\Entity\OrderImport $orderImport = null)
    {
    }
    /**
     * @param DocumentBase[] $documents
     * @param int $level
     * @return Result
     */
    protected function outputXmlDocuments(array $documents, $level = 0)
    {
    }
    /**
     * @param DocumentBase $document
     * @param int $level
     * @return string
     */
    protected function outputXmlDocument(\Bitrix\Sale\Exchange\OneC\DocumentBase $document, $level)
    {
    }
    /**
     * @param DocumentBase[] $list
     * @return DocumentBase[]
     */
    protected function modifyDocumentsCollection(array $list)
    {
    }
    /**
     * @param EntityImport[] $items
     */
    protected function initLogger(array $items)
    {
    }
    /**
     * @param ImportBase $item
     * @return DocumentBase
     */
    protected function convertEntity(\Bitrix\Sale\Exchange\ImportBase $item)
    {
    }
    /**
     * @param $typeId
     * @return int
     */
    protected function resolveDocumentTypeId($typeId)
    {
    }
    /**
     * @param DocumentBase[] $documents
     * @return Result
     */
    protected function export(array $documents)
    {
    }
    /**
     * @param ImportBase $item
     * @param array $fields
     * @param null $order
     */
    protected static function load(\Bitrix\Sale\Exchange\ImportBase $item, array $fields, $order = null)
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