<?php

namespace Bitrix\Im\Call;

class Registry
{
    /** @var Call[] */
    protected static $calls = array();
    /**
     *
     * @param int $id Id of the call
     * @return Call|false
     */
    public static function getCallWithId($id)
    {
    }
    public static function getCallWithPublicId($publicId)
    {
    }
    public static function getCallWithEntity($entityType, $entityId)
    {
    }
}