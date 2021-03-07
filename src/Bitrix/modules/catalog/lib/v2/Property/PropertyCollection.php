<?php

namespace Bitrix\Catalog\v2\Property;

/**
 * Class PropertyCollection
 *
 * @package Bitrix\Catalog\v2\Property
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class PropertyCollection extends \Bitrix\Catalog\v2\BaseCollection
{
    /** @var \Bitrix\Catalog\v2\Property\PropertyRepositoryContract */
    protected $repository;
    public function __construct(\Bitrix\Catalog\v2\Property\PropertyRepositoryContract $repository)
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|\Bitrix\Catalog\v2\Property\HasPropertyCollection|null $parent
     * @return \Bitrix\Catalog\v2\BaseCollection
     */
    public function setParent(?\Bitrix\Catalog\v2\BaseEntity $parent) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    public function findBySetting(string $field, $value) : ?\Bitrix\Catalog\v2\Property\Property
    {
    }
    public function findByCode(string $code) : ?\Bitrix\Catalog\v2\Property\Property
    {
    }
    /**
     * @param array $propertyValues
     * @return $this
     */
    public function setValues(array $propertyValues) : self
    {
    }
    public function getValues() : array
    {
    }
    public function saveInternal() : \Bitrix\Main\Result
    {
    }
    public function deleteInternal() : \Bitrix\Main\Result
    {
    }
}