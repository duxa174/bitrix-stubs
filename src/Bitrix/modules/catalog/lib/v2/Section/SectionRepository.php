<?php

namespace Bitrix\Catalog\v2\Section;

/**
 * Class SectionRepository
 *
 * @package Bitrix\Catalog\v2\Section
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class SectionRepository implements \Bitrix\Catalog\v2\Section\SectionRepositoryContract
{
    /** @var \Bitrix\Catalog\v2\Section\SectionFactory */
    protected $factory;
    public function __construct(\Bitrix\Catalog\v2\Section\SectionFactory $factory)
    {
    }
    public function getEntityById(int $id) : ?\Bitrix\Catalog\v2\BaseEntity
    {
    }
    // ToDo custom load section entities by filter?
    public function getEntitiesBy($params) : array
    {
    }
    public function save(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    public function delete(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    public function getCollectionByProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    protected function getListByProductId(int $productId) : array
    {
    }
    // ToDo getList for "get by filter" sections
    protected function getList(array $params) : array
    {
    }
    protected function createEntity(array $fields) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    protected function createCollection(array $entityFields, \Bitrix\Catalog\v2\Product\BaseProduct $product) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
}