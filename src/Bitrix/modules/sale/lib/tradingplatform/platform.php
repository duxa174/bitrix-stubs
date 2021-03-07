<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class Platform
 * Base class for trading platforms.
 * @package Bitrix\Sale\TradingPlatform
 */
abstract class Platform
{
    const LINK_TYPE_PUBLIC_DETAIL_ORDER = 'PUBLIC_DETAIL_ORDER';
    protected $logger;
    protected $logLevel = \Bitrix\Sale\TradingPlatform\Logger::LOG_LEVEL_ERROR;
    protected $code;
    protected $isActive = false;
    protected $settings = array();
    protected $isInstalled = false;
    protected $isNeedCatalogSectionsTab = false;
    protected $id;
    protected $fields = [];
    protected static $instances = array();
    const TRADING_PLATFORM_CODE = "";
    /**
     * Constructor
     * @param $code
     */
    protected function __construct($code)
    {
    }
    protected function __clone()
    {
    }
    /**
     * @param $code
     * @return \Bitrix\Sale\TradingPlatform\Platform
     * @throws ArgumentNullException
     */
    public static function getInstanceByCode($code)
    {
    }
    /**
     * @return mixed Id of the current trading platform.
     */
    public function getId()
    {
    }
    /**
     * @param int $level The level of event.
     * @param string $type Type of event.
     * @param string $itemId Item idenifyer.
     * @param string $description Description of event.
     * @return bool Success or not.
     */
    public function addLogRecord($level, $type, $itemId, $description)
    {
    }
    public function getField($fieldName)
    {
    }
    public function getRealName()
    {
    }
    /**
     * @return bool Is the platfor active?.
     */
    public function isActive()
    {
    }
    /**
     * Sets the platform active.
     * @return bool
     */
    public function setActive()
    {
    }
    /**
     * Sets  the platform inactive.
     * @return bool
     */
    public function unsetActive()
    {
    }
    protected static function isActiveItemsExist()
    {
    }
    public static function setShipmentTableOnAfterUpdateEvent()
    {
    }
    protected static function unSetShipmentTableOnAfterUpdateEvent()
    {
    }
    /**
     * Shows is another platforms using the iblock section edit page, "trading platforms" tab.
     * @return bool
     */
    protected function isSomebodyUseCatalogSectionsTab()
    {
    }
    protected function setCatalogSectionsTabEvent()
    {
    }
    protected function unSetCatalogSectionsTabEvent()
    {
    }
    /**
     * @return array Platform settings.
     */
    public function getSettings()
    {
    }
    /**
     * @param array $settings Platform settings.
     * @return bool Is success?.
     */
    public function saveSettings(array $settings)
    {
    }
    public function resetSettings($siteId)
    {
    }
    /**
     * @return bool Is platfom installed?.
     */
    public function isInstalled()
    {
    }
    /**
     * Installs platform
     * @return int Platform Id.
     */
    public function install()
    {
    }
    /**
     * @return bool Is deletion successful?.
     */
    public function uninstall()
    {
    }
    /**
     * @return string Platform code.
     */
    public function getCode()
    {
    }
    public static function onAfterUpdateShipment(\Bitrix\Main\Event $event, array $additional)
    {
    }
    /**
     * @return array
     */
    public function getInfo()
    {
    }
    /**
     * @param $type
     * @param Sale\Order $order
     * @return string
     */
    public function getExternalLink($type, \Bitrix\Sale\Order $order)
    {
    }
}