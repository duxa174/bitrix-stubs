<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class Estimation
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class Estimation extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var ShippingItem[] */
    protected $items = [];
    /** @var TransportClassification */
    protected $requirements;
    /** @var Address[] */
    protected $routePoints;
    /** @var bool */
    protected $skipDoorToDoor;
    /**
     * @return ShippingItem[]
     */
    public function getItems() : array
    {
    }
    /**
     * @param ShippingItem $shippingItem
     * @return Estimation
     */
    public function addItem(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ShippingItem $shippingItem) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Estimation
    {
    }
    /**
     * @return TransportClassification
     */
    public function getRequirements()
    {
    }
    /**
     * @param TransportClassification $requirements
     * @return $this
     */
    public function setRequirements(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\TransportClassification $requirements) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Estimation
    {
    }
    /**
     * @return Address[]
     */
    public function getRoutePoints()
    {
    }
    /**
     * @param Address $address
     * @return $this
     */
    public function addRoutePoint(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Address $address) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Estimation
    {
    }
    /**
     * @return bool
     */
    public function isSkipDoorToDoor()
    {
    }
    /**
     * @param bool $skipDoorToDoor
     * @return Estimation
     */
    public function setSkipDoorToDoor(bool $skipDoorToDoor) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Estimation
    {
    }
}