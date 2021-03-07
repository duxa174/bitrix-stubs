<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Processors;

class SftpQueue extends \Bitrix\Sale\TradingPlatform\Ebay\Feed\Data\Processors\DataProcessor
{
    // todo: check if the record alredy exist
    protected $feedType;
    protected $coverTag = null;
    protected $schemeFileName = null;
    protected $fileNameSalt;
    protected $remotePath;
    protected $siteId;
    protected $timer = null;
    protected $path;
    public function __construct(array $params)
    {
    }
    protected function prepareFile($file)
    {
    }
    protected function flushData()
    {
    }
    public function process($data)
    {
    }
    public function addData($data)
    {
    }
    public function sendData()
    {
    }
    protected function packData($xmlFile)
    {
    }
    protected function sendDataSftp()
    {
    }
    protected function checkOuterConditions($sftp)
    {
    }
}