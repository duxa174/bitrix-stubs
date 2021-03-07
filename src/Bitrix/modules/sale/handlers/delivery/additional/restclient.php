<?php

namespace Sale\Handlers\Delivery\Additional;

/**
 * Class RestClient
 * Allows exchanging information with server via rest
 * Caches some requests if it possible
 * @package Sale\Handlers\Delivery\Additional
 */
class RestClient extends \Bitrix\Sale\Services\Base\RestClient
{
    const WRONG_LICENSE_OPTION = 'handlers_dlv_add_rest_wrong_license';
    /**
     * @return \Bitrix\Sale\Result
     */
    public function getDeliveryList()
    {
    }
    /**
     * @param string $serviceType
     * @return \Bitrix\Sale\Result
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getDeliveryProfilesList($serviceType)
    {
    }
    /**
     * @param string $serviceType
     * @param string $profileType
     * @return \Bitrix\Sale\Result
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getDeliveryProfileFields($serviceType, $profileType)
    {
    }
    /**
     * @param string $serviceType
     * @return \Bitrix\Sale\Result
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getDeliveryFields($serviceType)
    {
    }
    /**
     * @param string $serviceType
     * @param string $profileType
     * @param array $serviceParams
     * @param array $profileParams
     * @param Shipment $shipment
     * @return CalculationResult
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getDeliveryPrice($serviceType, $profileType, array $serviceParams, array $profileParams, \Bitrix\Sale\Shipment $shipment)
    {
    }
    public function getProfileConfig($serviceType, $profileType)
    {
    }
    public function getDeliveryExtraServices($serviceType)
    {
    }
    public function getProfileExtraServices($serviceType, $profileType, array $profileParams)
    {
    }
    public function getTrackingStatuses($serviceType, array $serviceParams, array $trackingNumbers = array())
    {
    }
    protected function setCacheItem($result, $cacheType, array $cacheIds)
    {
    }
    protected function getItem($callMethod, $cacheType, array $callParams = array(), array $cacheIds = array())
    {
    }
    private function processActions(array $actions)
    {
    }
}