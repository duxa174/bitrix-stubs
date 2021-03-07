<?php

class CAllTicketSLA
{
    const SLA_SITE = 1;
    const SITE_SLA = 2;
    function err_mess()
    {
    }
    // add new or modify exist SLA
    function Set($arFields, $id, $checkRights = \true)
    {
    }
    // delete SLA
    function Delete($id, $checkRights = \true)
    {
    }
    // get SLA by ID
    function GetByID($id)
    {
    }
    // get shedule array by SLA ID
    function GetSheduleArray($slaID)
    {
    }
    function GetGroupArray($slaID)
    {
    }
    public static function GetGroupArrayForAllSLA()
    {
    }
    function GetSiteArray($slaID)
    {
    }
    function GetSiteArrayForAllSLA($p = self::SLA_SITE)
    {
    }
    function GetCategoryArray($slaID)
    {
    }
    function GetCriticalityArray($slaID)
    {
    }
    function GetMarkArray($slaID)
    {
    }
    function GetDropDown($siteID = "")
    {
    }
    function GetForUser($siteID = \false, $userID = \false)
    {
    }
    function GetSLA($siteID, $userID, $categoryID = \null, $coupon = "")
    {
    }
}