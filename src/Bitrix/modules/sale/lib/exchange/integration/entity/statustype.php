<?php

namespace Bitrix\Sale\Exchange\Integration\Entity;

class StatusType
{
    const UNDEFINED = 0;
    const SUCCESS = 1;
    const PROCESS = 2;
    const FAULTY = 3;
    const SUCCESS_NAME = 'S';
    const PROCESS_NAME = 'P';
    const FAULTY_NAME = 'F';
    private static $ALL_DESCRIPTIONS = array();
    public static function isDefined($typeId)
    {
    }
    public static function resolveId($name)
    {
    }
    public static function resolveName($typeId)
    {
    }
    public static function getDescription($typeId)
    {
    }
    public static function getAllDescriptions()
    {
    }
}