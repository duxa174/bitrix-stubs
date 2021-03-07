<?php

namespace Sale\Handlers\Delivery;

/**
 * Class SpsrTracking
 * @package \Sale\Handlers\Delivery;
 */
class SpsrTracking extends \Bitrix\Sale\Delivery\Tracking\Base
{
    /** @var  \Sale\Handlers\Delivery\SpsrHandler */
    protected $deliveryService;
    /**
     * @return string
     */
    public function getClassTitle()
    {
    }
    /**
     * @return string
     */
    public function getClassDescription()
    {
    }
    /**
     * @param array $shipmentData
     * @return StatusResult.
     */
    public function getStatusShipment($shipmentData)
    {
    }
    /**
     * @param int $orderId
     * @param int $shipmentId
     * @return \Bitrix\Sale\Internals\CollectableEntity|bool|null
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private function getShipment($orderId, $shipmentId)
    {
    }
    /**
     * @param array $shipmentsData
     * @return Result
     */
    public function getStatusesShipment(array $shipmentsData)
    {
    }
    public function requestStatuses($sid, $icn, $trackingNumbers)
    {
    }
    protected static function translateStatus($externalStatus)
    {
    }
    protected static function translateDate($externalDate)
    {
    }
    /**
     * @return array
     */
    public function getParamsStructure()
    {
    }
    protected static function utfDecode($str)
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