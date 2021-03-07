<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchOrder
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Searching for shipment by id
 * https://otpravka.pochta.ru/specification#/batches-find_order_by_id
 */
class BatchOrder extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/shipment/{id}";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_GET;
    /**
     * @param int[] $shipmentIds
     * @param array $additional
     * @return Requests\Result
     */
    public function process(array $shipmentIds, array $additional = array())
    {
    }
}