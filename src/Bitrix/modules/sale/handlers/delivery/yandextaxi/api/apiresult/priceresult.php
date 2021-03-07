<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult;

/**
 * Class PriceResult
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult
 * @internal
 */
final class PriceResult extends \Bitrix\Main\Result
{
    /** @var float */
    private $price;
    /** @var string */
    private $currency;
    /** @var int|null */
    private $eta;
    /**
     * @return float
     */
    public function getPrice()
    {
    }
    /**
     * @param float $price
     * @return PriceResult
     */
    public function setPrice(float $price) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\PriceResult
    {
    }
    /**
     * @return string
     */
    public function getCurrency()
    {
    }
    /**
     * @param string $currency
     * @return PriceResult
     */
    public function setCurrency(string $currency) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\PriceResult
    {
    }
    /**
     * @return int|null
     */
    public function getEta() : ?int
    {
    }
    /**
     * @param int|null $eta
     * @return PriceResult
     */
    public function setEta(?int $eta) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\PriceResult
    {
    }
}