<?php

namespace Bitrix\Sale\Location;

class Exception extends \Bitrix\Main\SystemException
{
    protected $info = array();
    public function __construct($message = '', array $parameters = array())
    {
    }
    public function getAdditionalInfo()
    {
    }
    public function getDefaultMessage()
    {
    }
}