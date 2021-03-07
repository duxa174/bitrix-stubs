<?php

namespace Bitrix\Main\Web;

class IpAddress
{
    protected $ip;
    /**
     * @param string $ip
     */
    public function __construct($ip)
    {
    }
    /**
     * Creates the object by a host name.
     *
     * @param string $name
     * @return static
     */
    public static function createByName($name)
    {
    }
    /**
     * Creates the object by an Uri.
     *
     * @param Uri $uri
     * @return static
     */
    public static function createByUri(\Bitrix\Main\Web\Uri $uri)
    {
    }
    /**
     * Returns address's value.
     *
     * @return string
     */
    public function get()
    {
    }
    /**
     * Retuns true if the address is incorrect or private.
     *
     * @return bool
     */
    public function isPrivate()
    {
    }
    /**
     * Check IPv4 address is within an IP range
     *
     * @param string $cidr a valid IPv4 subnet[/mask]
     * @return bool
     */
    public function matchRange(string $cidr) : bool
    {
    }
}