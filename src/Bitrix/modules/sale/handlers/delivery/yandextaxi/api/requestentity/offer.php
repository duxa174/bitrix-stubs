<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class Offer
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class Offer extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var string */
    protected $offerId;
    /** @var string */
    protected $price;
    /**
     * @return string
     */
    public function getOfferId()
    {
    }
    /**
     * @param string $offerId
     * @return Offer
     */
    public function setOfferId(string $offerId) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Offer
    {
    }
    /**
     * @return string
     */
    public function getPrice()
    {
    }
    /**
     * @param string $price
     * @return Offer
     */
    public function setPrice(string $price) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Offer
    {
    }
}