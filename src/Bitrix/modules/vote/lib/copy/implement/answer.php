<?php

namespace Bitrix\Vote\Copy\Implement;

class Answer extends \Bitrix\Main\Copy\CopyImplementer
{
    private $resetVotingResult = true;
    public function setResetVotingResult(bool $bool) : void
    {
    }
    /**
     * Adds answer.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool return answer id or false.
     * @throws \Exception
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns entity fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array|false
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    /**
     * Preparing data before creating a new answer.
     *
     * @param Container $container
     * @param array $fields List answer fields.
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
}