<?php

class CAllStatistics extends \CKeepStatistics
{
    public static function GetAdvGuestHost($ADV_ID, $GUEST_ID, $IP_NUMBER, $BACK = "")
    {
    }
    public static function StartBuffer()
    {
    }
    public static function EndBuffer(&$content)
    {
    }
    public static function DBDateCompare($FIELD_NAME, $DATE = \false, $DATE_FORMAT = "SHORT")
    {
    }
    function CleanUpStatistics_1()
    {
    }
    function CleanUpStatistics_2()
    {
    }
    ///////////////////////////////////////////////////////////////////
    // This is deprecated and unused method to handle internal search
    ///////////////////////////////////////////////////////////////////
    function OnSearch($search_phrase)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // ��������� ������� �� ��������� ��������
    ///////////////////////////////////////////////////////////////////
    public static function Update_Adv()
    {
    }
    ///////////////////////////////////////////////////////////////////
    // ������������� ��������� ��������
    ///////////////////////////////////////////////////////////////////
    public static function Set_Adv()
    {
    }
    ///////////////////////////////////////////////////////////////////
    // ������������� ID �����
    ///////////////////////////////////////////////////////////////////
    public static function Set_Guest()
    {
    }
    ///////////////////////////////////////////////////////////////////
    //	������� ���������� ���������� �� ���������� ������ ����������,
    //	���������� true ���� ���������� ���� �����������
    ///////////////////////////////////////////////////////////////////
    public static function BlockVisitorActivity()
    {
    }
    public static function GetAuditTypes()
    {
    }
    public static function Set404($table = \false, $where = \false, $arrUpdate = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // ������� ���������� �� ������������ ����
    ///////////////////////////////////////////////////////////////////
    public static function CleanUp($cleanup_date = "", &$arErrors)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // �������� ���������� ����������� ��� ����� ������� ������
    ///////////////////////////////////////////////////////////////////
    public static function RecountBaseCurrency($new_base_currency)
    {
    }
    // ������� ��� �������������
    public static function GetEventParam($site_id = \false)
    {
    }
    public static function Set_Event($event1, $event2 = "", $event3 = "", $goto = "", $money = "", $currency = "", $chargeback = "N", $site_id = \false)
    {
    }
    public static function CheckForDDL()
    {
    }
    public static function GetDDL()
    {
    }
    public static function ExecuteDDL($ID)
    {
    }
}