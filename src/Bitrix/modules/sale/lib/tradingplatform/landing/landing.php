<?php

namespace Bitrix\Sale\TradingPlatform\Landing;

/**
 * Class Landing
 * @package Bitrix\Sale\TradingPlatform\Landing
 */
class Landing extends \Bitrix\Sale\TradingPlatform\Platform
{
    const TRADING_PLATFORM_CODE = 'landing';
    const CODE_DELIMITER = '_';
    protected $site = [];
    /**
     * @return bool|int
     * @throws \Exception
     */
    public function install()
    {
    }
    /**
     * @return string
     */
    protected static function generateXmlId()
    {
    }
    /**
     * @return int
     */
    protected function getSiteId()
    {
    }
    /**
     * @return void
     */
    public static function setShipmentTableOnAfterUpdateEvent()
    {
    }
    /**
     * @return void
     */
    protected static function unSetShipmentTableOnAfterUpdateEvent()
    {
    }
    /**
     * @return void
     */
    protected function setCatalogSectionsTabEvent()
    {
    }
    /**
     * @return void
     */
    protected function unSetCatalogSectionsTabEvent()
    {
    }
    /**
     * @param Event $event
     * @throws \Bitrix\Main\ArgumentNullException
     * @return void
     */
    public static function onLandingSiteAdd(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Event $event
     * @throws ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     * @return void
     */
    public static function onLandingSiteDelete(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Event $event
     * @throws \Bitrix\Main\ArgumentNullException
     * @return void
     */
    public static function onLandingBeforeSiteRecycle(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param $id
     * @return string
     */
    public static function getCodeBySiteId($id)
    {
    }
    /**
     * @return array|false
     * @throws \Bitrix\Main\LoaderException
     */
    public function getInfo()
    {
    }
    /**
     * @param $type
     * @param Sale\Order $order
     * @return string
     * @throws ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    public function getExternalLink($type, \Bitrix\Sale\Order $order)
    {
    }
    /**
     * @return mixed
     * @throws \Bitrix\Main\LoaderException
     */
    public function getRealName()
    {
    }
}