<?php

namespace Bitrix\Sale\Exchange;

final class ImportOneCPackageSale extends \Bitrix\Sale\Exchange\ImportOneCPackage
{
    protected function convert(array $documents)
    {
    }
    /**
     * @param OneC\OrderDocument $document
     * @return null|string
     */
    protected function getDefaultTrackingNumber(\Bitrix\Sale\Exchange\OneC\OrderDocument $document)
    {
    }
    /**
     * @param OneC\OrderDocument $document
     * @return null|int
     */
    protected function getDefaultPaySystem(\Bitrix\Sale\Exchange\OneC\OrderDocument $document)
    {
    }
    /**
     * @param OneC\OrderDocument $document
     * @return null|int
     */
    protected function getDefaultDeliverySystem(\Bitrix\Sale\Exchange\OneC\OrderDocument $document)
    {
    }
    /**
     * @param OrderImport $orderImport
     * @param array $items
     * @return Result
     * @deprecated
     */
    protected function UpdateCashBoxChecks(\Bitrix\Sale\Exchange\Entity\OrderImport $orderImport, array $items)
    {
    }
}