<?php

class CAuthProvider
{
    protected $id;
    public function DeleteByUser($USER_ID)
    {
    }
    public function DeleteAll()
    {
    }
}
interface IProviderInterface
{
    public function GetFormHtml($arParams = \false);
    public function GetNames($arCodes);
}
class CGroupAuthProvider extends \CAuthProvider implements \IProviderInterface
{
    const ID = 'group';
    public function __construct()
    {
    }
    public function UpdateCodes($USER_ID)
    {
    }
    public static function OnBeforeGroupUpdate($ID, &$arFields)
    {
    }
    public static function OnAfterGroupAdd(&$arFields)
    {
    }
    public static function OnBeforeGroupDelete($ID)
    {
    }
    public static function OnAfterSetUserGroup($USER_ID)
    {
    }
    public static function OnUserLogin($USER_ID)
    {
    }
    protected static function RecalculateForGroup($ID)
    {
    }
    public function AjaxRequest()
    {
    }
    public function GetFormHtml($arParams = \false)
    {
    }
    public function GetNames($arCodes)
    {
    }
}
class CUserAuthProvider extends \CAuthProvider implements \IProviderInterface
{
    const ID = 'user';
    public function __construct()
    {
    }
    public function UpdateCodes($USER_ID)
    {
    }
    public function AjaxRequest()
    {
    }
    public function GetFormHtml($arParams = \false)
    {
    }
    public function GetNames($arCodes)
    {
    }
    public static function OnUserLogin($USER_ID)
    {
    }
}
class COtherAuthProvider implements \IProviderInterface
{
    public function GetFormHtml($arParams = \false)
    {
    }
    public function GetNames($arCodes)
    {
    }
}