<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed;

/**
 * Class for manage Feed - object, which manipulate exporter - fetching items, converted and processed them
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed
 */
class Feed
{
    /** @var  Data\Converters\DataConverter $dataConvertor */
    protected $dataConvertor;
    /** @var  Data\Sources\DataSource $sourceDataIterator */
    protected $sourceDataIterator;
    /** @var  Data\Processors\DataProcessor $dataProcessor */
    protected $dataProcessor;
    protected $feedType;
    protected $startPosition;
    /** @var \Bitrix\Sale\TradingPlatform\Timer|null $t iimer */
    static $timer = NULL;
    /**
     * Feed constructor.
     *
     * @param $params
     * @param $startPosition string - ID of first element to export
     */
    public function __construct($params, $startPosition)
    {
    }
    /**
     * Return Timer
     * @return Timer|null
     */
    private static function getTimer()
    {
    }
    /**
     * Consistently get data from source, convert them and processing export.
     * Export process runs on the steps.
     * Export controlling by timer. When timer expired - throw exception.
     *
     * @param null $exportId
     */
    public function processData($exportId = NULL)
    {
    }
}