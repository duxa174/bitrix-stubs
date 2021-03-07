<?php

namespace Bitrix\Rest\Preset\Data;

/**
 * Class Rest
 * @package Bitrix\Rest\Preset\Data
 */
class Rest
{
    public const SCOPE = 'SCOPE';
    public const METHOD = 'METHOD';
    public const PLACEMENT = 'PLACEMENT';
    public const EVENT = 'EVENT';
    private const CACHE_TIME = 86400;
    private const CACHE_DIR = '/rest/integration/data/rest/';
    /**
     * @return array
     */
    public static function getAllBasicDescription() : array
    {
    }
    /**
     * @param $scopeList
     *
     * @return array
     */
    public static function getAccessPlacement($scopeList) : array
    {
    }
    /**
     * @return array
     */
    public static function getBaseMethod() : array
    {
    }
    /**
     * @return array
     */
    public static function getScope() : array
    {
    }
}