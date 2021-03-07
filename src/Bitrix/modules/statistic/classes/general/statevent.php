<?php

class CAllStatEvent
{
    ///////////////////////////////////////////////////////////////////
    // Returns string formatted as follows:
    // [sites group ID].<session ID>.<guest ID>.<country ID>.<adv compaign ID>.<adv compaign return Y|N>.<site ID>
    ///////////////////////////////////////////////////////////////////
    public static function GetGID($site_id = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Event creation
    ///////////////////////////////////////////////////////////////////
    public static function AddCurrent($event1, $event2 = "", $event3 = "", $money = "", $currency = "", $goto = "", $chargeback = "N", $site_id = \false)
    {
    }
    // creates new event by ID
    public static function AddByID($EVENT_ID, $EVENT3, $DATE_ENTER, $PARAM, $MONEY = "", $CURRENCY = "", $CHARGEBACK = "N")
    {
    }
    // creates new event by event1 and event2
    public static function AddByEvents($EVENT1, $EVENT2, $EVENT3, $DATE_ENTER, $PARAM, $MONEY = "", $CURRENCY = "", $CHARGEBACK = "N")
    {
    }
    public static function GetHandlerList(&$arUSER_HANDLERS)
    {
    }
    // decodes EVENT_GID into array
    public static function DecodeGID($EVENT_GID)
    {
    }
    // compatibility
    public static function SetEventType($event1, $event2, &$arEventType)
    {
    }
    public static function GetByEvents($event1, $event2)
    {
    }
    public static function GetEventsByGuest($GUEST_ID, $EVENT_ID = \false, $EVENT3 = \false, $SEC = \false)
    {
    }
    public static function GetListUniqueCheck($arFilter = array(), $LIMIT = 1)
    {
    }
}