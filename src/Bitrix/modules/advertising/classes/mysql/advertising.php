<?php

/*****************************************************************
				����� "��������� ��������"
*****************************************************************/
class CAdvContract extends \CAdvContract_all
{
    public static function err_mess()
    {
    }
    // �������� ������ ����������
    public static function GetList(&$by, &$order, $arFilter = array(), &$is_filtered, $CHECK_RIGHTS = "Y")
    {
    }
}
/*****************************************************************
				����� "��������� ������"
*****************************************************************/
class CAdvBanner extends \CAdvBanner_all
{
    public static function err_mess()
    {
    }
    public static function Update($arFields, $BANNER_ID)
    {
    }
    public static function getCTRSQL()
    {
    }
    public static function addBindField($field, $bannerField, &$modifyStatus)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array(), &$is_filtered, $CHECK_RIGHTS = "Y")
    {
    }
    // ��������� ���� �� ����������� �������
    public static function Click($BANNER_ID)
    {
    }
    // ��������� ������ ����� ���� ��������� �������� ��� ������� ��������
    public static function GetPageWeights_RS()
    {
    }
    // ������������ ���������� ������� ��������� ���������� ������ �� �������� ������� �� ����
    public static function CleanUpDynamics()
    {
    }
    public static function CleanUpAllDynamics()
    {
    }
    public static function GetDynamicList_SQL($strSqlSearch)
    {
    }
}
/*****************************************************************
					����� "��� �������"
*****************************************************************/
class CAdvType extends \CAdvType_all
{
    public static function err_mess()
    {
    }
}