<?php

namespace Bitrix\Blog\Copy\Implement;

abstract class Base extends \Bitrix\Main\Copy\CopyImplementer
{
    /**
     * Updates entity.
     *
     * @param int $entityId Entity id.
     * @param array $fields List entity fields.
     * @return bool
     */
    public abstract function update($entityId, array $fields);
    public function updateAttachedIdsInText(int $id, array $attachedIds, callable $callback) : void
    {
    }
}