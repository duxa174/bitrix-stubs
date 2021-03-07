<?php

namespace Bitrix\Sender\Access\Rule;

class BaseRule extends \Bitrix\Main\Access\Rule\AbstractRule
{
    /**
     * check access permission
     * @param AccessibleItem|null $item
     * @param null $params
     *
     * @return bool
     */
    public function execute(\Bitrix\Main\Access\AccessibleItem $item = null, $params = null) : bool
    {
    }
}