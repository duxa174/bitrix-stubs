<?php

namespace Bitrix\Rest\Preset\Data;

/**
 * Class Section
 * @package Bitrix\Rest\Preset\Data
 */
class Section
{
    private const CACHE_TIME = 86400;
    private const CACHE_DIR = '/rest/integration/section/';
    /**
     * @return array
     * @throws ArgumentException
     */
    public static function get() : array
    {
    }
}