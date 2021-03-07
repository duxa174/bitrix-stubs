<?php

/**
 * Class CSocServAuthDB
 * @deprecated Use \Bitrix\Socialservices\UserTable
 */
class CSocServAuthDB extends \CSocServAuth
{
    public static function Add($arFields)
    {
    }
    public static function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function decryptDbRes(\CDBResult $dbRes)
    {
    }
}
class CSocServMessage extends \CSocServAllMessage
{
    function CleanUp()
    {
    }
    static function Add($arFields)
    {
    }
    function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
}