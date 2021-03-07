<?php

namespace Bitrix\Im\Call\Integration;

abstract class AbstractEntity
{
    protected $entityId;
    protected $userId;
    /** @var Call */
    protected $call;
    public function __construct(\Bitrix\Im\Call\Call $call, $entityId, $userId = 0)
    {
    }
    public function getEntityId($currentUserId = 0)
    {
    }
    /**
     * @return Call
     */
    public function getCall()
    {
    }
    /**
     * @param Call $call
     */
    public function setCall(\Bitrix\Im\Call\Call $call)
    {
    }
    public abstract function getEntityType();
    public abstract function checkAccess($userId);
    public abstract function getChatId();
    public abstract function getUsers();
    public abstract function getName($currentUserId);
    public abstract function onUserAdd($userId);
    public abstract function onStateChange($state, $prevState);
    public function toArray($currentUserId = 0)
    {
    }
    protected function getCurrentUserId()
    {
    }
}