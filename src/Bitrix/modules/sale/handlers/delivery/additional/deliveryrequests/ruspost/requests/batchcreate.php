<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchCreate
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Creates batch from shipments
 * https://otpravka.pochta.ru/specification#/batches-create_batch_from_N_orders
 */
class BatchCreate extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/user/shipment";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_POST;
    /** @var AdditionalHandler */
    protected $deliveryService = null;
    protected $shipmentIdsMap = array();
    // array( internalId => externalId, ....)
    /**
     * @param array $rawData
     * @param array $requestData
     * @return Requests\Result
     */
    protected function convertResponse($rawData, $requestData)
    {
    }
    /**
     * @param string $batchName
     * @return Requests\Result
     */
    protected function getBatchOrders($batchName)
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