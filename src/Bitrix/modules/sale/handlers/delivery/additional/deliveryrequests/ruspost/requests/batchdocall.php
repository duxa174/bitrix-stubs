<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class BatchDocAll
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Generates and receives full set of documents
 * https://otpravka.pochta.ru/specification#/documents-create_all_docs
 */
class BatchDocAll extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\BaseFile
{
    protected $path = "/1.0/forms/{name}/zip-all";
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