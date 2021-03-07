<?php

namespace Bitrix\Im\Call;

class Signaling
{
    protected $call;
    public function __construct(\Bitrix\Im\Call\Call $call)
    {
    }
    public function sendInvite(int $senderId, array $toUserIds, $isMobile, $video = false)
    {
    }
    protected function getInvitePush(int $senderId, int $toUserId, $isMobile, $video)
    {
    }
    public function sendUsersJoined(int $senderId, array $joinedUsers)
    {
    }
    public function sendUsersInvited(int $senderId, array $toUserIds, array $users)
    {
    }
    public function sendAssociatedEntityReplaced(int $senderId)
    {
    }
    public function sendAnswer(int $senderId, $callInstanceId, $isMobile)
    {
    }
    public function sendPing(int $senderId, $requestId)
    {
    }
    public function sendNegotiationNeeded(int $senderId, int $toUserId, $restart)
    {
    }
    public function sendConnectionOffer(int $senderId, int $toUserId, string $connectionId, string $offerSdp, string $userAgent)
    {
    }
    public function sendConnectionAnswer(int $senderId, int $toUserId, string $connectionId, string $answerSdp, string $userAgent)
    {
    }
    public function sendIceCandidates(int $senderId, int $toUserId, string $connectionId, array $iceCandidates)
    {
    }
    public function sendHangup(int $senderId, array $toUserIds, string $callInstanceId, $code = 200)
    {
    }
    public function sendFinish()
    {
    }
    protected function getPublicIds(array $userIds)
    {
    }
    protected function send(string $command, $users, array $params = [], $push = null, $ttl = 5)
    {
    }
}