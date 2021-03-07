<?php

class CBitrixCloudCDN
{
    /**
     *
     * @var CBitrixCloudCDNConfig $config
     *
     */
    private static $config = \null;
    private static $proto = "";
    private static $ajax = \false;
    private static $domain_changed = \false;
    /**
     *
     * @return bool
     *
     */
    public static function IsActive()
    {
    }
    /**
     *
     * @return void
     * @throws CBitrixCloudException
     */
    private static function stop()
    {
    }
    /**
     *
     * @param bool $bActive
     * @param bool $force
     * @return bool
     *
     */
    public static function SetActive($bActive, $force = \false)
    {
    }
    /**
     *
     * @return bool
     *
     */
    private static function updateConfig()
    {
    }
    /**
     *
     * @param string &$content
     * @return void
     *
     */
    public static function OnEndBufferContent(&$content)
    {
    }
    /**
     *
     * @return void
     *
     */
    public static function domainChanged()
    {
    }
    /**
     *
     * @param string $str
     * @return string
     *
     */
    private static function _preg_quote($str)
    {
    }
    /**
     *
     * @param array[int]string $match
     * @return string
     *
     */
    private static function _filter($match)
    {
    }
    /**
     * Shows information about CDN free space in Admin's informer popup
     *
     * @return void
     */
    public static function OnAdminInformerInsertItems()
    {
    }
}