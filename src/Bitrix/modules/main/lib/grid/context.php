<?php

namespace Bitrix\Main\Grid;

/**
 * Class Context.
 * @package Bitrix\Main\Grid
 */
class Context
{
    /**
     * @return \Bitrix\Main\HttpRequest
     */
    protected static function getRequest()
    {
    }
    /**
     * Checks whether the request from grid
     * @return bool
     */
    public static function isInternalRequest()
    {
    }
    /**
     * Checks that this is validate action request
     * @return bool
     */
    public static function isValidateRequest()
    {
    }
    /**
     * Checks that this is edit action request
     *
     * @return bool
     */
    public static function isShowpageRequest()
    {
    }
}