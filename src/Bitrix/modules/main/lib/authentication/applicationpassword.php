<?php

namespace Bitrix\Main\Authentication;

class ApplicationPasswordTable extends \Bitrix\Main\ORM\Data\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function getUserValidators()
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * Generates a random password.
     * @return string
     */
    public static function generatePassword()
    {
    }
    /**
     * Finds the application by the user's password.
     *
     * @param int $userId
     * @param string $password
     * @param bool $passwordOriginal
     * @return array|false
     */
    public static function findPassword($userId, $password, $passwordOriginal = true)
    {
    }
    /**
     * Finds the application by the user's digest authentication.
     *
     * @param int $userId
     * @param array $digest See CHTTP::ParseDigest() for the array structure.
     * @return array|false
     */
    public static function findDigestPassword($userId, array $digest)
    {
    }
}