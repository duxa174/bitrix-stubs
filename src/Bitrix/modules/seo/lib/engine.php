<?php

namespace Bitrix\Seo;

class Engine
{
    const HTTP_STATUS_OK = 200;
    const HTTP_STATUS_CREATED = 201;
    const HTTP_STATUS_NO_CONTENT = 204;
    const HTTP_STATUS_AUTHORIZATION = 401;
    protected $engineId = 'unknown engine';
    protected $engine = null;
    protected $engineSettings = array();
    protected $authInterface = null;
    public function __construct()
    {
    }
    public function getId()
    {
    }
    public function getCode()
    {
    }
    public function getSettings()
    {
    }
    public function getClientId()
    {
    }
    public function getClientSecret()
    {
    }
    public function getAuthSettings()
    {
    }
    public function clearAuthSettings()
    {
    }
    protected function saveSettings()
    {
    }
    protected static function getEngine($engineId)
    {
    }
}