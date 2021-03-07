<?php

namespace Bitrix\Vote\Copy\Implement;

class Question extends \Bitrix\Main\Copy\CopyImplementer
{
    private $resetVotingResult = true;
    public function setResetVotingResult(bool $bool) : void
    {
    }
    /**
     * @var EntityCopier|null
     */
    private $answerCopier = null;
    /**
     * To copy questions needs question copier.
     * @param EntityCopier $answerCopier
     */
    public function setAnswerCopier(\Bitrix\Main\Copy\EntityCopier $answerCopier) : void
    {
    }
    /**
     * Adds question.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool return entity id or false.
     * @throws \Exception
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns question fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
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
    private function copyAnswer(int $questionId, int $copiedQuestionId)
    {
    }
}