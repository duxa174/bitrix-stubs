<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors;

abstract class DataProcessor
{
    protected static $vk;
    protected $api;
    protected $executer;
    protected $vkGroupId;
    protected $exportId;
    public abstract function process($data, \Bitrix\Sale\TradingPlatform\Timer $timer = NULL);
    /**
     * DataProcessor constructor.
     * @param $exportId - int ID of export
     */
    public function __construct($exportId)
    {
    }
}