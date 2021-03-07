<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost;

class Handler extends \Bitrix\Sale\Delivery\Requests\HandlerBase
{
    /** @var HttpClient */
    protected $httpClient = null;
    /**
     * Handler constructor.
     * @param Services\Base $deliveryService
     */
    public function __construct(\Bitrix\Sale\Delivery\Services\Base $deliveryService)
    {
    }
    /**
     * @return null
     */
    protected function getHttpClient()
    {
    }
    /**
     * @param HttpClient $httpClient
     */
    public function setHttpClient(\Bitrix\Main\Web\HttpClient $httpClient) : void
    {
    }
    /**
     * Register local classes.
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function registerLocalClasses()
    {
    }
    /**
     * @param int $requestId
     * @return array
     */
    public function getActions($requestId)
    {
    }
    /**
     * @param int $requestId
     * @param string $actionType
     * @param array $additional
     * @return Requests\Result
     */
    public function executeAction($requestId, $actionType, array $additional)
    {
    }
    /**
     * @param Shipment $shipment
     * @return array
     */
    public function getShipmentActions(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param int $requestId
     * @param int $shipmentId
     * @param string $actionType
     * @param array $additional
     * @return Requests\Result
     */
    public function executeShipmentAction($requestId, $shipmentId, $actionType, array $additional)
    {
    }
    /**
     * @param string $requestType
     * @param array $requestData
     * @return Requests\Result
     */
    public function send($requestType, array $requestData)
    {
    }
    /**
     * Creates delivery request
     * @param int[] $shipmentIds
     * @param array $additional
     * @return Requests\Result
     */
    public function create(array $shipmentIds, array $additional = array())
    {
    }
    /**
     * @param int $requestId
     * @param \int[] $shipmentIds
     * @return Requests\Result
     */
    public function addShipments($requestId, $shipmentIds)
    {
    }
    /**
     * @param int $requestId
     * @return Requests\Result
     */
    public function delete($requestId)
    {
    }
    /**
     * @param int $formFieldsType
     * @param int[] $entityIds
     * @param array $additional
     * @return array
     */
    public function getFormFields($formFieldsType, array $entityIds, array $additional = array())
    {
    }
    protected function getDeliveryServiceOps()
    {
    }
    /**
     * @param string $type
     * @return null|RequestBase
     */
    public function getRequestObject($type)
    {
    }
    /**
     * @param string $field
     * @return mixed
     */
    protected function getContentFieldName($field)
    {
    }
    /**
     * @param string $field
     * @param mixed $value
     * @return string
     */
    protected function getContentFieldValue($field, $value)
    {
    }
    /**
     * @param int $requestId
     * @return Requests\Result
     */
    public function getContent($requestId)
    {
    }
    /**
     * @param int $requestId
     * @param array $shipmentIds
     * @return Requests\Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public function deleteShipments($requestId, array $shipmentIds = array())
    {
    }
    /**
     * Update shipment from delivery request
     * @param int $requestId
     * @param int[] $shipmentIds
     * @return Requests\Result
     */
    public function updateShipments($requestId, array $shipmentIds = array())
    {
    }
    /**
     * @param string $field
     * @return mixed
     */
    protected function getShipmentContentFieldName($field)
    {
    }
    /**
     * @param string $field
     * @param mixed $value
     * @return string
     */
    protected function getShipmentContentFieldValue($field, $value)
    {
    }
    /**
     * @param int $requestId
     * @param int $shipmentId
     * @return Requests\Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getShipmentContent($requestId, $shipmentId)
    {
    }
}