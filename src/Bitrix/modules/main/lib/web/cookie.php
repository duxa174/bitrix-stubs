<?php

namespace Bitrix\Main\Web;

class Cookie
{
    const SPREAD_SITES = 1;
    const SPREAD_DOMAIN = 2;
    protected $domain;
    protected $expires;
    protected $httpOnly = true;
    protected $spread;
    protected $name;
    protected $originalName;
    protected $path = '/';
    protected $secure = false;
    protected $value;
    /**
     * Cookie constructor.
     * @param string $name The cooke name
     * @param string|null $value The cooke value
     * @param int $expires Timestamp
     * @param bool $addPrefix Name prefix, usually BITRIX_SM_
     */
    public function __construct($name, $value, $expires = null, $addPrefix = true)
    {
    }
    protected static function generateCookieName($name)
    {
    }
    protected function setDefaultsFromConfig()
    {
    }
    public function setDomain($domain)
    {
    }
    public function getDomain()
    {
    }
    public function setExpires($expires)
    {
    }
    public function getExpires()
    {
    }
    public function setHttpOnly($httpOnly)
    {
    }
    public function getHttpOnly()
    {
    }
    public function setName($name)
    {
    }
    public function getOriginalName() : string
    {
    }
    public function getName()
    {
    }
    public function setPath($path)
    {
    }
    public function getPath()
    {
    }
    public function setSecure($secure)
    {
    }
    public function getSecure()
    {
    }
    public function setValue($value)
    {
    }
    public function getValue()
    {
    }
    public function setSpread($spread)
    {
    }
    public function getSpread()
    {
    }
    /**
     * Returns the domain from the sites settings to use with cookies.
     *
     * @return string
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getCookieDomain()
    {
    }
}