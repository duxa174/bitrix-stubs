<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Sources;

abstract class DataSource implements \Iterator
{
    public function setStartPosition($startPosition)
    {
    }
    public function setData(array $data)
    {
    }
}