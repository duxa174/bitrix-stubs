<?php

namespace Bitrix\Vote\Copy\Implement;

class Vote extends \Bitrix\Main\Copy\CopyImplementer
{
    private $resetVotingResult = true;
    public function setResetVotingResult(bool $bool) : void
    {
    }
    /**
     * @var EntityCopier|null
     */
    private $questionCopier = null;
    /**
     * To copy questions needs question copier.
     * @param EntityCopier $questionCopier
     */
    public function setQuestionCopier(\Bitrix\Main\Copy\EntityCopier $questionCopier) : void
    {
    }
    /**
     * Adds vote.
     *
     * @param Container $container
     * @param array $fields
     * @return bool|int
     * @throws \Exception
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns vote fields.
     * @param Container $container
     * @param int $entityId
     * @return array
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
     * @param int $entityId Vote id.
     * @param int $copiedEntityId Copied vote id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId)
    {
    }
    private function copyQuestion(int $voteId, int $copiedVoteId)
    {
    }
    private function copyEvents($voteId, $copiedVoteId, \Bitrix\Main\Result $result)
    {
    }
    private function getCopiedIdsRelation(\Bitrix\Main\Result $result)
    {
    }
    /**
     * @param $voteId
     * @param $copiedIdsRelation
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private function getEventBallots($voteId, $copiedIdsRelation)
    {
    }
}