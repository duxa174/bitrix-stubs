<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Common;

/**
 * Class ShipmentDataExtractor
 * @package Sale\Handlers\Delivery\YandexTaxi\Common
 * @internal
 */
final class ShipmentDataExtractor
{
    /**
     * @param Shipment $shipment
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getShortenedAddressFrom(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getShortenedAddressTo(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return bool|mixed|string|string[]|null
     */
    public function getDeliveryPriceFormatted(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return float|null
     */
    public function getExpectedDeliveryPrice(\Bitrix\Sale\Shipment $shipment) : ?float
    {
    }
    /**
     * @param Shipment $shipment
     * @return bool|mixed|string|string[]|null
     */
    public function getExpectedDeliveryPriceFormatted(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    public function getDeliverySystemName(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    public function getDeliverySystemLogo(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return mixed
     */
    public function getDeliveryMethod(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return int
     */
    public function getResponsibleUserId(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return array|null
     */
    public function getResponsibleUser(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param PropertyValueBase $propertyValue
     * @return string
     * @throws \Bitrix\Main\LoaderException
     */
    private function getShortenedAddress($propertyValue) : string
    {
    }
}