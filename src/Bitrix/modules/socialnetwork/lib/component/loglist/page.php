<?php

namespace Bitrix\Socialnetwork\Component\LogList;

class Page
{
    protected $component;
    protected $processorInstance;
    protected $request;
    protected $needSetLogPage = false;
    protected $dateLastPageStart = null;
    protected $lastPageData = null;
    protected $prevPageLogIdList = [];
    protected $dateFirstPageTS = 0;
    public function __construct($params)
    {
    }
    public function getRequest()
    {
    }
    protected function getComponent()
    {
    }
    protected function getProcessorInstance()
    {
    }
    public function setNeedSetLogPage($value = false)
    {
    }
    public function getNeedSetLogPage()
    {
    }
    public function setDateLastPageStart($value = null)
    {
    }
    public function getDateLastPageStart()
    {
    }
    public function setLastPageData($value = null)
    {
    }
    public function getLastPageData()
    {
    }
    public function setPrevPageLogIdList($value = [])
    {
    }
    public function getPrevPageLogIdList()
    {
    }
    public function setDateFirstPageTimestamp($value = 0)
    {
    }
    public function getDateFirstPageTimestamp()
    {
    }
    public function preparePrevPageLogId()
    {
    }
    public function getLogPageData(&$result)
    {
    }
    public function setLogPageData(&$result)
    {
    }
    public function deleteLogPageData($result)
    {
    }
}