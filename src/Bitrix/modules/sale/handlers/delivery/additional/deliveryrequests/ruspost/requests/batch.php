<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class Batch
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Searches batch by name
 * https://otpravka.pochta.ru/specification#/batches-find_batch
 */
class Batch extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/batch/{name}";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_GET;
    protected $internalId = 0;
    protected $externalId = '';
    /**
     * @param array $rawData
     * @param array $requestData
     * @return Requests\RequestResult
     */
    protected function convertResponse($rawData, $requestData)
    {
    }
    /**
     * @param int[] $requestIds
     * @param array $additional
     * @return Requests\Result
     */
    public function process(array $requestIds, array $additional = array())
    {
    }
}