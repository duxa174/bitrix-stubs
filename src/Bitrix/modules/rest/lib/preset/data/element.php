<?php

namespace Bitrix\Rest\Preset\Data;

/**
 * Class Element
 * @package Bitrix\Rest\Preset\Data
 */
class Element
{
    private const CACHE_TIME = 86400;
    private const CACHE_DIR = '/rest/integration/element/';
    public const DEFAULT_APPLICATION = 'application';
    public const DEFAULT_IN_WEBHOOK = 'in-hook';
    public const DEFAULT_OUT_WEBHOOK = 'out-hook';
    /**
     * @param $code string
     *
     * @return array
     * @throws ArgumentException
     */
    public static function get($code) : array
    {
    }
    /**
     * @param $sectionCode string
     *
     * @return array
     * @throws ArgumentException
     */
    public static function getList($sectionCode) : array
    {
    }
}