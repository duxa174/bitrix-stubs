<?php

namespace Sale\Handlers\Delivery;

class SpsrProfile extends \Bitrix\Sale\Delivery\Services\Base
{
    /** @var SpsrHandler Parent service. */
    protected $spsrHandler = null;
    /** @var int Service type */
    protected $serviceType = 0;
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
     */
    protected function calculateConcrete(\Bitrix\Sale\Shipment $shipment)
    {
    }
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
     * @return array
     */
    public function getEmbeddedExtraServicesList()
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
     * @param $profileId
     * @return array
     */
    public static function getProfileES($profileId)
    {
    }
    public static function install()
    {
    }
    public static function unInstall()
    {
    }
    public static function isInstalled()
    {
    }
    public static function isProfile()
    {
    }
    public static function whetherAdminExtraServicesShow()
    {
    }
}