<?php

namespace Bitrix\Main\Access\Rule;

interface RuleInterface
{
    public function __construct(\Bitrix\Main\Access\AccessibleController $controller);
    public function execute(\Bitrix\Main\Access\AccessibleItem $item = null, $params = null) : bool;
}