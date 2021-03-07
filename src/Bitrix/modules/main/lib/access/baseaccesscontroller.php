<?php

namespace Bitrix\Main\Access;

abstract class BaseAccessController implements \Bitrix\Main\Access\AccessibleController
{
    protected const RULE_SUFFIX = 'Rule';
    protected static $register = [];
    /* @var AccessibleUser $user */
    protected $user;
    public static function getInstance($userId)
    {
    }
    public static function can($userId, string $action, $itemId = null, $params = null) : bool
    {
    }
    public function __construct(int $userId)
    {
    }
    public function getUser() : \Bitrix\Main\Access\User\AccessibleUser
    {
    }
    public function checkByItemId(string $action, int $itemId = null, $params = null) : bool
    {
    }
    public function check(string $action, \Bitrix\Main\Access\AccessibleItem $item = null, $params = null) : bool
    {
    }
    /**
     * @param AccessibleItem $item
     * @param array $request
     * 	[
     * 		actionId => params
     * 	]
     * @return array
     * 	[
     * 		actionId => true|false
     * 	]
     * @throws UnknownActionException
     */
    public function batchCheck(array $request, \Bitrix\Main\Access\AccessibleItem $item) : array
    {
    }
    protected abstract function loadItem(int $itemId = null) : ?\Bitrix\Main\Access\AccessibleItem;
    protected abstract function loadUser(int $userId) : \Bitrix\Main\Access\User\AccessibleUser;
    protected function getRuleName(string $action) : ?string
    {
    }
    protected function getRuleNamespace() : string
    {
    }
    protected function sendEvent(string $eventName, string $action, \Bitrix\Main\Access\AccessibleItem $item = null, $params = null, bool $isAccess = null)
    {
    }
}