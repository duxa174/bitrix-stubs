<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed;

class Feed
{
    /** @var  Data\Converters\DataConverter $dataConvertor */
    protected $dataConvertor;
    /** @var  Data\Sources\DataSource $sourceDataIterator */
    protected $sourceDataIterator;
    /** @var  Data\Processors\DataProcessor $dataProcessor */
    protected $dataProcessor;
    /** @var \Bitrix\Sale\TradingPlatform\Timer|null $timer */
    protected $timer = null;
    protected $siteId = "";
    public function __construct($params)
    {
    }
    public function processData($startPosition = "")
    {
    }
    public function setSourceData($data)
    {
    }
}