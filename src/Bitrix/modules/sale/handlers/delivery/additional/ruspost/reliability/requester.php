<?php

namespace Sale\Handlers\Delivery\Additional\RusPost\Reliability;

/**
 * Class Requester
 * @package Sale\Handlers\Delivery\Additional\RusPost\Reliability
 * @internal
 */
class Requester
{
    private $deliveryRequestsHandler = null;
    /**
     * Requester constructor.
     * @param Additional\DeliveryRequests\RusPost\Handler $deliveryRequestsHandler
     */
    public function __construct(\Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Handler $deliveryRequestsHandler)
    {
    }
    /**
     * @param ReliabilityCollection $collection
     * @return bool|ReliabilityCollection
     */
    public function request(\Sale\Handlers\Delivery\Additional\RusPost\Reliability\ReliabilityCollection $collection)
    {
    }
    private function obtainDataFromRequestResult(\Bitrix\Sale\Delivery\Requests\Result $result, \Sale\Handlers\Delivery\Additional\RusPost\Reliability\ReliabilityCollection $collection)
    {
    }
    /**
     * @param ReliabilityCollection $collection
     * @return array
     */
    private function createRequestData(\Sale\Handlers\Delivery\Additional\RusPost\Reliability\ReliabilityCollection $collection)
    {
    }
}