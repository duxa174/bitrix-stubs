<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchOrders
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Receives data about shipments from the batch
 * https://otpravka.pochta.ru/specification#/batches-get_info_about_orders_in_batch
 */
class BatchOrders extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/batch/{name}/shipment";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_GET;
    /**
     * @param array $requestData
     * @param array $additional
     * @return Requests\Result
     */
    public function send(array $requestData = array(), array $additional = array())
    {
    }
}