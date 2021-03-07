<?php

namespace Bitrix\Main\Access;

interface AccessibleController
{
    public static function can($userId, string $action, $itemId = null, $params = null) : bool;
    public function __construct(int $userId);
    public function getUser() : \Bitrix\Main\Access\User\AccessibleUser;
    public function checkByItemId(string $action, int $itemId = null, $params = null) : bool;
    public function check(string $action, \Bitrix\Main\Access\AccessibleItem $item = null, $params = null) : bool;
    public function batchCheck(array $request, \Bitrix\Main\Access\AccessibleItem $item) : array;
}