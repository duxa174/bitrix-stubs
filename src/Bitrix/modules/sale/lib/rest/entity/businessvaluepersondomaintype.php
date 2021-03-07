<?php

namespace Bitrix\Sale\Rest\Entity;

class BusinessValuePersonDomainType
{
    const UNDEFINED = 0;
    const TYPE_I = 1;
    const TYPE_E = 2;
    const TYPE_I_NAME = 'I';
    const TYPE_E_NAME = 'E';
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