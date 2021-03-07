<?php

namespace Bitrix\Catalog\v2\Price;

/**
 * Class BasePrice
 *
 * @package Bitrix\Catalog\v2\Price
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BasePrice extends \Bitrix\Catalog\v2\BaseEntity
{
    public function __construct(\Bitrix\Catalog\v2\Price\PriceRepositoryContract $priceRepository)
    {
    }
    public function setParentCollection(?\Bitrix\Catalog\v2\BaseCollection $collection) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function setPrice(float $price) : self
    {
    }
    public function getPrice() : float
    {
    }
    public function setCurrency($currency) : self
    {
    }
    public function getCurrency() : string
    {
    }
    public function isPriceBase() : bool
    {
    }
    public function setPriceBase(bool $state) : self
    {
    }
    public function setGroupId(int $groupId) : self
    {
    }
    public function getGroupId() : int
    {
    }
    public function setProductId(int $productId) : self
    {
    }
    public function getProductId() : int
    {
    }
    protected function getFieldsMap() : array
    {
    }
}