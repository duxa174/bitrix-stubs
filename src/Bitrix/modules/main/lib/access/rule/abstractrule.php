<?php

namespace Bitrix\Main\Access\Rule;

abstract class AbstractRule implements \Bitrix\Main\Access\Rule\RuleInterface
{
    /* @var AccessibleController $controller */
    protected $controller;
    /* @var AccessibleUser $user */
    protected $user;
    public function __construct(\Bitrix\Main\Access\AccessibleController $controller)
    {
    }
    public abstract function execute(\Bitrix\Main\Access\AccessibleItem $item = null, $params = null) : bool;
}