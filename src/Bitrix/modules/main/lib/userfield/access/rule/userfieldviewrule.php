<?php

namespace Bitrix\Main\UserField\Access\Rule;

class UserFieldViewRule extends \Bitrix\Main\Access\Rule\AbstractRule
{
    private $userFieldModel = null;
    public function __construct(\Bitrix\Main\Access\AccessibleController $controller)
    {
    }
    public function execute(\Bitrix\Main\Access\AccessibleItem $userField = null, $params = null) : bool
    {
    }
    public function executeMass($userFields = null, $params = null) : array
    {
    }
}