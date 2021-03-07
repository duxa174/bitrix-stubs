<?php

/*****************************************************************
				����� "��������� ��������"
*****************************************************************/
class CAdvContract_all
{
    public static function err_mess()
    {
    }
    public static function GetNextSort()
    {
    }
    /*****************************************************************
    				������ ������� �� ������ � ������ �� ������
    
    	�������������� �����:
    
    	D - ������ ������
    	R - �������������
    	T - �������� ��������
    	V - ����-������
    	W - ������������� �������
    
    	*****************************************************************/
    public static function GetDeniedRoleID()
    {
    }
    public static function GetAdvertiserRoleID()
    {
    }
    public static function GetManagerRoleID()
    {
    }
    public static function GetDemoRoleID()
    {
    }
    public static function GetAdminRoleID()
    {
    }
    // ���������� true ���� �������� ������������ ����� �������� ���� �� ������
    public static function HaveRole($role, $USER_ID = \false)
    {
    }
    // true - ���� ������������ ����� ���� "�������������"
    // false - � ��������� ������
    public static function IsAdvertiser($USER_ID = \false)
    {
    }
    // true - ���� ������������ ����� ���� "������������� �������"
    // false - � ��������� ������
    public static function IsAdmin($USER_ID = \false)
    {
    }
    // true - ���� ������������ ����� ���� "����-������"
    // false - � ��������� ������
    public static function IsDemo($USER_ID = \false)
    {
    }
    // true - ���� ������������ ����� ����� �� ������ "�������� ��������" � ����
    // false - � ��������� ������
    public static function IsManager($USER_ID = \false)
    {
    }
    // ���������� ������ ID ����� ��� ������� ������ ����
    // $role - ������������� ����
    public static function GetGroupsByRole($role)
    {
    }
    // ���������� ������ ������������� ������� ����� �� ������ "�������������"
    public static function GetAdvertisersArray()
    {
    }
    // ���������� ������ EMail ������� ���� ������������� ������� �������� ����
    public static function GetEmailArrayByRole($role)
    {
    }
    // ���������� ������ EMail'�� ���� ������������� ������� ���� "�������������"
    public static function GetAdminEmails()
    {
    }
    // ���������� ������ EMail'�� ���� ������������� ������� ���� "�������� ��������"
    public static function GetManagerEmails()
    {
    }
    /*****************************************************************
    			������ ������� �� ������ � ������� �� ��������
    
    	�������������� ����:
    
    	VIEW - �������� �������� ���������, �������� ���� �������� ��������� � �� ��������
    	ADD - �������� �������� ���������, ���������� ��������� ���������, �������� �������� ��������
    	EDIT - ���������� ������ ����� ���������, �������� ���� �������� ��������� � �� ��������
    
    	*****************************************************************/
    // ��������� ������� ������������ ���� ������� �� ��������
    public static function GetMaxPermissionsArray()
    {
    }
    // ���������� ������� EMail'�� ���� ������������� ������� ������ � ��������� ��������� (��������� ���������)
    public static function GetOwnerEmails($CONTRACT_ID, &$OWNER_EMAIL, &$ADD_EMAIL, &$VIEW_EMAIL, &$EDIT_EMAIL)
    {
    }
    // ��������� ������� ���� �������� ������������ �� ���� ����������
    public static function GetUserPermissions($CONTRACT_ID = 0, $USER_ID = \false)
    {
    }
    // true - ���� ������������ ����� ������ � ���������
    // false - � ��������� ������
    public static function IsOwner($CONTRACT_ID, $USER_ID = \false)
    {
    }
    // ��������� ������� ���� ���� ������� �� ��������� ���������
    public static function GetContractPermissions($CONTRACT_ID)
    {
    }
    /*****************************************************************
    					������ ������� �� �������� �����
    	*****************************************************************/
    public static function SendEMail($arContract, $mess = "")
    {
    }
    public static function SendInfo()
    {
    }
    /*****************************************************************
    				������ ������� �� ���������� ����������
    	*****************************************************************/
    public static function CheckFilter($arFilter)
    {
    }
    // �������� ������ ������� � ���� ������ ��������� � ����������
    public static function GetWeekdayArray($CONTRACT_ID)
    {
    }
    // �������� ������ ����� ��������� � ����������
    public static function GetTypeArray($CONTRACT_ID)
    {
    }
    // �������� ������ ������ ��������� � ����������
    public static function GetSiteArray($CONTRACT_ID)
    {
    }
    // �������� ������ ������� ��������� � ����������
    public static function GetPageArray($CONTRACT_ID, $SHOW = "SHOW")
    {
    }
    // �������� �������� �� ID
    public static function GetByID($CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // �������� ����� ��� ����������� ���������
    public static function CheckFields($arFields, $CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // ��������� ����� �������� ��� ������������ ������������
    public static function Set($arFields, $CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // �������� ���������
    public static function Delete($CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // �������� ����� ��������� �� ����������
    public static function DeletePageLink($CONTRACT_ID, $where = "")
    {
    }
    // �������� ����� ��������� � �������
    public static function DeleteSiteLink($CONTRACT_ID)
    {
    }
    // �������� ����� ��������� � ������ ��������
    public static function DeleteTypeLink($CONTRACT_ID)
    {
    }
    // �������� ����� ��������� � ��������������
    public static function DeleteUserLink($CONTRACT_ID, $where = "")
    {
    }
    // �������� ����� ��������� �� �������� � ����� ������
    public static function DeleteWeekdayLink($CONTRACT_ID)
    {
    }
    //��������� ���������� �� ����������
    public static function GetStatList($by, $order, $arFilter)
    {
    }
}
/*****************************************************************
					����� "��������� ������"
*****************************************************************/
class CAdvBanner_all
{
    public static function err_mess()
    {
    }
    public static function GetCurUri()
    {
    }
    public static function SetCurUri($uri = \false)
    {
    }
    // ������� ������ �� ID
    public static function GetByID($BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // ����������� �������
    public static function Copy($BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // �������� �������
    public static function Delete($BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // �������� ����� ������� �� �������� � ����� ������
    public static function DeleteWeekdayLink($BANNER_ID)
    {
    }
    // �������� ����� ������� � �������
    public static function DeleteSiteLink($BANNER_ID)
    {
    }
    // �������� ����� ������� �� �������
    public static function DeleteCountryLink($BANNER_ID)
    {
    }
    // �������� ����� ������� �� ���������� ���������� ����������
    public static function DeleteStatAdvLink($BANNER_ID)
    {
    }
    // �������� ����� ������� �� ����������
    public static function DeletePageLink($BANNER_ID, $where = "")
    {
    }
    public static function DeleteGroupLink($BANNER_ID)
    {
    }
    public static function GetStatusList()
    {
    }
    // �������� ������ ������� ��������� � ��������
    public static function GetPageArray($BANNER_ID, $SHOW = "SHOW")
    {
    }
    // �������� ������ ����� ������������� ��������� � ��������
    public static function GetGroupArray($BANNER_ID)
    {
    }
    // �������� ������ ������ ��������� � ��������
    public static function GetSiteArray($BANNER_ID)
    {
    }
    // �������� ������ ����� ��������� � ��������
    public static function GetCountryArray($BANNER_ID, $WHAT = "COUNTRY")
    {
    }
    // �������� ������ ������� � ���� ������ ��������� � ��������
    public static function GetWeekdayArray($BANNER_ID)
    {
    }
    // �������� ������ ��������� �������� ��������� � ��������
    public static function GetStatAdvArray($BANNER_ID)
    {
    }
    // ��������� ���� ��� ����������� �������
    public static function CheckFields($arFields, $BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function CheckFile($arFile, $iMaxSize = 0, $iMaxWidth = 0, $iMaxHeight = 0, $access_typies = array(), $bForceMD5 = \false, $bSkipExt = \false)
    {
    }
    public static function makeFileArray($data, $del = \false, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromId($file_id, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromPath($file_path, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromArray($file_array, $description = \null, $options = array())
    {
    }
    // ��������� ����� ������ ��� ������������ ������������
    public static function Set($arFields, $BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function SetKeywords($keywords, $TYPE_SID = "", $LOGIC = "DESIRED")
    {
    }
    public static function GetKeywords($TYPE_SID = "", $LOGIC = "", $EXACT_MATCH = "")
    {
    }
    public static function ResetKeywords($TYPE_SID = "", $LOGIC = "", $EXACT_MATCH = "")
    {
    }
    public static function SetRequiredKeywords($keywords, $TYPE_SID = "")
    {
    }
    public static function SetDesiredKeywords($keywords, $TYPE_SID = "")
    {
    }
    public static function GetRequiredKeywords($TYPE_SID = "", $EXACT_MATCH = "")
    {
    }
    public static function GetDesiredKeywords($TYPE_SID = "", $EXACT_MATCH = "")
    {
    }
    public static function arr_comp_uniform($a, $b)
    {
    }
    // ���������� ������ ����������� ������������ ������
    public static function GetRandom($TYPE_SID)
    {
    }
    // ���������� ������, ����������� $quantity ������������ ��������
    public static function GetRandomArray($TYPE_SID, $quantity = 1)
    {
    }
    // Uniformity coefficient
    public static function GetUniformityCoef($arBanner)
    {
    }
    public static function __innerExtractBitrixDates($arBanner)
    {
    }
    // Returns TimeDifference in seconds beetween FROM,TO Dates of a banner
    public static function CalculateTimeDiff($arBanner)
    {
    }
    // Calculate progress in 0.0<x<1.0 format of banner rotation
    public static function CalculateTimeProgress($arBanner)
    {
    }
    public static function CalculateRotationProgress($arBanner)
    {
    }
    // Calculates speed
    //function CalculateActualRotationSpeed()
    //function GetAverageRotationSpeed()
    public static function PrepareHTML($text, $arBanner)
    {
    }
    public static function GetRedirectURL($url, $arBanner)
    {
    }
    public static function ReplaceURL($text, $arBanner)
    {
    }
    // ���������� HTML ������� �� �������
    public static function GetHTML($arBanner, $bNoIndex = \false)
    {
    }
    public static function FixShowAll()
    {
    }
    // ��������� ����� �������
    public static function FixShow($arBanner)
    {
    }
    public static function BeforeRestartBuffer()
    {
    }
    // ������������� cookie ���������� � ��������� �������
    public static function SetCookie($arBanner, &$inc_banner_counter, &$inc_contract_counter)
    {
    }
    // ���������� HTML ������������� ������� �� ����
    public static function Show($TYPE_SID, $HTML_BEFORE = "", $HTML_AFTER = "")
    {
    }
    public static function GetEditIcons($arBanner, $TYPE_SID = "", $arIcons = array())
    {
    }
    public static function CheckDynamicFilter($arFilter)
    {
    }
    // ���������� ������ ����������� �������� ��������
    public static function GetDynamicList($arFilter, &$arrLegend, &$is_filtered)
    {
    }
    public static function GetStatList($by, $order, $arFilter)
    {
    }
}
/*****************************************************************
					����� "��� �������"
*****************************************************************/
class CAdvType_all
{
    public static function err_mess()
    {
    }
    public static function CheckFilter($arFilter)
    {
    }
    // �������� ��������� ������� ����������
    public static function GetNextSort()
    {
    }
    public static function CheckFields($arFields, $OLD_SID, $CHECK_RIGHTS)
    {
    }
    // ��������� ����� ��� ��� ������������ ������������
    public static function Set($arFields, $OLD_SID, $CHECK_RIGHTS = "Y")
    {
    }
    // �������� ��� ������� �� ID
    public static function GetByID($TYPE_SID)
    {
    }
    // ������� ��� �������
    public static function Delete($TYPE_SID, $CHECK_RIGHTS = "Y")
    {
    }
    // ������� ����� ���� � ����������
    public static function DeleteContractLink($TYPE_SID)
    {
    }
    // �������� ������ ����� ��������
    public static function GetList(&$by, &$order, $arFilter = array(), &$is_filtered, $CHECK_RIGHTS = "Y")
    {
    }
}
/********************************************
	������������� �� ������ ������� ������
*********************************************/
class CAdvertising
{
    public static function GetAdv($TYPE_SID)
    {
    }
    public static function ClickAdv($BANNER_ID)
    {
    }
}