<?php

namespace Sale\Handlers\Delivery;

/**
 * Class AdditionalTracking
 * @package \Sale\Handlers\Delivery;
 */
class AdditionalTracking extends \Bitrix\Sale\Delivery\Tracking\Base
{
    /** @var  \Sale\Handlers\Delivery\AdditionalHandler */
    protected $deliveryService;
    protected $classTitle = '';
    protected $classDescription = '';
    public function __construct(array $params, \Bitrix\Sale\Delivery\Services\Base $deliveryService)
    {
    }
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
     * @param $trackingNumber
     * @return StatusResult.
     */
    public function getStatus($trackingNumber)
    {
    }
    /**
     * @param array $trackingNumbers
     * @return Result
     */
    public function getStatuses(array $trackingNumbers)
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
    /**
     * @param string $trackingNumber
     * @return string Url were we can see tracking information
     */
    public function getTrackingUrl($trackingNumber = '')
    {
    }
}