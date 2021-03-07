<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors;

/**
 * Class AlbumsDeleteAll - processor for delete all albums from VK
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors
 */
class AlbumsDeleteAll extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors\DataProcessor
{
    /**
     * Main export process method. Delete from VK ALL albums
     * Have not input params - get values from VK and from mapping and delete them all.
     *
     * @return bool - return true if OK or if errors it not critical. Expression if timer is over
     */
    public function process($data = NULL, \Bitrix\Sale\TradingPlatform\Timer $timer = NULL)
    {
    }
}