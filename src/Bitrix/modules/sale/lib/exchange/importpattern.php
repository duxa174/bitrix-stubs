<?php

namespace Bitrix\Sale\Exchange;

abstract class ImportPattern
{
    /**
     * @param array $rawData
     * @return mixed
     */
    public abstract function parse(array $rawData);
    /**
     * @param array $items
     * @return mixed
     */
    protected abstract function convert(array $items);
    /**
     * @param ImportBase[] $items
     * @return mixed
     */
    protected abstract function import(array $items);
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected abstract function logger(array $items);
    /**
     * @param array $rawData
     * @return Result
     */
    public function process(array $rawData)
    {
    }
}