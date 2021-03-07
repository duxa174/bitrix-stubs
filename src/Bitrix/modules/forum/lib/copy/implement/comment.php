<?php

namespace Bitrix\Forum\Copy\Implement;

class Comment extends \Bitrix\Main\Copy\CopyImplementer
{
    const COMMENT_COPY_ERROR = "COMMENT_COPY_ERROR";
    protected $ufEntityObject = "FORUM_MESSAGE";
    protected $ufDiskFileField = "UF_FORUM_MESSAGE_DOC";
    /**
     * @param Container $container
     * @param array $fields
     * @return int message id.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    public function update($commentId, array $fields)
    {
    }
    /**
     * Returns entity fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    /**
     * Preparing data before creating a new entity.
     *
     * @param Container $container
     * @param array $fields List entity fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $entityId Entity id.
     * @param int $copiedEntityId Copied entity id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId)
    {
    }
    /**
     * Updates identifiers who's added to text.
     *
     * @param int $id Id of the entity whose text will be updated.
     * @param array $attachedIds
     * @param callable $auxiliaryCallback
     */
    public function updateAttachedIdsInText(int $id, array $attachedIds, callable $auxiliaryCallback) : void
    {
    }
    protected function getText($commentId)
    {
    }
}