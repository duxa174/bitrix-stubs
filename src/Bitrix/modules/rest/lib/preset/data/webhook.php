<?php

namespace Bitrix\Rest\Preset\Data;

/**
 * Class Webhook
 * @package Bitrix\Rest\Preset\Data
 */
class Webhook
{
    private const CACHE_TIME = 86400;
    private const CACHE_DIR = '/rest/integration/data/webhook/';
    /**
     * @return array
     */
    public static function getList() : array
    {
    }
}