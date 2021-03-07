<?php

class CAllVote
{
    public static function err_mess()
    {
    }
    public static function GetFilterOperation($key)
    {
    }
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    /**
     * @deprecated 18.5.1
     * @param array $arFields
     * @param bool $strUploadDir
     * @return array|bool|int
     * @throws Exception
     */
    public static function Add($arFields, $strUploadDir = \false)
    {
    }
    /**
     * @deprecated 18.5.1
     * @param $ID
     * @param $arFields
     * @param bool $strUploadDir
     * @return bool|int
     */
    public static function Update($ID, $arFields, $strUploadDir = \false)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function Reset($ID)
    {
    }
    public static function Copy($ID)
    {
    }
    public static function IsOldVersion()
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetByIDEx($ID)
    {
    }
    public static function UserAlreadyVote($voteId, $VOTE_USER_ID, $UNIQUE_TYPE, $delay, $USER_ID = \false)
    {
    }
    public static function UserGroupPermission($CHANNEL_ID)
    {
    }
    public static function SetVoteUserID()
    {
    }
    public static function UpdateVoteUserID($VOTE_USER_ID)
    {
    }
    public static function keepVoting()
    {
    }
    public static function GetNextSort($CHANNEL_ID)
    {
    }
    public static function WrongDateInterval($CURRENT_VOTE_ID, $DATE_START, $DATE_END, $CHANNEL_ID)
    {
    }
}
class _CVoteDBResult extends \CDBResult
{
    function _CVoteDBResult($res, $params = array())
    {
    }
    function Fetch()
    {
    }
}