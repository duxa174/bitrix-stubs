<?php

namespace Bitrix\Sale\Exchange;

class ExportOneCPackageSale extends \Bitrix\Sale\Exchange\ExportOneCPackage
{
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
     * @param PaymentImport $item
     * @param $checks
     */
    protected function prepareEntityFieldsCashBoxChecks(\Bitrix\Sale\Exchange\Entity\PaymentImport $item, $checks)
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
     * @param string $xml
     * @return string
     */
    public function outputXmlContainer($xml)
    {
    }
    /**
     * @return string
     */
    protected function getShemVersion()
    {
    }
}