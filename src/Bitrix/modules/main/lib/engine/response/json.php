<?php

namespace Bitrix\Main\Engine\Response;

class Json extends \Bitrix\Main\HttpResponse
{
    protected $data;
    protected $jsonEncodingOptions = 0;
    public function __construct($data = null, $options = 0)
    {
    }
    public function setData($data)
    {
    }
    private function processData($data)
    {
    }
    public function send()
    {
    }
}