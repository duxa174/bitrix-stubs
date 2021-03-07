<?php

namespace Bitrix\Main\UserField\Internal;

/**
 * @deprecated
 */
final class UserFieldHelper
{
    /** @var UserFieldHelper */
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns Singleton of Driver
     * @return UserFieldHelper
     */
    public static function getInstance() : \Bitrix\Main\UserField\Internal\UserFieldHelper
    {
    }
    /**
     * @return \CUserTypeManager
     */
    public function getManager() : ?\CUserTypeManager
    {
    }
    /**
     * @return \CAllMain
     */
    public function getApplication() : ?\CAllMain
    {
    }
    /**
     * @param $entityId
     * @return array|null
     */
    public function parseUserFieldEntityId(string $entityId) : ?array
    {
    }
    /**
     * @param $field
     * @return array|bool
     */
    public static function OnBeforeUserTypeAdd($field)
    {
    }
    /**
     * @param $field
     * @return array|bool
     */
    public static function onAfterUserTypeAdd($field)
    {
    }
    /**
     * @param $field
     * @return array|bool
     */
    public static function OnBeforeUserTypeDelete($field)
    {
    }
    public static function onGetUserFieldValues(\Bitrix\Main\Event $event) : \Bitrix\Main\EventResult
    {
    }
    public static function onUpdateUserFieldValues(\Bitrix\Main\Event $event) : \Bitrix\Main\EventResult
    {
    }
    public static function onDeleteUserFieldValues(\Bitrix\Main\Event $event) : \Bitrix\Main\EventResult
    {
    }
}