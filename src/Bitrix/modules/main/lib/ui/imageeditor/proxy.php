<?php

namespace Bitrix\Main\UI\ImageEditor;

/**
 * Class Proxy
 * @package Bitrix\Main\UI\ImageEditor
 */
class Proxy
{
    /** @var Uri */
    protected $uri;
    /** @var array<string> */
    protected $allowedHosts = [];
    /**
     * Proxy constructor.
     * @param string $url
     * @param array<string> $allowedHosts
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct($url, $allowedHosts = [])
    {
    }
    /**
     * @return \Bitrix\Main\HttpResponse
     * @throws \Bitrix\Main\SystemException
     */
    protected static function getResponse()
    {
    }
    /**
     * @return bool
     */
    protected static function isAuthorized()
    {
    }
    /**
     * Gets current http host
     * @return null|string
     * @throws \Bitrix\Main\SystemException
     */
    protected function getCurrentHttpHost()
    {
    }
    /**
     * Gets allowed hosts
     * @return array<string>
     * @throws \Bitrix\Main\SystemException
     */
    protected function getAllowedHosts()
    {
    }
    /**
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function getUserAllowedHosts()
    {
    }
    /**
     * Checks that this host is allowed
     * @param string $host
     * @return bool
     * @throws \Bitrix\Main\SystemException
     */
    protected function isAllowedHost($host)
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function isEnabledForAll()
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected static function isEnabledForWhiteList()
    {
    }
    /**
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected static function getEnabledOption()
    {
    }
    /**
     * @param $host
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\SystemException
     */
    protected function isEnabledForHost($host)
    {
    }
    public function output()
    {
    }
}