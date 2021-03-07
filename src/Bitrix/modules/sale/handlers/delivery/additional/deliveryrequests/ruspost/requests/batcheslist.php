<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchesList
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Searching of all batches
 * https://otpravka.pochta.ru/specification#/batches-search_all_batches
 */
class BatchesList extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/batch";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_GET;
    /**
     * @param array $rawData
     * @param array $requestData
     * @return Requests\Result
     * @throws \Bitrix\Main\ArgumentException
     */
    protected function convertResponse($rawData, $requestData)
    {
    }
}