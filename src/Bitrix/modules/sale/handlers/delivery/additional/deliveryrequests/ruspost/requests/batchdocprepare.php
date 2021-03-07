<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchDocPrepare
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Preparing and sending form 103
 * https://otpravka.pochta.ru/specification#/documents-checkin
 */
class BatchDocPrepare extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/batch/{name}/checkin?sendEmail=true";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_POST;
    /**
     * @param array $rawData
     * @param array $requestData
     * @return Requests\Result
     */
    protected function convertResponse($rawData, $requestData)
    {
    }
    /**
     * @param int[] $requestIds
     * @param array $additional
     * @return Requests\Result
     * @throws Main\ArgumentException
     */
    public function process(array $requestIds, array $additional = array())
    {
    }
}