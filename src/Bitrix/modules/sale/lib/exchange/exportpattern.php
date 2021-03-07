<?php

namespace Bitrix\Sale\Exchange;

abstract class ExportPattern
{
    /**
     * @param array $fields
     * @return Result
     */
    protected abstract function getItems(array $fields);
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected abstract function convert(array $items);
    /**
     * @param DocumentBase[] $items
     * @return Result
     */
    protected abstract function export(array $items);
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected abstract function logger(array $items);
    /**
     * @param array $fields
     * @return Result
     */
    public function proccess(array $fields)
    {
    }
}