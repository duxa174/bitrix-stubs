<?php

class CForumUser extends \CAllForumUser
{
    public static function GetList($arOrder = array("ID" => "ASC"), $arFilter = array(), $arAddParams = array())
    {
    }
    public static function GetListEx($arOrder = array("ID" => "ASC"), $arFilter = array())
    {
    }
    public static function SearchUser($template, $arAddParams = array())
    {
    }
    /**
     * Converts name template fields from Bitrix name template to SQL query fields
     *
     * @param string $sNameTemplate Bitrix name template (ex: #LAST_NAME# #NAME#). Uses site name template if empty @see CSite::GetNameTemplates
     * @return string (ex: U.LAST_NAME, U.NAME)
     */
    public static function GetNameFieldsForQuery($sNameTemplate, $userTablePrefix = "U.")
    {
    }
    public static function GetFormattedNameFieldsForSelect($arParams = array(), $bReturnAll = \true)
    {
    }
}
class CForumSubscribe extends \CAllForumSubscribe
{
}
class CForumRank extends \CAllForumRank
{
    // Tekuwie statusy posetitelej srazu ne pereschityvayutsya. Tol'ko postepenno v processe raboty.
    public static function Add($arFields)
    {
    }
}
class CForumStat extends \CALLForumStat
{
    public static function GetListEx($arOrder = array("ID" => "ASC"), $arFilter = array(), $arAddParams = array())
    {
    }
}