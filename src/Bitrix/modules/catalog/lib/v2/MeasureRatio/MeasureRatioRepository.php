<?php

namespace Bitrix\Catalog\v2\MeasureRatio;

/**
 * Class MeasureRatioRepository
 *
 * @package Bitrix\Catalog\v2\MeasureRatio
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class MeasureRatioRepository implements \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioRepositoryContract
{
    /** @var \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioFactory */
    protected $factory;
    public function __construct(\Bitrix\Catalog\v2\MeasureRatio\MeasureRatioFactory $factory)
    {
    }
    public function getEntityById(int $id) : ?\Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function getEntitiesBy($params) : array
    {
    }
    public function getProductId(\Bitrix\Catalog\v2\BaseEntity $entity) : ?int
    {
    }
    public function save(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    public function delete(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    public function getCollectionByParent(\Bitrix\Catalog\v2\Sku\BaseSku $sku) : \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection
    {
    }
    protected function getByProductId(int $skuId) : array
    {
    }
    protected function getList(array $params) : array
    {
    }
    protected function createEntity(array $fields) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    protected function createCollection(array $entityFields, \Bitrix\Catalog\v2\Sku\BaseSku $sku) : \Bitrix\Catalog\v2\MeasureRatio\MeasureRatioCollection
    {
    }
    protected function addInternal(array $fields) : \Bitrix\Main\Result
    {
    }
    protected function updateInternal(int $id, array $fields) : \Bitrix\Main\Result
    {
    }
    protected function deleteInternal(int $id) : \Bitrix\Main\Result
    {
    }
}