<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors;

/**
 * Class ProductAdd - Processor for adding product to VK
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors
 */
class ProductAdd extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors\DataProcessor
{
    private static $firstRunning = true;
    private static $albumsMapped;
    private static $apiHelper;
    private static $isAgressive;
    /**
     * Main export process method. Adding products in VK
     *
     * @param $data
     * @param Timer $timer - Tradingplatform\Timer to control execution time
     * @return bool - return true if OK or if errors it not critical. Expression if timer is over
     * @throws SystemException
     * @throws TimeIsOverException
     * @throws Vk\ExecuteException
     */
    public function process($data, \Bitrix\Sale\TradingPlatform\Timer $timer = null)
    {
    }
}