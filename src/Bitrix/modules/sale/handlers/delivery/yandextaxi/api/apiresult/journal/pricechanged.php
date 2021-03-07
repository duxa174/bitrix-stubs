<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal;

/**
 * Class PriceChanged
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal
 * @internal
 */
final class PriceChanged extends \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Event
{
    public const EVENT_CODE = 'price_changed';
    /** @var string */
    protected $newPrice;
    /** @var string */
    protected $newCurrency;
    /**
     * @return string
     */
    public function getCode() : string
    {
    }
    /**
     * @return string
     */
    public function getNewPrice()
    {
    }
    /**
     * @param string $newPrice
     * @return PriceChanged
     */
    public function setNewPrice(string $newPrice) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\PriceChanged
    {
    }
    /**
     * @return string
     */
    public function getNewCurrency()
    {
    }
    /**
     * @param string $newCurrency
     * @return PriceChanged
     */
    public function setNewCurrency(string $newCurrency) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\PriceChanged
    {
    }
    /**
     * @inheritdoc
     */
    public function provideUpdateFields() : array
    {
    }
}