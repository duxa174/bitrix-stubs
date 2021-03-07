<?php

namespace Bitrix\Main\UserField\Internal;

/**
 * @deprecated
 */
abstract class TypeFactory
{
    protected $itemEntities = [];
    /**
     * @return TypeDataManager
     */
    public abstract function getTypeDataClass() : string;
    /**
     * @return PrototypeItemDataManager
     */
    public abstract function getItemPrototypeDataClass() : string;
    public abstract function getCode() : string;
    /**
     * @param mixed $type
     * @return PrototypeItemDataManager
     */
    public function getItemDataClass($type) : string
    {
    }
    public function getItemEntity($type) : \Bitrix\Main\ORM\Entity
    {
    }
    /**
     * @return Item
     */
    public function getItemParentClass() : string
    {
    }
    public function getUserFieldEntityPrefix() : string
    {
    }
    public function getUserFieldEntityId(int $typeId) : string
    {
    }
    public static function getCodeByPrefix(string $prefix) : string
    {
    }
    public static function getPrefixByCode(string $code) : string
    {
    }
}