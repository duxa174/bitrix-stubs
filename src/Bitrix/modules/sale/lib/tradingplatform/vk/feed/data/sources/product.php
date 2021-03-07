<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Sources;

/**
 * Class Product
 * Complex iterator for processing products from several iblocks
 *
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Sources
 */
class Product extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Sources\DataSource implements \Iterator
{
    protected $feeds = array();
    protected $currentFeed;
    protected $startPosition = array();
    protected $vk;
    protected $exportId;
    /**
     * Product constructor.
     * @param $exportId	- int value of export ID
     * @param $startPosition - can be null. ID of first element to process
     */
    public function __construct($exportId, $startPosition)
    {
    }
    protected function setStartPosition($startPosition)
    {
    }
    /**
     * Owerwrite ITERATOR method
     * @return mixed
     */
    public function current()
    {
    }
    /**
     * Owerwrite ITERATOR method
     * @return string
     */
    public function key()
    {
    }
    /**
     * Owerwrite ITERATOR method
     */
    public function next()
    {
    }
    /**
     * Owerwrite ITERATOR method
     */
    public function rewind()
    {
    }
    /**
     * Owerwrite ITERATOR method
     * @return mixed
     */
    public function valid()
    {
    }
}