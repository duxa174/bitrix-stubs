<?php

namespace Bitrix\Im\Call\Integration;

class Chat extends \Bitrix\Im\Call\Integration\AbstractEntity
{
    protected $chatId;
    protected $chatFields;
    protected $chatUsers = [];
    const MUTE_MESSAGE = true;
    public function __construct(\Bitrix\Im\Call\Call $call, $entityId)
    {
    }
    /**
     * Returns associated entity type.
     *
     * @return string
     */
    public function getEntityType()
    {
    }
    public function getEntityId($currentUserId = 0)
    {
    }
    public function getChatId()
    {
    }
    /**
     * Returns list of users in the chat
     *
     * @return array
     */
    public function getUsers()
    {
    }
    /**
     * Returns true is user can call users in the associated chat and false otherwise.
     *
     * @param int $userId
     * @return bool
     */
    public function checkAccess($userId)
    {
    }
    /**
     * Returns associated entity name.
     *
     * @param int $currentUserId Id of the user.
     * @return string|false
     */
    public function getName($currentUserId)
    {
    }
    public function getAvatar($currentUserId)
    {
    }
    public function getAvatarColor($currentUserId)
    {
    }
    public function onUserAdd($userId)
    {
    }
    public function onStateChange($state, $prevState)
    {
    }
    public function sendMessage($message, $muted = false)
    {
    }
    public function toArray($currentUserId = 0)
    {
    }
}