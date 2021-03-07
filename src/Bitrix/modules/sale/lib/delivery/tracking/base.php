<?php

namespace Bitrix\Sale\Delivery\Tracking;

/**
 * Class Base
 * @package Bitrix\Sale\Delivery\Tracking
 *
 * Base class for shipment tracking services handlers
 */
abstract class Base
{
    /** @var array */
    protected $params;
    /** @var  Services\Base */
    protected $deliveryService;
    /**
     * @param array $params
     * @param Services\Base $deliveryService
     */
    public function __construct(array $params, \Bitrix\Sale\Delivery\Services\Base $deliveryService)
    {
    }
    /**
     * Returns class name for administration interface
     * @return string
     */
    public abstract function getClassTitle();
    /**
     * Returns class description for administration interface
     * @return string
     */
    public abstract function getClassDescription();
    /**
     * @param $trackingNumber
     * @return \Bitrix\Sale\Delivery\Tracking\StatusResult.
     */
    public function getStatus($trackingNumber)
    {
    }
    /**
     * @param array $shipmentData
     * @return StatusResult
     */
    public function getStatusShipment($shipmentData)
    {
    }
    /**
     * @param string[] $trackingNumbers
     * @return \Bitrix\Sale\Result.
     */
    public function getStatuses(array $trackingNumbers)
    {
    }
    /**
     * @param array $shipmentsData
     * @return \Bitrix\Sale\Result
     */
    public function getStatusesShipment(array $shipmentsData)
    {
    }
    /**
     * Returns params structure
     * @return array
     */
    public abstract function getParamsStructure();
    /**
     * @param string $paramKey
     * @param string $inputName
     * @return string Html
     * @throws \Bitrix\Main\SystemException
     */
    public function getEditHtml($paramKey, $inputName)
    {
    }
    /**
     * @param string $trackingNumber
     * @return string Url were we can see tracking information
     */
    public function getTrackingUrl($trackingNumber = '')
    {
    }
}