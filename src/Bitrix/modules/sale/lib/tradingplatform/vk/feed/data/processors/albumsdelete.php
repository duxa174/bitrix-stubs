<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors;

/**
 * Class AlbumsDelete - processor for delete from VK only exported products
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors
 */
class AlbumsDelete extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors\DataProcessor
{
    /**
     * Main export process method. Delete from VK only albums, which were adding via export
     * Have not input params - get values from VK and from mapping and compare them.
     *
     * @return bool - return true if OK or if errors it not critical. Expression if timer is over
     */
    public function process($data = NULL, \Bitrix\Sale\TradingPlatform\Timer $timer = NULL)
    {
    }
}