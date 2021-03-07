<?php

namespace Bitrix\Seo\Engine;

class YandexException extends \Exception
{
    protected $code;
    protected $message;
    protected $result;
    protected $status;
    public function __construct($queryResult, \Exception $previous = NULL)
    {
    }
    public function getStatus()
    {
    }
    protected function parseError()
    {
    }
    private function formatMessage()
    {
    }
}