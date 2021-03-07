<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BaseFile
 * Base class for downloading requests.
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 */
abstract class BaseFile extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    /**
     * @param int[] $shipmentIds
     * @param array $additional
     * @return Requests\ResultFile
     */
    public function process(array $shipmentIds, array $additional = array())
    {
    }
    /**
     * @param array $requestData
     * @param array $additional
     * @return Requests\ResultFile
     */
    public function send(array $requestData = array(), array $additional = array())
    {
    }
}