<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class Configurable
 * Simple class for delivery service.
 * Old configurable type converted to this type.
 * @package Bitrix\Sale\Delivery\Services
 */
class Configurable extends \Bitrix\Sale\Delivery\Services\Base
{
    protected static $isCalculatePriceImmediately = true;
    protected static $whetherAdminExtraServicesShow = true;
    /**
     * @param array $initParams Initial data params from table record.
     * @throws \Bitrix\Main\ArgumentNullException
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
     * @return string Period text.
     */
    protected function getPeriodText()
    {
    }
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
    public static function getAdminFieldsList()
    {
    }
    public function prepareFieldsForSaving(array $fields)
    {
    }
    public static function onAfterAdd($serviceId, array $fields = array())
    {
    }
    public function isCalculatePriceImmediately()
    {
    }
    public static function whetherAdminExtraServicesShow()
    {
    }
    public static function isHandlerCompatible()
    {
    }
}