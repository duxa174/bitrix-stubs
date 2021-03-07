<?php

class CBitrixCloudCDNQuota
{
    private $expires = 0;
    private $allowed = 0.0;
    private $traffic = 0.0;
    /**
     *
     * @return float
     *
     */
    public function getAllowedSize()
    {
    }
    /**
     *
     * @return float
     *
     */
    public function getTrafficSize()
    {
    }
    /**
     * Checks if it is time to update quota info
     *
     * @return bool
     *
     */
    public function isExpired()
    {
    }
    /**
     *
     * @param int $expires
     * @return CBitrixCloudCDNQuota
     *
     */
    public function setExpires($expires)
    {
    }
    /**
     *
     * @param float $allowed
     * @return CBitrixCloudCDNQuota
     *
     */
    public function setAllowedSize($allowed)
    {
    }
    /**
     *
     * @param float $traffic
     * @return CBitrixCloudCDNQuota
     *
     */
    public function setTrafficSize($traffic)
    {
    }
    /**
     *
     * @param string $str
     * @return float
     *
     */
    public static function parseSize($str)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudCDNQuota
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @return CBitrixCloudCDNQuota
     *
     */
    public static function fromOption(\CBitrixCloudOption $option)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @return CBitrixCloudCDNQuota
     *
     */
    public function saveOption(\CBitrixCloudOption $option)
    {
    }
}