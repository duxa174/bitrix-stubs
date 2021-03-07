<?php

namespace Bitrix\Sender\Access;

class AccessController extends \Bitrix\Main\Access\BaseAccessController
{
    private const BASE_RULE = 'Base';
    /**
     * Checking access rights by action
     * @param string $action
     * @param AccessibleItem|null $item
     * @param null $params
     *
     * @return bool
     * @throws UnknownActionException
     */
    public function check(string $action, \Bitrix\Main\Access\AccessibleItem $item = null, $params = null) : bool
    {
    }
    protected function getRuleName(string $actionCode) : ?string
    {
    }
    protected function loadItem(int $itemId = null) : ?\Bitrix\Main\Access\AccessibleItem
    {
    }
    protected function loadUser(int $userId) : \Bitrix\Main\Access\User\AccessibleUser
    {
    }
}