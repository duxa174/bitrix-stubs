<?php

namespace Bitrix\Im\Call;

class Call
{
    const STATE_NEW = 'new';
    const STATE_INVITING = 'inviting';
    const STATE_ANSWERED = 'answered';
    const STATE_FINISHED = 'finished';
    const TYPE_INSTANT = 1;
    const TYPE_PERMANENT = 2;
    const PROVIDER_PLAIN = 'Plain';
    const PROVIDER_VOXIMPLANT = 'Voximplant';
    protected $id;
    protected $type;
    protected $initiatorId;
    protected $isPublic = false;
    protected $publicId;
    protected $provider;
    protected $entityType;
    protected $entityId;
    protected $parentId;
    protected $state;
    protected $startDate;
    protected $endDate;
    protected $logUrl;
    protected $chatId;
    /** @var Integration\AbstractEntity */
    protected $associatedEntity = null;
    /** @var CallUser[] */
    protected $users;
    /** @var Signaling */
    protected $signaling;
    /**
     * Use one of the named constructors
     */
    protected function __construct()
    {
    }
    /**
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @return string
     */
    public function getProvider()
    {
    }
    /**
     * @return int
     */
    public function getInitiatorId()
    {
    }
    /**
     * @param $userId
     * @return CallUser|null
     */
    public function getUser($userId)
    {
    }
    /**
     * Returns arrays of ids of the users, currently participating in the call.
     * @return int[]
     */
    public function getUsers()
    {
    }
    /**
     * Return true if a user is the part of the call.
     *
     * @param int $userId Id of the user.
     * @return bool
     */
    public function hasUser($userId)
    {
    }
    /**
     * Adds new user to the call.
     *
     * @param int $newUserId
     * @return CallUser|false
     */
    public function addUser($newUserId)
    {
    }
    public function removeUser($userId)
    {
    }
    /**
     * Call is considered active if it has at least:
     *  - one user in ready state
     *  - another user in ready or calling state
     * @return bool
     */
    public function hasActiveUsers()
    {
    }
    public function getSignaling()
    {
    }
    /**
     * @return Integration\AbstractEntity|null
     */
    public function getAssociatedEntity()
    {
    }
    public function setAssociatedEntity($entityType, $entityId)
    {
    }
    /**
     * Returns true if specified user has access to the call.
     *
     * @param int $userId Id of the user.
     * @return bool
     */
    public function checkAccess($userId)
    {
    }
    /**
     * @return string
     */
    public function getState()
    {
    }
    /**
     * @param string $state
     */
    public function updateState($state)
    {
    }
    public function setLogUrl(string $logUrl)
    {
    }
    public function finish()
    {
    }
    public function toArray($currentUserId = 0)
    {
    }
    public function save()
    {
    }
    public function makeClone($newProvider = null)
    {
    }
    protected function loadUsers()
    {
    }
    protected function saveStat()
    {
    }
    public function getMaxUsers()
    {
    }
    public function getLogToken(int $userId = 0, int $ttl = 3600) : string
    {
    }
    public static function getLogService() : string
    {
    }
    public static function getMaxCallServerParticipants()
    {
    }
    /**
     * Use this constructor only for creating new calls
     */
    public static function createWithEntity($type, $provider, $entityType, $entityId, $initiatorId)
    {
    }
    /**
     * @param string $type
     * @param string $provider
     * @param string $entityType
     * @param string $entityId
     * @return Call|null
     *
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function searchActive($type, $provider, $entityType, $entityId)
    {
    }
    /**
     * Creates new instance of the Call with values from the database.
     *
     * @param array $fields Call fields
     * @return Call
     */
    public static function createWithArray(array $fields)
    {
    }
    /**
     * Loads instance of the Call from the database using call's public id.
     *
     * @param string $publicId
     * @return Call|false
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function createWithPublicId($publicId)
    {
    }
    public static function loadWithId($id)
    {
    }
    public static function isCallServerEnabled()
    {
    }
    protected function getCurrentUserId() : int
    {
    }
    public static function onVoximplantConferenceFinished(\Bitrix\Main\Event $event)
    {
    }
}