<?php

namespace Sale\Handlers\Delivery;

/*
 * @package Bitrix\Sale\Delivery\Services
 */
class SimpleHandler extends \Bitrix\Sale\Delivery\Services\Base
{
    protected static $isCalculatePriceImmediately = true;
    protected static $whetherAdminExtraServicesShow = true;
    /**
     * @param array $initParams
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function __construct(array $initParams)
    {
    }
    /**
     * @return string Class title.
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return string Class, service description.
     */
    public static function getClassDescription()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    protected function getLocationGroups()
    {
    }
    /**
     * @param \Bitrix\Sale\Shipment|null $shipment
     * @return CalculationResult
     * @throws \Bitrix\Main\ArgumentException
     */
    protected function calculateConcrete(\Bitrix\Sale\Shipment $shipment = null)
    {
    }
    /**
     * @return array
     * @throws \Exception
     */
    protected function getConfigStructure()
    {
    }
    public function isCalculatePriceImmediately()
    {
    }
    public static function whetherAdminExtraServicesShow()
    {
    }
}