<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Sources;

class Order extends \Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Sources\DataSource implements \Iterator
{
    protected $remotePath;
    protected $siteId;
    protected $dataFiles = array();
    protected $currentFileIdx = 0;
    protected $startFileIdx = 0;
    protected $orderLatest = "";
    public function __construct($params)
    {
    }
    public function setStartPosition($startPos = "")
    {
    }
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
    protected function receiveFiles()
    {
    }
}