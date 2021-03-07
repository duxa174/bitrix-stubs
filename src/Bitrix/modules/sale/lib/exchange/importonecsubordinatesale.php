<?php

namespace Bitrix\Sale\Exchange;

final class ImportOneCSubordinateSale extends \Bitrix\Sale\Exchange\ImportOneCPackage
{
    public static function configuration()
    {
    }
    /**
     * @param DocumentBase[] $documents
     * @return \Bitrix\Sale\Result
     */
    protected function convert(array $documents)
    {
    }
    /**
     * @param DocumentBase[] $documents
     * @return array
     */
    protected function deletePaymentDocumentNotPaid(array $documents)
    {
    }
    /**
     * @param DocumentBase $document
     * @return bool
     */
    protected function documentIsPaid(\Bitrix\Sale\Exchange\OneC\DocumentBase $document)
    {
    }
    /**
     * @param DocumentBase $document
     * @return bool
     */
    protected function isPaymentDocument(\Bitrix\Sale\Exchange\OneC\DocumentBase $document)
    {
    }
    protected function documentPaymentReplaceId(\Bitrix\Sale\Order $order, $documents)
    {
    }
    /**
     * @param Order $order
     * @param DocumentBase[] $documents
     */
    protected function deletePaymentToReplace(\Bitrix\Sale\Order $order, $documents)
    {
    }
    /**
     * @param DocumentBase[] $documents
     * @return bool
     */
    protected function hasPaymentDocuments(array $documents)
    {
    }
    /**
     * @param DocumentBase[] $documents
     * @return array
     */
    protected function getPaymentDocuments($documents)
    {
    }
    /**
     * @param DocumentBase[] $documents
     * @return float|int
     */
    protected function getPaymentDocumentsPaidSum($documents)
    {
    }
    protected function orderPartiallyIsPaid(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param array $fields
     * @return int
     */
    protected function resolveSubordinateDocumentTypeId(array $fields)
    {
    }
    /**
     * @param $xmlId
     * @param array $items
     * @param array|null $params
     * @return mixed|null
     */
    protected function getItemByParam($key, array $items, array $params = null)
    {
    }
    /**
     * @param $typeId
     * @return IConverter
     */
    protected function converterFactoryCreate($typeId)
    {
    }
    /**
     * @param $typeId
     * @return DocumentBase
     */
    protected function documentFactoryCreate($typeId)
    {
    }
    /**
     * @param $typeId
     * @return ImportBase
     */
    protected function entityFactoryCreate($typeId)
    {
    }
}