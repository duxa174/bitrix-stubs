<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class RoutePoint
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class RoutePoint extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var Contact */
    protected $contact;
    /** @var Address */
    protected $address;
    /** @var bool */
    protected $skipConfirmation;
    /**
     * @return Contact
     */
    public function getContact()
    {
    }
    /**
     * @param Contact $contact
     * @return RoutePoint
     */
    public function setContact(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Contact $contact) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoint
    {
    }
    /**
     * @return Address
     */
    public function getAddress()
    {
    }
    /**
     * @param Address $address
     * @return RoutePoint
     */
    public function setAddress(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Address $address) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoint
    {
    }
    /**
     * @return bool
     */
    public function isSkipConfirmation()
    {
    }
    /**
     * @param bool $skipConfirmation
     * @return RoutePoint
     */
    public function setSkipConfirmation(bool $skipConfirmation) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoint
    {
    }
}