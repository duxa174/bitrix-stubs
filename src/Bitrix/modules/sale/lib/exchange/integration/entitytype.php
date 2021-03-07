<?php

namespace Bitrix\Sale\Exchange\Integration;

class EntityType
{
    const UNDEFINED = 0;
    const ORDER = 1;
    const USER = 2;
    private static $ALL_DESCRIPTIONS = array();
    public static function getDescription($typeId)
    {
    }
    public static function getAllDescriptions()
    {
    }
}