<?php

namespace Sale\Handlers\Delivery\Additional\RusPost\Reliability;

/**
 * Class Service
 * @package Sale\Handlers\Delivery\Additional\RusPost\Reliability
 */
class Service
{
    const UNKNOWN = 0;
    const RELIABLE = 10;
    const FRAUD = 20;
    /**
     * @param int $deliveryId
     * @param ReliabilityCollection $collection
     * @return ReliabilityCollection
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getReliabilityCollection(int $deliveryId, \Sale\Handlers\Delivery\Additional\RusPost\Reliability\ReliabilityCollection $collection)
    {
    }
    /**
     * @param int $deliveryId
     * @param string $fullName
     * @param string $address
     * @param string $phone
     * @return int
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getReliabilityValue(int $deliveryId, string $fullName, string $address, string $phone)
    {
    }
    /**
     * @param int $deliveryId
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function prepareData(int $deliveryId, int $attempt = 0)
    {
    }
    /**
     * @param Shipment $shipment
     * @return PropertyValueCollectionBase|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     */
    private static function extractProperties(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param PropertyValueCollectionBase $props
     * @return array|null
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private static function extractDataFromProps(\Bitrix\Sale\PropertyValueCollectionBase $props)
    {
    }
    /**
     * @param $expectedDeliveryId
     * @param Event $event
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function onShipmentSave($expectedDeliveryId, \Bitrix\Main\Event $event)
    {
    }
    /**
     * @param $expectedDeliveryId
     * @param Event $event
     * @return \Bitrix\Main\EventResult
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\SystemException
     */
    public static function onSaleAdminOrderInfoBlockShow($expectedDeliveryId, \Bitrix\Main\Event $event)
    {
    }
    /**
     * @param int $deliveryId
     * @param ReliabilityCollection $collection
     * @return bool|ReliabilityCollection
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    private static function requestReliability(int $deliveryId, \Sale\Handlers\Delivery\Additional\RusPost\Reliability\ReliabilityCollection $collection)
    {
    }
    /**
     * @param Delivery\Services\Base $delivery
     * @return bool
     */
    private static function isDeliverySuitable(\Bitrix\Sale\Delivery\Services\Base $delivery, $expectedDeliveryId = 0)
    {
    }
    /**
     * @param string $address
     * @param string $fullName
     * @param string $phone
     * @return string
     */
    public static function createHash(string $fullName, string $address, string $phone)
    {
    }
    /**
     * @param int $deliveryId
     */
    public static function install(int $deliveryId)
    {
    }
    /**
     * @param int $deliveryId
     */
    public static function unInstall(int $deliveryId)
    {
    }
    /**
     * @return HttpClient
     */
    private static function createHttpClient()
    {
    }
    /**
     * @param int $deliveryId
     */
    private static function addAgent(int $deliveryId, int $attempts)
    {
    }
    /**
     * @param int $deliveryId
     * @param int $attempts
     * @return string
     */
    private static function createAgentName(int $deliveryId, int $attempts)
    {
    }
    /**
     * @return ReliabilityTable
     */
    private static function getTableClass()
    {
    }
}