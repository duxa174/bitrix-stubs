<?php

class CTicket extends \CAllTicket
{
    public static function isnull($field, $alternative)
    {
    }
    public static function err_mess()
    {
    }
    public static function AutoClose()
    {
    }
    public static function CleanUpOnline()
    {
    }
    public static function GetOnline($ticketID)
    {
    }
    public static function DeleteMessage($ID, $checkRights = "Y")
    {
    }
    public static function UpdateMessage($MESSAGE_ID, $arFields, $checkRights = "Y")
    {
    }
    public static function AddMessage($ticketID, $arFields, &$arrFILES, $checkRights = "Y")
    {
    }
    public static function GetStatus($ticketID)
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array(), &$isFiltered, $checkRights = "Y", $getUserName = "Y", $getExtraNames = "Y", $siteID = \false, $arParams = array())
    {
    }
    public static function GetSupportTeamList()
    {
    }
    /*function GetResponsibleList($user_id)
    	{
    		$err_mess = (CTicket::err_mess())."<br>Function: GetSupportTeamMailList<br>Line: ";
    		global $DB;
    
    		$strSql = "
    			SELECT DISTINCT
    				U.ID as ID,
    				U.LOGIN as LOGIN,
    				concat('[',U.ID,'] ',' (',U.LOGIN,') ',ifnull(U.NAME,''),' ',ifnull(U.LAST_NAME,'')) as NAME,
    				U.EMAIL as EMAIL
    			FROM
    				b_user U,
    				b_ticket_user_ugroup TUG,
    				b_ticket_user_ugroup TUG2
    			WHERE
    				TUG.USER_ID = '".intval($user_id)."'
    			and TUG2.GROUP_ID = TUG.GROUP_ID
    			and U.ID = TUG2.USER_ID
    			and TUG2.CAN_MAIL_GROUP_MESSAGES = 'Y'
    			ORDER BY
    				U.ID
    			";
    		$res = $DB->Query($strSql, false, $err_mess.__LINE__);
    		return $res;
    	}*/
    public static function GetMessageList(&$by, &$order, $arFilter = array(), &$isFiltered, $checkRights = "Y", $getUserName = "Y")
    {
    }
    public static function GetDynamicList(&$by, &$order, $arFilter = array())
    {
    }
    public static function GetMessageDynamicList(&$by, &$order, $arFilter = array())
    {
    }
}