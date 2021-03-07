<?php

namespace Bitrix\Main\UrlPreview;

class UrlPreviewUserType
{
    /**
     * Returns url_preview user type description
     *
     * @return array
     */
    public static function getUserTypeDescription()
    {
    }
    /**
     * Return internal type for storing url_preview user type values
     *
     * @param array $userField Array containing parameters of the user field.
     * @return string
     */
    public static function getDBColumnType($userField)
    {
    }
    /**
     * @param array $userField
     * @return array
     */
    public static function prepareSettings($userField)
    {
    }
    /**
     * @param array $userField Array containing parameters of the user field.
     * @param $htmlControl
     * @param $varsFromForm
     * @return string
     */
    public static function getSettingsHTML($userField, $htmlControl, $varsFromForm)
    {
    }
    /**
     * @param array $userField Array containing parameters of the user field.
     * @param array $htmlControl
     * @return string
     */
    public static function getEditFormHTML($userField, $htmlControl)
    {
    }
    /**
     * @param array $userField Array containing parameters of the user field.
     * @param array $htmlControl
     * @return string
     */
    public static function getFilterHTML($userField, $htmlControl)
    {
    }
    /**
     * @param array $userField Array containing parameters of the user field.
     * @param array $htmlControl
     * @return string
     */
    public static function getAdminListViewHTML($userField, $htmlControl)
    {
    }
    /**
     * @param array $userField Array containing parameters of the user field.
     * @param array $htmlControl
     * @return string
     */
    public static function getAdminListEditHTML($userField, $htmlControl)
    {
    }
    /**
     * @param array $userField Array containing parameters of the user field.
     * @param array $htmlControl
     * @return string
     */
    public static function getAdminListEditHTMLMulty($userField, $htmlControl)
    {
    }
    /**
     * @param array $userField Array containing parameters of the user field.
     * @param array $params
     * @param array $setting
     * @return string
     */
    public static function getPublicViewHTML($userField, $id, $params = "", $settings = array())
    {
    }
    /**
     * Checks for current user's access to $value.
     *
     * @param array $userField Array containing parameters of the user field.
     * @param int $value
     * @return array
     */
    public static function checkfields($userField, $value)
    {
    }
    /**
     * Hook executed before saving url_preview user type value. Checks and removes signature of the $value.
     * If signature is correct, checks current user's access to $value.
     *
     * @param array $userField Array containing parameters of the user field.
     * @param string $value Signed value of the user field.
     * @return int Unsigned value of the user field, or null in case of errors.
     */
    public static function onBeforeSave($userField, $value)
    {
    }
}