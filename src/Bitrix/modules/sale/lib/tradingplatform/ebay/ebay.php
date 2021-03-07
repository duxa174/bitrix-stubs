<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

class Ebay extends \Bitrix\Sale\TradingPlatform\Platform
{
    //todo: check if token for sftp is expired
    const TRADING_PLATFORM_CODE = "ebay";
    const API_URL = "https://api.ebay.com/ws/api.dll";
    /**
     * @return Ebay
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getInstance()
    {
    }
    public static function getSftpTokenUrl($accountName)
    {
    }
    public static function getApiTokenUrl()
    {
    }
    protected static function getLicenseHash()
    {
    }
    protected static function getServiceHost()
    {
    }
    /**
     * Sets Ebay active.
     * @return bool
     * @throws \Bitrix\Main\SystemException
     */
    public function setActive()
    {
    }
    /**
     * Sets Ebay inactive.
     * @return bool
     */
    public function unsetActive()
    {
    }
    /**
     * Installs all necessary stuff for Ebay.
     * @return bool
     */
    public function install()
    {
    }
    /**
     * Sends error description to e-mail
     * @param string $type Type of error.
     * @param string $details Error details.
     * @param string $siteId Site id.
     * @return bool
     */
    public function sendErrorMail($type, $details, $siteId)
    {
    }
    /**
     * Log events to system log & sends error to email.
     * @param int $level Log level of event.
     * @param string $type Event type.
     * @param string $itemId Item id.
     * @param string $description Event description.
     * @param string $siteId Site id.
     * @return bool
     */
    public static function log($level, $type, $itemId, $description, $siteId)
    {
    }
    public static function onAfterUpdateShipment(\Bitrix\Main\Event $event, array $additional)
    {
    }
    public static function getApiUrl()
    {
    }
}