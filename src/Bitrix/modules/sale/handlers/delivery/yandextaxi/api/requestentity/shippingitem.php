<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class ShippingItem
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class ShippingItem extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var string */
    protected $title;
    /** @var ShippingItemSize */
    protected $size;
    /** @var string */
    protected $costValue;
    /** @var string */
    protected $costCurrency;
    /** @var int */
    protected $weight;
    /** @var int */
    protected $quantity;
    /**
     * @return string
     */
    public function getTitle()
    {
    }
    /**
     * @param string $title
     * @return ShippingItem
     */
    public function setTitle(string $title)
    {
    }
    /**
     * @return ShippingItemSize
     */
    public function getSize()
    {
    }
    /**
     * @param ShippingItemSize $size
     * @return ShippingItem
     */
    public function setSize(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ShippingItemSize $size)
    {
    }
    /**
     * @return string
     */
    public function getCostValue()
    {
    }
    /**
     * @param string $costValue
     * @return ShippingItem
     */
    public function setCostValue(string $costValue)
    {
    }
    /**
     * @return string
     */
    public function getCostCurrency()
    {
    }
    /**
     * @param string $costCurrency
     * @return ShippingItem
     */
    public function setCostCurrency(string $costCurrency)
    {
    }
    /**
     * @return int Weight in kg
     */
    public function getWeight()
    {
    }
    /**
     * @param int $weight Weight in kg
     * @return ShippingItem
     */
    public function setWeight(int $weight)
    {
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
    }
    /**
     * @param int $quantity
     * @return ShippingItem
     */
    public function setQuantity(int $quantity)
    {
    }
}