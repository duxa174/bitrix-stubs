<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class Helper
 * @package Bitrix\Sale\Delivery\Requests
 * @internal
 */
class Helper
{
    /**
     * @param int $shipmentId
     * @param string $text Link text
     * @param int $orderId
     * @param string $languageId
     * @return string <a...>...</> Link to shipment edit form
     */
    public static function getShipmentEditLink($shipmentId, $text = '', $orderId = 0, $languageId = LANGUAGE_ID)
    {
    }
    /**
     * @param int $deliveryId
     * @param string $deliveryName
     * @param string $languageId
     * @return string <a...>...</> Link to delivery edit form
     */
    public static function getDeliveryEditLink($deliveryId, $deliveryName = '', $languageId = LANGUAGE_ID)
    {
    }
    /**
     * @param int $requestId
     * @param string $text
     * @param string $languageId
     * @return string <a...>...</> Link to request view form
     */
    public static function getRequestViewLink($requestId, $text = '', $languageId = LANGUAGE_ID)
    {
    }
    /**
     * @param int[] $shipmentIds
     * @return Shipment[]
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getShipmentsByIds(array $shipmentIds)
    {
    }
}