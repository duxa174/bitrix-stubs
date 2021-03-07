<?php

namespace Bitrix\Sale\Exchange;

final class ImportOneCPackageCRM extends \Bitrix\Sale\Exchange\ImportOneCPackage
{
    /**
     * @param OneC\DocumentBase[] $documents
     * @return Result
     */
    protected function checkDocuments(array $documents)
    {
    }
    /**
     * @param Entity\EntityImport|ProfileImport $item
     * @return Result
     */
    protected function modifyEntity($item)
    {
    }
    /**
     * @param OrderImport $orderImport
     * @param Entity\EntityImport[] $items
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult|Result|mixed
     */
    protected function save(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, $items)
    {
    }
    /**
     * @param $typeId
     * @return \Bitrix\Sale\Exchange\OneC\Converter
     */
    protected function converterFactoryCreate($typeId)
    {
    }
    /**
     * @param OneC\DocumentBase[] $documents
     * @return Result
     */
    protected function convert(array $documents)
    {
    }
    public static function configuration()
    {
    }
    protected function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
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
}