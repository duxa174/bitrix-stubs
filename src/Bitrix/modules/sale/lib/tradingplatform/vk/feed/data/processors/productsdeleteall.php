<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors;

/**
 * Class ProductsDeleteAll - processing delete all products from VK
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors
 */
class ProductsDeleteAll extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Processors\DataProcessor
{
    /**
     * Main export process method. Delete from VK ALL products
     * Have not input params - get values from VK and from mapping and delete them all.
     *
     * @return bool - return true if OK or if errors it not critical. Expression if timer is over
     */
    public function process($data = NULL, \Bitrix\Sale\TradingPlatform\Timer $timer = NULL)
    {
    }
}