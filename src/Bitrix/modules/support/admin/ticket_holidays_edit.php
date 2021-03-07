<?php

class CSupportPage
{
    const AJAX_VAR_NAME = "MY_AJAX";
    const LIST_URL = "ticket_holidays_list.php";
    const SHOW_FORM_SETTINGS = \true;
    const SHOW_USER_FIELDS = \false;
    static $needShowInterface = \true;
    static $needSave = \false;
    static $canNotRead = \false;
    static $objCAdminForm = \null;
    //$tabControl
    static $notSaved = \true;
    static $isErrors = \false;
    static $id = 0;
    static $holidaysFields = \null;
    static $holidaysSlaFields = \null;
    static $postHolidaysFields = \null;
    static $postHolidaysSlaFields = \null;
    static function ProcessAJAX()
    {
    }
    static function GetPost()
    {
    }
    static function Save()
    {
    }
    static function Read()
    {
    }
    static function GetArrayOfTabs()
    {
    }
    static function DoActions()
    {
    }
    static function ShowErrors()
    {
    }
    static function ShowMenu()
    {
    }
    static function Show()
    {
    }
    static function ArrSLAinObj($arr)
    {
    }
}
function Tab1($adminForm)
{
}