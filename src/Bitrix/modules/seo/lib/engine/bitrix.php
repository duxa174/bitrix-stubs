<?php

namespace Bitrix\Seo\Engine;

class Bitrix extends \Bitrix\Seo\Engine implements \Bitrix\Seo\IEngine
{
    const ENGINE_ID = 'bitrix';
    protected $engineId = 'bitrix';
    protected $engineRegistered = false;
    const API_URL = SEO_BITRIX_API_URL;
    public function __construct()
    {
    }
    /**
     * Checks if domain is registered.
     *
     * @return bool
     */
    public function isRegistered()
    {
    }
    public function getInterface()
    {
    }
    public function setAuthSettings($settings = null)
    {
    }
}