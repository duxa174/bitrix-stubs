<?php

namespace Bitrix\Landing\Note\Source;

abstract class Entity
{
    /**
     * Length for landing title.
     */
    const TITLE_LENGTH = 30;
    /**
     * Returns Disk files for module entity.
     * @param int $sourceId Source id (post id).
     * @param string $entityType Entity type.
     * @param string $module Module id.
     * @return array
     */
    protected static function getDiskFiles(int $sourceId, string $entityType, string $module) : array
    {
    }
    /**
     * Returns prepared data for landing by entity (post) id.
     * @param int $sourceId Source id.
     * @return array|null
     */
    public static abstract function getData(int $sourceId) : ?array;
}