<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchOrderAdd
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Add shipment to the batch
 * https://otpravka.pochta.ru/specification#/batches-add_orders_to_batch
 */
class BatchOrderAdd extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/batch/{name}/shipment";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_PUT;
    protected $name = '';
    protected $internalRequestId = 0;
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
    /**
     * @param int[] $shipmentIds
     * @param array $additional
     * @return Requests\Result
     */
    public function process(array $shipmentIds, array $additional = array())
    {
    }
}