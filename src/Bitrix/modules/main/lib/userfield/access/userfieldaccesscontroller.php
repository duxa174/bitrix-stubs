<?php

namespace Bitrix\Main\UserField\Access;

class UserFieldAccessController extends \Bitrix\Main\Access\BaseAccessController
{
    public static function getAccessibleFields($userId, string $action, $itemId = null, $params = null) : array
    {
    }
    public function checkByItemsId(string $action, iterable $itemId = null, $params = null) : array
    {
    }
    protected function loadItems(iterable $itemsId = null) : array
    {
    }
    public function massCheck(string $action, array $items = null, $params = null) : array
    {
    }
    protected function loadItem(int $itemId = null) : \Bitrix\Main\Access\AccessibleItem
    {
    }
    protected function loadUser(int $userId) : \Bitrix\Main\Access\User\AccessibleUser
    {
    }
}