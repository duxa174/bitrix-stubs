<?php

namespace Bitrix\Sale\Exchange;

final class ExportOneCSubordinateSale extends \Bitrix\Sale\Exchange\ExportOneCPackage
{
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
     * @param DocumentBase[] $documents
     */
    protected function convertDocumentFields(array $documents)
    {
    }
    /**
     * @return string
     */
    protected function getShemVersion()
    {
    }
    /**
     * @param array $list
     * @return array
     */
    protected function modifyDocumentsCollection(array $list)
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