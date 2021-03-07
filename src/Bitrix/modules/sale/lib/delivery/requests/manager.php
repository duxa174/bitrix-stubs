<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class Manager
 * @package Bitrix\Sale\Delivery\Requests
 * Manages the lifecycle of delivery requests items
 */
final class Manager
{
    const STATUS_PREPARED = 0;
    const STATUS_SENT = 10;
    const STATUS_PROCESSED = 20;
    const FORM_FIELDS_TYPE_CREATE = 10;
    const FORM_FIELDS_TYPE_ADD = 20;
    const FORM_FIELDS_TYPE_ACTION = 30;
    protected static $isChangedShipmentNeedsMark = true;
    /**
     * @param int $shipmentId
     * @param int $requestId
     * @return Result
     * @throws Main\ArgumentException
     */
    public static function getDeliveryRequestShipmentContent($requestId, $shipmentId)
    {
    }
    /**
     * @param Shipment $shipment
     * @return array Shipment actions
     * @throws Main\ArgumentNullException
     */
    public static function getDeliveryRequestShipmentActions(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param int $requestId
     * @return array Request actions
     * @throws Main\ArgumentNullException
     */
    public static function getDeliveryRequestActions($requestId)
    {
    }
    /**
     * @param int $requestId
     * @return HandlerBase|null  Delivery request handler
     * @throws Main\ArgumentNullException
     */
    protected static function getDeliveryRequestHandlerByRequestId($requestId)
    {
    }
    /**
     * @param int $deliveryId
     * @return HandlerBase|null Delivery request handler
     * @throws Main\ArgumentNullException
     * @throws Main\SystemException
     */
    public static function getDeliveryRequestHandlerByDeliveryId($deliveryId)
    {
    }
    /**
     * @param int $deliveryId
     * @param int[] $shipmentIds
     * @param array $additional Additional info required for creation. Depends on delivery service.
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\SystemException
     * @throws \Exception
     */
    public static function createDeliveryRequest($deliveryId, array $shipmentIds, array $additional = array())
    {
    }
    /**
     * @param ShipmentResult $result
     * @param int $requestId
     * @return ShipmentResult
     */
    protected static function processShipmentResult($result, $requestId = 0)
    {
    }
    /**
     * @param int $deliveryId
     * @param int $formFieldsType FORM_FIELDS_TYPE_ACTION | FORM_FIELDS_TYPE_ADD | FORM_FIELDS_TYPE_CREATE
     * @param int[] $shipmentIds
     * @param array $additional
     * @return array Form fields
     * @throws Main\ArgumentNullException
     */
    public static function getDeliveryRequestFormFields($deliveryId, $formFieldsType, array $shipmentIds, array $additional = array())
    {
    }
    /**
     * @param int $requestId
     * @return Result
     * @throws \Exception
     */
    public static function deleteDeliveryRequest($requestId)
    {
    }
    /**
     * @param int $requestId
     * @param int[] $shipmentIds
     * @return Result
     */
    public static function deleteShipmentsFromDeliveryRequest($requestId, array $shipmentIds)
    {
    }
    /**
     * @param int $requestId
     * @return Result
     */
    public static function getDeliveryRequestContent($requestId)
    {
    }
    /**
     * @param int $requestId
     * @param string $actionType
     * @param array $additional
     * @return Result
     */
    public static function executeDeliveryRequestAction($requestId, $actionType, array $additional = array())
    {
    }
    /**
     * @param int $requestId
     * @param int $shipmentId
     * @param string $actionType
     * @param array $additional
     * @return Result
     */
    public static function executeDeliveryRequestShipmentAction($requestId, $shipmentId, $actionType, array $additional = array())
    {
    }
    /**
     * @param int[] $shipmentIds
     * @return ShipmentResult[]
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function checkShipmentIdsBeforeAdd(array $shipmentIds)
    {
    }
    /**
     * @param int[] $shipmentIds
     * @return int[] Choose ids only for existing shipments.
     */
    protected static function filterExistIds(array $shipmentIds)
    {
    }
    /**
     * @param int[] $shipmentIds
     * @return int[]
     */
    protected static function filterAddedIds(array $shipmentIds)
    {
    }
    /**
     * @param int[] $shipmentIds
     * @return int[]
     */
    protected static function filterPositiveIds(array $shipmentIds)
    {
    }
    /**
     * @param int[] $shipmentIds
     * @return ShipmentResult[]
     */
    protected static function checkShipmentIdsBeforeDelete(array $shipmentIds)
    {
    }
    /**
     * @param int[] $shipmentIds
     * @return ShipmentResult[]
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function checkShipmentIdsBeforeUpdate(array $shipmentIds)
    {
    }
    /**
     * @param int $shipmentId
     * @return bool
     */
    public static function isShipmentSent($shipmentId)
    {
    }
    /**
     * @param int $shipmentId
     * @return int Request ID
     */
    public static function getRequestIdByShipmentId($shipmentId)
    {
    }
    /**
     * @param int $requestId
     * @param int [] $shipmentIds
     * @return Result
     * @throws \Exception
     */
    public static function addShipmentsToDeliveryRequest($requestId, array $shipmentIds)
    {
    }
    /**
     * @param int $requestId
     * @param int [] $shipmentIds
     * @return Result
     * @throws \Exception
     */
    public static function updateShipmentsFromDeliveryRequest($requestId, array $shipmentIds)
    {
    }
    /**
     * @param $shipmentId
     * @param ShipmentResult $shipmentResult
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    protected static function saveShipmentResult($shipmentId, \Bitrix\Sale\Delivery\Requests\ShipmentResult $shipmentResult)
    {
    }
    /**
     * @param Order $order
     * @param Shipment $shipment
     */
    public static function onBeforeShipmentSave(&$order, &$shipment)
    {
    }
    /**
     * @param Shipment $shipment
     */
    public static function onBeforeShipmentDelete(&$shipment)
    {
    }
    /**
     * @param Order $order
     * @param Shipment $shipment
     */
    protected static function setMarkerShipmentChanged(&$order, &$shipment)
    {
    }
    /**
     * @param int  $shipmentId
     */
    protected static function unSetMarkerShipmentChanged($shipmentId)
    {
    }
    public static function initJs()
    {
    }
}