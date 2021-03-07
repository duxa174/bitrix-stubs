<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class RoutePoints
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class RoutePoints extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var RoutePoint */
    protected $source;
    /** @var RoutePoint */
    protected $destination;
    /** @var RoutePoint */
    protected $return;
    /**
     * @return RoutePoint
     */
    public function getSource()
    {
    }
    /**
     * @param RoutePoint $source
     * @return RoutePoints
     */
    public function setSource(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoint $source) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoints
    {
    }
    /**
     * @return RoutePoint
     */
    public function getDestination()
    {
    }
    /**
     * @param RoutePoint $destination
     * @return RoutePoints
     */
    public function setDestination(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoint $destination) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoints
    {
    }
    /**
     * @return RoutePoint
     */
    public function getReturn()
    {
    }
    /**
     * @param RoutePoint $return
     * @return RoutePoints
     */
    public function setReturn(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoint $return) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoints
    {
    }
}