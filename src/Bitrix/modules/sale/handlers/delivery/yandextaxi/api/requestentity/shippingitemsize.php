<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class ShippingItemSize
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class ShippingItemSize extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var float */
    protected $length;
    /** @var float */
    protected $width;
    /** @var float */
    protected $height;
    /**
     * @return float Length in meters
     */
    public function getLength()
    {
    }
    /**
     * @param float $length Length in meters
     * @return ShippingItemSize
     */
    public function setLength(float $length) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ShippingItemSize
    {
    }
    /**
     * @return float Width in meters
     */
    public function getWidth()
    {
    }
    /**
     * @param float $width Width in meters
     * @return ShippingItemSize
     */
    public function setWidth(float $width) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ShippingItemSize
    {
    }
    /**
     * @return float Height in meters
     */
    public function getHeight()
    {
    }
    /**
     * @param float $height Height in meters
     * @return ShippingItemSize
     */
    public function setHeight(float $height) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ShippingItemSize
    {
    }
}