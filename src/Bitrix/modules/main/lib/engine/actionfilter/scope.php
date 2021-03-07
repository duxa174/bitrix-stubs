<?php

namespace Bitrix\Main\Engine\ActionFilter;

class Scope extends \Bitrix\Main\Engine\ActionFilter\Base
{
    const AJAX = 0b1;
    const REST = 0b10;
    const CLI = 0b100;
    const ALL = 0b111;
    const NOT_AJAX = self::ALL & ~self::AJAX;
    const NOT_REST = self::ALL & ~self::REST;
    const NOT_CLI = self::ALL & ~self::CLI;
    private $scopes;
    public function __construct($scopes)
    {
    }
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
    protected function getCurrentScope()
    {
    }
}