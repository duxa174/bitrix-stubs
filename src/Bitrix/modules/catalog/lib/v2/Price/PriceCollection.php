<?php

namespace Bitrix\Catalog\v2\Price;

/**
 * Class PriceCollection
 *
 * @package Bitrix\Catalog\v2\Price
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class PriceCollection extends \Bitrix\Catalog\v2\BaseCollection
{
    /** @var \Bitrix\Catalog\v2\Price\PriceFactory */
    protected $factory;
    public function __construct(\Bitrix\Catalog\v2\Price\PriceFactory $factory)
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|\Bitrix\Catalog\v2\Price\HasPriceCollection|null $parent
     * @return \Bitrix\Catalog\v2\BaseCollection
     */
    public function setParent(?\Bitrix\Catalog\v2\BaseEntity $parent) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    public function findByGroupId(int $groupId) : ?\Bitrix\Catalog\v2\Price\BasePrice
    {
    }
    public function create() : \Bitrix\Catalog\v2\Price\BasePrice
    {
    }
    /**
     * @param array $values
     * @return $this
     */
    public function setValues(array $values) : self
    {
    }
    public function getValues() : array
    {
    }
    private function prepareValues(array $values) : array
    {
    }
}