<?php

namespace Bitrix\Sale\Rest\Entity;

class RelationType
{
    const UNDEFINED = 0;
    const PAYSYSTEM = 1;
    const DELIVERY = 2;
    const PAYSYSTEM_NAME = 'P';
    const DELIVERY_NAME = 'D';
    private static $descriptions = [];
    public static function isDefined($typeID)
    {
    }
    public static function resolveName($typeID)
    {
    }
    public static function resolveID($name)
    {
    }
    public static function getAllDescriptions()
    {
    }
    public static function getDescription($typeId)
    {
    }
}