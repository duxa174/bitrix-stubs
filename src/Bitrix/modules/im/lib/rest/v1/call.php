<?php

namespace Bitrix\Im\Rest\v1;

class Call extends \Bitrix\Main\Engine\Controller
{
    public function createAction($type, $provider, $entityType, $entityId, $joinExisting = false)
    {
    }
    public function createChildCallAction($parentId, $newProvider, $newUsers)
    {
    }
    public function tryJoinCallAction($type, $provider, $entityType, $entityId)
    {
    }
    public function getAction($callId)
    {
    }
    public function inviteAction($callId, array $userIds, $video = "N")
    {
    }
    public function cancelAction($callId)
    {
    }
    public function answerAction($callId, $callInstanceId)
    {
    }
    public function declineAction($callId, $callInstanceId, $code = 603)
    {
    }
    /**
     * @param $callId
     * @return bool
     */
    public function pingAction($callId, $requestId, $retransmit = true)
    {
    }
    public function negotiationNeededAction($callId, $userId, $restart = false)
    {
    }
    public function connectionOfferAction($callId, $userId, $connectionId, $sdp, $userAgent)
    {
    }
    public function connectionAnswerAction($callId, $userId, $connectionId, $sdp, $userAgent)
    {
    }
    public function iceCandidateAction($callId, $userId, $connectionId, array $candidates)
    {
    }
    public function hangupAction($callId, $callInstanceId, $retransmit = true)
    {
    }
    public function getUsersAction($callId, array $userIds)
    {
    }
    protected function checkCallAccess(\Bitrix\Im\Call\Call $call, $userId)
    {
    }
}