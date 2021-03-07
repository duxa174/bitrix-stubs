<?php

namespace Bitrix\Sale\Internals;

/**
 * Class CustomFieldsController
 * @package Bitrix\Sale\Internals
 */
final class CustomFieldsController
{
    private static $instance = null;
    /**
     * CustomFieldsController constructor.
     */
    private function __construct()
    {
    }
    /**
     * @return CustomFieldsController
     */
    public static function getInstance() : \Bitrix\Sale\Internals\CustomFieldsController
    {
    }
    /**
     * @param Entity $entity
     * @return Entity
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function save(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Entity $entity
     * @return Entity
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function initialize(\Bitrix\Sale\Internals\Entity $entity) : \Bitrix\Sale\Internals\Entity
    {
    }
    /**
     * @param EntityCollection $collection
     * @return EntityCollection
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function initializeCollection(\Bitrix\Sale\Internals\EntityCollection $collection) : \Bitrix\Sale\Internals\EntityCollection
    {
    }
    /**
     * @param EntityCollection $collection
     * @return array
     * @throws Main\NotImplementedException
     */
    private function buildFilter(\Bitrix\Sale\Internals\EntityCollection $collection)
    {
    }
}