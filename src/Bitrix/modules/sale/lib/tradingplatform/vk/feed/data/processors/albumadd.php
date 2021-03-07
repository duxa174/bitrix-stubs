<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors;

/**
 * Class AlbumAdd - Processor for adding albums to VK
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors
 */
class AlbumAdd extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors\DataProcessor
{
    private static $firstRunning = true;
    private static $apiHelper;
    private static $isAgressive;
    /**
     * Main export process method. Adding albums in VK
     *
     * @param $data - array of albums to export. Max 25 items
     * @param null $timer - Tradingplatform\Timer to control execution time
     * @return bool - return true if OK or if errors it not critical. Expression if timer is over
     * @throws SystemException
     * @throws TimeIsOverException
     * @throws Vk\ExecuteException
     */
    public function process($data = null, \Bitrix\Sale\TradingPlatform\Timer $timer = null)
    {
    }
}