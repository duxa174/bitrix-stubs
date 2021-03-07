<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class PerformerInfo
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class PerformerInfo extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var string */
    protected $courierName;
    /** @var string */
    protected $legalName;
    /** @var string */
    protected $carModel;
    /** @var string */
    protected $carNumber;
    /**
     * @return string
     */
    public function getCourierName()
    {
    }
    /**
     * @param string $courierName
     * @return PerformerInfo
     */
    public function setCourierName(string $courierName) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\PerformerInfo
    {
    }
    /**
     * @return string
     */
    public function getLegalName()
    {
    }
    /**
     * @param string $legalName
     * @return PerformerInfo
     */
    public function setLegalName(string $legalName) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\PerformerInfo
    {
    }
    /**
     * @return string
     */
    public function getCarModel()
    {
    }
    /**
     * @param string $carModel
     * @return PerformerInfo
     */
    public function setCarModel(string $carModel) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\PerformerInfo
    {
    }
    /**
     * @return string
     */
    public function getCarNumber()
    {
    }
    /**
     * @param string $carNumber
     * @return PerformerInfo
     */
    public function setCarNumber(string $carNumber) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\PerformerInfo
    {
    }
}