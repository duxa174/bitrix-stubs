<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder;

/**
 * Class ClaimBuilder
 * @package Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder
 * @internal
 */
final class ClaimBuilder
{
    public const NEED_CONTACT_TO_EVENT_CODE = 'OnDeliveryYandexTaxiNeedContactTo';
    /** @var ShipmentDataExtractor */
    protected $extractor;
    /** @var Result */
    protected $result;
    /**
     * ClaimBuilder constructor.
     * @param ShipmentDataExtractor $extractor
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\Common\ShipmentDataExtractor $extractor)
    {
    }
    /**
     * @param Shipment $shipment
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public function build(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Main\Result
    {
    }
    /**
     * @param Shipment $shipment
     * @return ShippingItemCollection
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public function getShippingItemCollection(\Bitrix\Sale\Shipment $shipment) : \Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder\ShippingItemCollection
    {
    }
    /**
     * @param Shipment $shipment
     * @return array
     * @throws \Bitrix\Main\SystemException
     */
    private function getExtraServiceValues(\Bitrix\Sale\Shipment $shipment) : array
    {
    }
    /**
     * @param Shipment $shipment
     * @return bool
     * @throws \Bitrix\Main\SystemException
     */
    public function isDoorDeliveryRequired(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return bool|string
     * @throws \Bitrix\Main\SystemException
     */
    public function getVehicleType(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return Contact|null
     */
    protected function buildContactFrom(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param array $responsibleUser
     * @return string
     */
    private function getResponsibleUserName(array $responsibleUser)
    {
    }
    /**
     * @param array $responsibleUser
     * @return string|null
     */
    private function getResponsibleUserEmail(array $responsibleUser)
    {
    }
    /**
     * @param array $responsibleUser
     * @return string|null
     */
    private function getResponsibleUserPhone(array $responsibleUser)
    {
    }
    /**
     * @param Shipment $shipment
     * @return Result
     */
    public function buildAddressFrom(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Main\Result
    {
    }
    /**
     * @param Shipment $shipment
     * @return Result
     */
    public function buildAddressTo(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Main\Result
    {
    }
    /**
     * @param Shipment $shipment
     * @param string $propertyCode
     * @return Result
     * @throws \Bitrix\Main\LoaderException
     */
    private function buildAddress(\Bitrix\Sale\Shipment $shipment, string $propertyCode)
    {
    }
    /**
     * @param Shipment $shipment
     * @param string $propertyCode
     * @return array|string|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getPropertyValue(\Bitrix\Sale\Shipment $shipment, string $propertyCode)
    {
    }
    /**
     * @param Shipment $shipment
     * @param string $propertyCode
     * @return mixed|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getPropertyName(\Bitrix\Sale\Shipment $shipment, string $propertyCode)
    {
    }
    /**
     * @param Shipment $shipment
     * @param string $propertyCode
     * @return \Bitrix\Sale\PropertyValue|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getPropertyValueObject(\Bitrix\Sale\Shipment $shipment, string $propertyCode)
    {
    }
}