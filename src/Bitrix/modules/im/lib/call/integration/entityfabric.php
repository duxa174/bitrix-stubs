<?php

namespace Bitrix\Im\Call\Integration;

class EntityFabric
{
    /**
     * Return proxy object, to access entity, associated with the call.
     *
     * @param string $entityType Type of the associated entity.
     * @param integer $entityId Id of the associated entity.
     * @return AbstractEntity
     * @throws ArgumentException
     */
    public static function createEntity(\Bitrix\Im\Call\Call $call, $entityType, $entityId)
    {
    }
}