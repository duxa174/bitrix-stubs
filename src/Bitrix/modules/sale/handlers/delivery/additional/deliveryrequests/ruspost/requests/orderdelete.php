<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class OrderDelete
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Deletes order
 * https://otpravka.pochta.ru/specification#/orders-delete_new_order
 */
class OrderDelete extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/shipment";
    protected $type = 'DELETE';
    protected $idsMap = array();
    // array('internalId' => 'externalId', ....)
    /**
     * @param array $rawData
     * @param array $requestData
     * @return Requests\Result
     */
    protected function convertResponse($rawData, $requestData)
    {
    }
    /**
     * @param int[] $shipmentIds
     * @param array $additional
     * @return Requests\Result
     */
    public function createBody(array $shipmentIds, array $additional = array())
    {
    }
}