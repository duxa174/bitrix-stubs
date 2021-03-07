<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchDateUpdate
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Changes sending date
 * https://otpravka.pochta.ru/specification#/batches-sending_date
 */
class BatchDateUpdate extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/batch/{name}/sending/{year}/{month}/{dayOfMonth}";
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
     */
    public function process(array $requestIds, array $additional = array())
    {
    }
    /**
     * @param int[] $requestIds
     * @return array
     */
    public function getFormFields(array $requestIds)
    {
    }
}