<?php

namespace Bitrix\Sale\Exchange\Entity;

/**
 * Class EntityImportFactory
 * @package Bitrix\Sale\Exchange\Entity
 * @internal
 */
class EntityImportFactory
{
    /**
     * @param $entityTypeID
     * @param null $parentEntityContext
     * @return Exchange\ImportBase
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     */
    public static function create($entityTypeID, $parentEntityContext = null)
    {
    }
}