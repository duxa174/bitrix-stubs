<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Converters;

abstract class DataConverter
{
    public abstract function convert($data);
}