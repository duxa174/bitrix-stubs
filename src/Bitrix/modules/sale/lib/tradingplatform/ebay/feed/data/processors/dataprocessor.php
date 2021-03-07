<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Processors;

abstract class DataProcessor
{
    public abstract function process($data);
}