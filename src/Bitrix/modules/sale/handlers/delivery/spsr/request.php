<?php

namespace Sale\Handlers\Delivery\Spsr;

class Request
{
    protected $httpClient;
    protected static $url_http = "http://api.spsr.ru:8020/waExec";
    protected static $url_https = "https://api.spsr.ru/";
    public function __construct()
    {
    }
    /**
     * @param $requestData
     * @return Result
     */
    public function send($requestData)
    {
    }
    protected static function utfDecode($str)
    {
    }
    public function getServiceTypes($sid, array $knownServices)
    {
    }
    public function getSidResult($login, $pass, $companyName)
    {
    }
    public function getInvoicesInfo($sid, $icn, $lang, array $invoiceNumbers)
    {
    }
}