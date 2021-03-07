<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class ShipmentResult
 * @package Bitrix\Sale\Delivery\Requests
 */
class ShipmentResult extends \Bitrix\Sale\Delivery\Requests\Result
{
    protected $externalId = '';
    protected $internalId = 0;
    protected $trackingNumber = '';
    protected $deliveryDocNum = '';
    protected $deliveryDocDate = '';
    /**
     * ShipmentResult constructor.
     * @param int $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId = '')
    {
    }
    /**
     * @return string
     */
    public function getDeliveryDocNum()
    {
    }
    /**
     * @param string $deliveryDocNum
     */
    public function setDeliveryDocNum($deliveryDocNum)
    {
    }
    /**
     * @return string
     */
    public function getDeliveryDocDate()
    {
    }
    /**
     * @param string $deliveryDocDate
     */
    public function setDeliveryDocDate($deliveryDocDate)
    {
    }
    /**
     * @return string
     */
    public function getTrackingNumber()
    {
    }
    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
    }
    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
    }
    /**
     * @return int
     */
    public function getInternalId()
    {
    }
    /**
     * @param int $internalId
     */
    public function setInternalId($internalId)
    {
    }
}