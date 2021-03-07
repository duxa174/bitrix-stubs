<?php

namespace Bitrix\Forum\Copy\Implement;

class Topic extends \Bitrix\Main\Copy\CopyImplementer
{
    const TOPIC_COPY_ERROR = "TOPIC_COPY_ERROR";
    /**
     * @var EntityCopier|null
     */
    private $commentCopier;
    /**
     * @param EntityCopier $commentCopier
     */
    public function setCommentCopier(\Bitrix\Main\Copy\EntityCopier $commentCopier) : void
    {
    }
    /**
     * @param Container $container
     * @param array $fields
     * @return int|bool Added topic id or false.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns topic fields.
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
     * Starts copying messages.
     *
     * @param Container $container
     * @param int $entityId Topic id.
     * @param int $copiedEntityId Copied topic id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId)
    {
    }
    private function cleanDataToCopy(array $fields)
    {
    }
}