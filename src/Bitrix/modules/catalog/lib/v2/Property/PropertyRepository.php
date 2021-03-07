<?php

namespace Bitrix\Catalog\v2\Property;

/**
 * Class PropertyRepository
 *
 * @package Bitrix\Catalog\v2\Property
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class PropertyRepository implements \Bitrix\Catalog\v2\Property\PropertyRepositoryContract
{
    /** @var \Bitrix\Catalog\v2\Property\PropertyFactory */
    protected $factory;
    /** @var \Bitrix\Catalog\v2\PropertyValue\PropertyValueFactory */
    private $propertyValueFactory;
    public function __construct(\Bitrix\Catalog\v2\Property\PropertyFactory $factory, \Bitrix\Catalog\v2\PropertyValue\PropertyValueFactory $propertyValueFactory)
    {
    }
    public function getEntityById(int $id) : ?\Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function getEntitiesBy($params) : array
    {
    }
    public function save(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    public function delete(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    public function getCollectionByParent(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    protected function getList(array $params) : array
    {
    }
    protected function createCollection(array $entityFields, \Bitrix\Catalog\v2\BaseIblockElementEntity $parent) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    protected function getLinkedProperties(int $iblockId, \Bitrix\Catalog\v2\Section\HasSectionCollection $parent) : array
    {
    }
    private function getPropertiesSettingsByFilter(array $filter) : array
    {
    }
    protected function prepareField(array $fields, array $settings) : array
    {
    }
    protected function prepareSettings(array $settings) : array
    {
    }
    protected function createEntity(array $fields = []) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
}