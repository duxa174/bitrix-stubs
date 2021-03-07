<?php

namespace Bitrix\Sale\Exchange\Entity;

/**
 * Class EntityImportLoaderFactory
 * @package Bitrix\Sale\Exchange\Entity
 * @internal
 */
class EntityImportLoaderFactory
{
    /** Create new entity import loader by specified entity type ID.
     * @static
     * @param int $entityTypeID Entity type ID.
     * @return EntityImportLoader
     * @throws Main\ArgumentException
     * @throws Main\NotSupportedException
     */
    public static function create($entityTypeID)
    {
    }
}