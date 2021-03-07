<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Sources;

class Results extends \Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Sources\DataSource implements \Iterator
{
    protected $siteId;
    protected $feedsToCheck = array();
    protected $resultFileContent = "";
    protected $remotePathTmpl = "";
    protected $filter = array();
    public function __construct($params)
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
    protected function createRemotePath($feedData)
    {
    }
    protected function getFileContent($feedData)
    {
    }
}