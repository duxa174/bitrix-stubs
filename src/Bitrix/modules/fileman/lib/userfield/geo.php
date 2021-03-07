<?php

namespace Bitrix\Fileman\UserField;

/**
 * Class Geo
 * @deprecated
 */
class Geo extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = 'geo';
    function getUserTypeDescription()
    {
    }
    function getDBColumnType($arUserField)
    {
    }
    function prepareSettings($arUserField)
    {
    }
    function onBeforeSave($userField, $value)
    {
    }
    public function onAfterFetch($userfield, $fetched)
    {
    }
    function getSettingsHtml($arUserField = false, $arHtmlControl, $bVarsFromForm)
    {
    }
    function getEditFormHTML($arUserField, $arHtmlControl)
    {
    }
    function getEditFormHTMLMulty($arUserField, $arHtmlControl)
    {
    }
    protected function showAdminEdit($arUserField, $arHtmlControl, $multiple = false)
    {
    }
    public static function getPublicEdit($arUserField, $arAdditionalParameters = array())
    {
    }
    public static function getPublicView($arUserField, $arAdditionalParameters = array())
    {
    }
    protected function getCenter($arUserField, $pointList)
    {
    }
}