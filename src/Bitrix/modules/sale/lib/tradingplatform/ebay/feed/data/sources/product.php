<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Sources;

class Product extends \Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Sources\DataSource implements \Iterator
{
    protected $productFeeds = array();
    protected $currentFeed;
    protected $ebay;
    protected $siteId;
    protected $startPos = 0;
    protected $startProductFeed = 0;
    public function __construct($params)
    {
    }
    protected function getIblockIds()
    {
    }
    protected function getMappedGroups($iblockId)
    {
    }
    protected function getXmlData()
    {
    }
    protected function getDomainName()
    {
    }
    public function setStartPosition($startPos = "")
    {
    }
    //Proxy offers iterator methods
    public function current()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function valid()
    {
    }
}