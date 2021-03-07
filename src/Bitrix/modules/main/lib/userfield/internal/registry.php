<?php

namespace Bitrix\Main\UserField\Internal;

/**
 * @deprecated
 */
final class Registry
{
    const EVENT_NAME = 'onGetUserFieldTypeFactory';
    /** @var TypeFactory[] */
    protected $factories = [];
    protected $itemTypes = [];
    /** @var Registry */
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns Singleton of Driver
     * @return Registry
     */
    public static function getInstance() : \Bitrix\Main\UserField\Internal\Registry
    {
    }
    public function registerFactory(\Bitrix\Main\UserField\Internal\TypeFactory $factory)
    {
    }
    /**
     * @param Entity $entity
     * @param array $type
     */
    public function registerTypeByEntity(\Bitrix\Main\ORM\Entity $entity, array $type) : void
    {
    }
    /**
     * @param Entity $entity
     * @return array|null
     */
    public function getTypeByEntity(\Bitrix\Main\ORM\Entity $entity) : ?array
    {
    }
    public function getFactoryByCode(string $code) : ?\Bitrix\Main\UserField\Internal\TypeFactory
    {
    }
    public function getFactoryByTypeDataClass($typeDataClass) : ?\Bitrix\Main\UserField\Internal\TypeFactory
    {
    }
    /**
     * @param Entity $entity
     * @return null|string
     */
    public function getUserFieldEntityIdByItemEntity(\Bitrix\Main\ORM\Entity $entity) : ?string
    {
    }
    protected function addFactoriesByEvent() : void
    {
    }
}