<?php

namespace Bitrix\Sale\Exchange;

class ImportOneCContragentBase extends \Bitrix\Sale\Exchange\ImportOneCBase
{
    protected function resolveDocumentTypeId(array $fields)
    {
    }
    /**
     * @param OneC\DocumentBase[] $documents
     * @return Result
     */
    protected function convert(array $documents)
    {
    }
    /**
     * @param UserImportBase[] $items
     * @return mixed
     */
    protected function import(array $items)
    {
    }
    public static function configuration()
    {
    }
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected function logger(array $items)
    {
    }
    protected function resolveOwnerEntityTypeId($typeId)
    {
    }
    static function getUserProfileEntityTypeId()
    {
    }
}