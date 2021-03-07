<?php

namespace Bitrix\Landing;

class Domain extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Bitrix24 domains.
     */
    const B24_DOMAINS = ['bitrix24.site', 'bitrix24.shop', 'bitrix24site.by', 'bitrix24shop.by', 'bitrix24site.ua'];
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'DomainTable';
    /**
     * Gets domain name.
     * @return string.
     */
    protected static function getDomainName()
    {
    }
    /**
     * Gets Bitrix24 sub domain name.
     * @param string $domainName Full domain name.
     * @return string Null, if $domainName is't sub domain of B24.
     */
    public static function getBitrix24Subdomain($domainName)
    {
    }
    /**
     * Create current domain and return new id..
     * @return int
     */
    public static function createDefault()
    {
    }
    /**
     * Get current domain id.
     * @return int
     */
    public static function getCurrentId()
    {
    }
    /**
     * Get available protocol list.
     * @return array
     */
    public static function getProtocolList()
    {
    }
    /**
     * Gets current host url.
     * @return string
     */
    public static function getHostUrl()
    {
    }
}