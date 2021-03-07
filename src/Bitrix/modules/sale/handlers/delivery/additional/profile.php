<?php

namespace Sale\Handlers\Delivery;

class AdditionalProfile extends \Bitrix\Sale\Delivery\Services\Base
{
    /** @var AdditionalHandler Parent service. */
    protected $additionalHandler = null;
    /** @var string Service type */
    protected $profileType = "";
    protected $trackingTitle = "";
    protected $trackingDescription = "";
    protected static $whetherAdminExtraServicesShow = true;
    /** @var bool This handler is profile */
    protected static $isProfile = true;
    /**
     * @param array $initParams
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function __construct(array $initParams)
    {
    }
    protected function isRusPost()
    {
    }
    /**
     * @return array
     */
    protected function getProfileParams()
    {
    }
    /**
     * @return string
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return string
     */
    public static function getClassDescription()
    {
    }
    /**
     * Defines inheritance behavior.
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    protected function inheritParams()
    {
    }
    /**
     * Calculates price
     * @param Shipment $shipment
     * @return CalculationResult
     * @throws SystemException
     * todo: Send default values if some params added to config, but not saved yet.
     */
    protected function calculateConcrete(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param array $config
     * @return array
     */
    public static function extractConfigValues(array $config)
    {
    }
    /**
     * @return bool
     */
    public function isCalculatePriceImmediately()
    {
    }
    /**
     * @return array Handler's configuration
     */
    protected function getConfigStructure()
    {
    }
    /**
     * @return \Bitrix\Sale\Delivery\Services\Base|\Sale\Handlers\Delivery\SpsrHandler Parent sevice.
     */
    public function getParentService()
    {
    }
    /**
     * @param Shipment $shipment
     * @return bool
     */
    public function isCompatible(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * Install handler
     */
    public static function install()
    {
    }
    /**
     * Uninstall
     */
    public static function unInstall()
    {
    }
    /**
     * Is handler installed
     */
    public static function isInstalled()
    {
    }
    /**
     * @return bool
     */
    public static function isProfile()
    {
    }
    /**
     * @return bool
     */
    public static function whetherAdminExtraServicesShow()
    {
    }
    /**
     * @return array
     */
    public function getEmbeddedExtraServicesList()
    {
    }
    public function getTrackingClassTitle()
    {
    }
    public function getTrackingClassDescription()
    {
    }
    /**
     * @return bool
     */
    public function isTrackingInherited()
    {
    }
    public function execAdminAction()
    {
    }
}