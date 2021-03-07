<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class OrderCreate
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Creates shipment
 * https://otpravka.pochta.ru/specification#/orders-creating_order
 */
class OrderCreate extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/user/backlog";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_PUT;
    /** @var AdditionalHandler */
    protected $deliveryService = null;
    /**
     * @param array $rawData
     * @param array $requestData
     * @return Requests\Result
     */
    protected function convertResponse($rawData, $requestData)
    {
    }
    /**
     * @param int[] $successIds
     * @param int[] $errorPositions
     * @param array $requestData
     * @return array
     */
    protected function getShipmentsMap($successIds, $errorPositions, $requestData)
    {
    }
    /**
     * @param array $addresses
     * @return Requests\Result
     */
    protected function normalizeAddresses(array $addresses)
    {
    }
    /**
     * @param array $fios
     * @return Requests\Result
     */
    protected function normalizeFios(array $fios)
    {
    }
    /**
     * @param array $address
     * @return bool
     */
    protected function isAddressGood(array $address)
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
}