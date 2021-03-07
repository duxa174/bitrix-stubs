<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class HandlerBase
 * @package Bitrix\Sale\Delivery\Requests
 * Base class for delivery requests handlers
 */
abstract class HandlerBase
{
    /** @var Delivery\Services\Base */
    protected $deliveryService = null;
    /**
     * Base constructor.
     * @param Delivery\Services\Base $deliveryService
     */
    public function __construct(\Bitrix\Sale\Delivery\Services\Base $deliveryService)
    {
    }
    /**
     * Creates delivery request.
     * @param int[] $shipmentIds
     * @param array $additional
     * @return Result
     */
    public function create(array $shipmentIds, array $additional = array())
    {
    }
    /**
     * @param int $requestId
     * @return array Actions list.
     * For example array( 'ACTION1' => 'ACTION1_NAME', 'ACTION2' => 'ACTION2_NAME').
     */
    public function getActions($requestId)
    {
    }
    /**
     * @param Shipment $shipment
     * @return array Actions list
     * For example array( 'ACTION1' => 'ACTION1_NAME', 'ACTION2' => 'ACTION2_NAME').
     */
    public function getShipmentActions(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * Executes delivery request action
     * @param int $requestId
     * @param string $actionType
     * @param array $additional
     * @return Result
     */
    public function executeAction($requestId, $actionType, array $additional)
    {
    }
    /**
     * Executes action for shipment from delivery request
     * @param int $requestId
     * @param int $shipmentId
     * @param string $actionType
     * @param array $additional
     * @return Result
     */
    public function executeShipmentAction($requestId, $shipmentId, $actionType, array $additional)
    {
    }
    /**
     * Add shipments to delivery request
     * @param int $requestId
     * @param int[] $shipmentIds
     * @return Result
     */
    public function addShipments($requestId, $shipmentIds)
    {
    }
    /**
     * Delete delivery request
     * @param int $requestId
     * @return Result
     */
    public function delete($requestId)
    {
    }
    /**
     * Delete shipment from delivery request
     * @param int $requestId
     * @param int[] $shipmentIds
     * @return Result
     */
    public function deleteShipments($requestId, array $shipmentIds = array())
    {
    }
    /**
     * Update shipment from delivery request
     * @param int $requestId
     * @param int[] $shipmentIds
     * @return Result
     */
    public function updateShipments($requestId, array $shipmentIds = array())
    {
    }
    /**
     * Returns array of fields if we need some additional information
     * during creation, or action execution, etc.
     * @param string $formFieldsType (FORM_FIELDS_TYPE_CREATE | FORM_FIELDS_TYPE_ADD | FORM_FIELDS_TYPE_ACTION)
     * @param int[] $shipmentIds
     * @param array $additional
     * @return array
     */
    public function getFormFields($formFieldsType, array $shipmentIds, array $additional = array())
    {
    }
    /**
     * Returns content of delivery request
     * @param int $requestId
     * @return Result
     */
    public function getContent($requestId)
    {
    }
    /**
     * Returns content of shipment from delivery request
     * @param int $requestId
     * @param int $shipmentId
     * @return Result. Data contain array of shipment fields on delivery side
     */
    public function getShipmentContent($requestId, $shipmentId)
    {
    }
    /**
     * Returns id of delivery service witch actually handles delivery requests
     * @return int
     */
    public function getHandlingDeliveryServiceId()
    {
    }
}