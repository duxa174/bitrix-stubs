<?php

class CSubscriptionGeneral
{
    var $LAST_ERROR = "";
    var $LAST_MESSAGE = "";
    public static function GetList($aSort = array(), $arFilter = array(), $arNavStartParams = \false)
    {
    }
    //list of subscribed categories
    public static function GetRubricList($ID)
    {
    }
    //array of subscribed categories
    public static function GetRubricArray($ID)
    {
    }
    //subscription of current user from cookies
    public static function GetUserSubscription()
    {
    }
    //get by ID
    public static function GetByID($ID)
    {
    }
    // deletion
    public static function Delete($ID)
    {
    }
    //check fields before writing
    public function CheckFields(&$arFields, $ID, $SITE_ID = \SITE_ID)
    {
    }
    //link with categories
    function UpdateRubrics($ID, $aRubric, $SITE_ID = \false)
    {
    }
    //adding
    public function Add($arFields, $SITE_ID = \SITE_ID)
    {
    }
    //Updating record
    public function Update($ID, $arFields, $SITE_ID = \SITE_ID)
    {
    }
    //message with subscription confirmation
    public static function ConfirmEvent($ID, $SITE_ID = \SITE_ID)
    {
    }
    //checks and set user authorization
    public static function Authorize($ID, $CONFIRM_CODE = \false)
    {
    }
    //retuns user's subscription authorization
    public static function IsAuthorized($ID)
    {
    }
    //*****************************
    // Events
    //*****************************
    //user deletion event
    public static function OnUserDelete($user_id)
    {
    }
    //user logout event
    public static function OnUserLogout($user_id)
    {
    }
    //*****************************
    // Agents
    //*****************************
    //delete unconfirmed subscriptions
    public static function CleanUp()
    {
    }
}