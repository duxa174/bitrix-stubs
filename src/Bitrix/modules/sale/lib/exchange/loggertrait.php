<?php

namespace Bitrix\Sale\Exchange;

trait LoggerTrait
{
    /** @var  $rawData null */
    protected $rawData;
    /**
     * @param null $rawData
     */
    public function setRawData($rawData)
    {
    }
    /**
     * @return null
     */
    public function getRawData()
    {
    }
    /**
     * @return string
     */
    public abstract function getDirectionType();
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected function loggerEntities(array $items)
    {
    }
    /**
     * @param ImportBase[] $items
     * @param OrderImport $orderItem
     * @return Result
     */
    protected function loggerEntitiesPackage(array $items, \Bitrix\Sale\Exchange\Entity\OrderImport $orderItem)
    {
    }
}