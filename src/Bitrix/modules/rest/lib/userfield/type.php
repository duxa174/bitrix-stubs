<?php

namespace Bitrix\Rest\UserField;

class Type extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = 'rest';
    function getDBColumnType()
    {
    }
    public static function getPublicView($arUserField, $arAdditionalParameters = array())
    {
    }
    public static function getPublicEdit($arUserField, $arAdditionalParameters = array())
    {
    }
    function getEditFormHTML($arUserField, $arHtmlControl)
    {
    }
    function getEditFormHTMLMulty($arUserField, $arHtmlControl)
    {
    }
    protected static function getApplication($arUserField, $arHtmlControl, $mode = 'edit')
    {
    }
    function prepareSettings($arUserField)
    {
    }
    function getSettingsHTML($arUserField = false, $arHtmlControl, $bVarsFromForm)
    {
    }
    function getFilterHTML($arUserField, $arHtmlControl)
    {
    }
    function getFilterData($arUserField, $arHtmlControl)
    {
    }
    function getAdminListViewHTML($arUserField, $arHtmlControl)
    {
    }
    function getAdminListViewHTMLMulty($arUserField, $arHtmlControl)
    {
    }
    function getAdminListEditHTML($arUserField, $arHtmlControl)
    {
    }
    function getAdminListEditHTMLMulty($arUserField, $arHtmlControl)
    {
    }
}