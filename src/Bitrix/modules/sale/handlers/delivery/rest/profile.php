<?php

namespace Sale\Handlers\Delivery;

class RestProfile extends \Bitrix\Sale\Delivery\Services\Base
{
    /** @var RestHandler Parent service. */
    protected $restHandler = null;
    /** @var string Service type */
    protected $profileType = '';
    protected static $whetherAdminExtraServicesShow = true;
    /** @var bool This handler is profile */
    protected static $isProfile = true;
    /**
     * @param array $initParams
     * @throws ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
     */
    public function __construct(array $initParams)
    {
    }
    /**
     * @return string
     */
    public static function getClassTitle() : string
    {
    }
    /**
     * @return string
     */
    public static function getClassDescription() : string
    {
    }
    /**
     * @param Sale\Shipment $shipment
     * @return CalculationResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function calculateConcrete(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Sale\Delivery\CalculationResult
    {
    }
    /**
     * @param Sale\Shipment $shipment
     * @return array
     * @throws ArgumentNullException
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getRequestParams(\Bitrix\Sale\Shipment $shipment) : array
    {
    }
    /**
     * @param string $url
     * @param array $params
     * @return Sale\Result
     */
    private function sendRequest(string $url, array $params) : \Bitrix\Sale\Result
    {
    }
    /**
     * @return mixed|string
     */
    private function getProfileType()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getProfileParams()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getHandlerParams()
    {
    }
    /**
     * @return bool
     */
    public function isCalculatePriceImmediately() : bool
    {
    }
    /**
     * @return array Handler's configuration
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function getConfigStructure() : array
    {
    }
    public function getParentService()
    {
    }
    /**
     * @return bool
     */
    public static function isProfile() : bool
    {
    }
    /**
     * @return bool
     */
    public static function whetherAdminExtraServicesShow() : bool
    {
    }
}