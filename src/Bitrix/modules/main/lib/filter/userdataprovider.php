<?php

namespace Bitrix\Main\Filter;

class UserDataProvider extends \Bitrix\Main\Filter\EntityDataProvider
{
    /** @var UserSettings|null */
    protected $settings = null;
    function __construct(\Bitrix\Main\Filter\UserSettings $settings)
    {
    }
    public static function extranetSite()
    {
    }
    public static function getFiredAvailability()
    {
    }
    public static function getExtranetAvailability()
    {
    }
    public static function getInvitedAvailability()
    {
    }
    public static function getIntegratorAvailability()
    {
    }
    public static function getAdminAvailability()
    {
    }
    /**
     * Get Settings
     * @return UserSettings
     */
    public function getSettings()
    {
    }
    /**
     * Get specified entity field caption.
     * @param string $fieldID Field ID.
     * @return string
     */
    protected function getFieldName($fieldID)
    {
    }
    public function prepareFieldData($fieldID)
    {
    }
    /**
     * Prepare field list.
     * @return Field[]
     */
    public function prepareFields()
    {
    }
}