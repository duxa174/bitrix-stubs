<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder;

/**
 * Class ShippingItemCollection
 * @package Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder
 * @internal
 */
final class ShippingItemCollection implements \IteratorAggregate
{
    /** @var ShippingItem[] */
    private $items = [];
    /**
     * @param ShippingItem $item
     * @return $this
     */
    public function addItem(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ShippingItem $item)
    {
    }
    /**
     * @return Result
     */
    public function isValid() : \Bitrix\Main\Result
    {
    }
    /**
     * @inheritDoc
     */
    public function getIterator()
    {
    }
}