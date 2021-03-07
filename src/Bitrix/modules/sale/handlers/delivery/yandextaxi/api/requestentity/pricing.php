<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class Pricing
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class Pricing extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var string */
    protected $currency;
    /** @var string */
    protected $finalPrice;
    /** @var Offer */
    protected $offer;
    /**
     * @return string
     */
    public function getCurrency()
    {
    }
    /**
     * @param string $currency
     * @return Pricing
     */
    public function setCurrency(string $currency) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Pricing
    {
    }
    /**
     * @return string
     */
    public function getFinalPrice()
    {
    }
    /**
     * @param string $finalPrice
     * @return Pricing
     */
    public function setFinalPrice(string $finalPrice) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Pricing
    {
    }
    /**
     * @return Offer
     */
    public function getOffer()
    {
    }
    /**
     * @param Offer $offer
     * @return Pricing
     */
    public function setOffer(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Offer $offer) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Pricing
    {
    }
}