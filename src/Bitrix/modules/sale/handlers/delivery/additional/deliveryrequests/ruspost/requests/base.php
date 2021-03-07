<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class Base
 * Base class for requests of all types.
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 */
abstract class Base
{
    /** @var HttpClient */
    protected $httpClient = null;
    protected $url = "https://otpravka-api.pochta.ru";
    protected $path = "";
    protected $type = "";
    /** @var AdditionalHandler  */
    protected $deliveryService = null;
    /**
     * Base constructor.
     * @param Delivery\Services\Base $deliveryService
     */
    public function __construct(\Bitrix\Sale\Delivery\Services\Base $deliveryService, \Bitrix\Main\Web\HttpClient $httpClient)
    {
    }
    /**
     * @return string
     */
    protected function getUrl()
    {
    }
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
    public function process(array $shipmentIds, array $additional = array())
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
     * @param array $requestData
     * @param array $additional
     * @return Requests\Result
     */
    public function send(array $requestData = array(), array $additional = array())
    {
    }
    /**
     * @param int[] $entityIds
     * @return array
     */
    public function getFormFields(array $entityIds)
    {
    }
}