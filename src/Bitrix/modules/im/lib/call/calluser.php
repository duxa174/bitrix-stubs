<?php

namespace Bitrix\Im\Call;

class CallUser
{
    const LAST_SEEN_THRESHOLD = 75;
    const STATE_UNAVAILABLE = 'unavailable';
    const STATE_IDLE = 'idle';
    const STATE_CALLING = 'calling';
    const STATE_DECLINED = 'declined';
    const STATE_BUSY = 'busy';
    const STATE_READY = 'ready';
    protected $userId;
    protected $callId;
    protected $state;
    protected $lastSeen;
    protected $isMobile;
    public static function create(array $fields)
    {
    }
    /**
     * @return string
     */
    public function getState()
    {
    }
    public function isSeenRecently()
    {
    }
    public function updateState($state)
    {
    }
    /**
     * @return DateTime
     */
    public function getLastSeen()
    {
    }
    /**
     * Update user's last seen date.
     *
     * @param DateTime $lastSeen
     */
    public function updateLastSeen(\Bitrix\Main\Type\DateTime $lastSeen)
    {
    }
    /**
     * Returns true if the user is an active participant of the call and false otherwise.
     *
     * @return bool
     */
    public function isActive()
    {
    }
    public function isUaMobile()
    {
    }
    public function setFields(array $fields)
    {
    }
    public function save()
    {
    }
    public function update(array $fields)
    {
    }
    public static function delete($callId, $userId)
    {
    }
}