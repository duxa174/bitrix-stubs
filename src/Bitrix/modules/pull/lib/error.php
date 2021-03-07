<?php

namespace Bitrix\Pull;

class Error
{
    public $method = '';
    public $code = '';
    public $msg = '';
    public $params = array();
    public $error = false;
    public function __construct($method, $code, $msg, $params = array())
    {
    }
}