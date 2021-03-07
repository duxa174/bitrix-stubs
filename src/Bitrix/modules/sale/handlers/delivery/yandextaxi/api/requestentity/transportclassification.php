<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class TransportClassification
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class TransportClassification extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var string */
    protected $taxiClass;
    /** @var string */
    protected $cargoType;
    /** @var int */
    protected $cargoLoaders;
    /**
     * @return string
     */
    public function getTaxiClass()
    {
    }
    /**
     * @param string $taxiClass
     * @return TransportClassification
     */
    public function setTaxiClass(string $taxiClass) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\TransportClassification
    {
    }
    /**
     * @return string
     */
    public function getCargoType()
    {
    }
    /**
     * @param string $cargoType
     * @return TransportClassification
     */
    public function setCargoType(string $cargoType) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\TransportClassification
    {
    }
    /**
     * @return int
     */
    public function getCargoLoaders()
    {
    }
    /**
     * @param int $cargoLoaders
     * @return TransportClassification
     */
    public function setCargoLoaders(int $cargoLoaders) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\TransportClassification
    {
    }
}