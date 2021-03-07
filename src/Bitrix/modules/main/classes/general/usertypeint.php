<?php

/**
 * Class CUserTypeInteger
 * Type for custom properties - STRING
 *
 * @package usertype
 * @subpackage classes
 * @deprecated deprecated since main 20.0.700
 */
class CUserTypeInteger extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = \Bitrix\Main\UserField\Types\IntegerType::USER_TYPE_ID;
    function getUserTypeDescription()
    {
    }
    function getSettingsHtml($userField, $additionalParameters, $varsFromForm)
    {
    }
    function getEditFormHtml($userField, $additionalParameters)
    {
    }
    function getFilterHtml($userField, $additionalParameters)
    {
    }
    function getAdminListViewHtml($userField, $additionalParameters)
    {
    }
    function getAdminListEditHtml($userField, $additionalParameters)
    {
    }
    public function getPublicView($userField, $additionalParameters = array())
    {
    }
    public function getPublicEdit($userField, $additionalParameters = array())
    {
    }
    function getDbColumnType($userField)
    {
    }
    function getFilterData($userField, $additionalParameters)
    {
    }
    function prepareSettings($userField)
    {
    }
    function checkFields($userField, $value)
    {
    }
}