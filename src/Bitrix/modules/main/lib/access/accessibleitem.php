<?php

namespace Bitrix\Main\Access;

interface AccessibleItem
{
    public static function createFromId(int $itemId) : \Bitrix\Main\Access\AccessibleItem;
    public function getId() : int;
}