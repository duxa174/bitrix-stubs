<?php

namespace Bitrix\Sale\Basket;

class RefreshFactory
{
    const TYPE_FULL = 'full';
    const TYPE_SINGLE = 'single';
    public static function create($type = '', $params = null)
    {
    }
    public static function createSingle($basketItemCode)
    {
    }
}