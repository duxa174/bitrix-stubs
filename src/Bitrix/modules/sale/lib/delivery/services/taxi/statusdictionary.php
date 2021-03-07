<?php

namespace Bitrix\Sale\Delivery\Services\Taxi;

/**
 * Class StatusDictionary
 * @package Bitrix\Sale\Delivery\Services\Taxi
 */
class StatusDictionary
{
    public const INITIAL = 'initial';
    public const ON_ITS_WAY = 'on_its_way';
    public const SEARCHING = 'searching';
    public const SUCCESS = 'success';
    public const UNKNOWN = 'unknown';
    /**
     * @return string[]
     */
    private static function getList() : array
    {
    }
    /**
     * @param string $statusCode
     * @return bool
     */
    public static function isStatusValid(string $statusCode) : bool
    {
    }
}