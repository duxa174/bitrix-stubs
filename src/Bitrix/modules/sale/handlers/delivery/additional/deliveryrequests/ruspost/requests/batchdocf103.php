<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchDocF103
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Generates printing form F103
 * https://otpravka.pochta.ru/specification#/documents-create_f103
 */
class BatchDocF103 extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\BaseFile
{
    protected $path = "/1.0/forms/{name}/f103pdf";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_GET;
    /**
     * @param int[] $requestIds
     * @param array $additional
     * @return Requests\Result|Requests\ResultFile
     * @throws Main\ArgumentException
     */
    public function process(array $requestIds, array $additional = array())
    {
    }
}