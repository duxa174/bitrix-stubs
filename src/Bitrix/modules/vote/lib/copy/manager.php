<?php

namespace Bitrix\Vote\Copy;

class Manager
{
    private $voteIdsToCopy;
    private $resetVotingResult = true;
    private $markerQuestion = true;
    private $markerAnswer = true;
    public function __construct(array $voteIdsToCopy)
    {
    }
    public function markQuestion($marker)
    {
    }
    public function markAnswer($marker)
    {
    }
    public function setResetVotingResult(bool $bool) : void
    {
    }
    public function startCopy()
    {
    }
    private function getContainerCollection()
    {
    }
    private function getVoteCopier()
    {
    }
    private function getQuestionCopier()
    {
    }
    private function getAnswerCopier()
    {
    }
}