<?php

/*
Here is testing code:
$s=<<<EOT

Place tested html here

EOT;
CModule::IncludeModule('security');
$Antivirus = new CSecurityAntiVirus("pre");
$Antivirus->replace=1;
$Antivirus->Analyze($s);
echo htmlspecialcharsbx($s),'<hr><pre>',htmlspecialcharsbx(print_r($Antivirus,1));
*/
class CSecurityAntiVirus
{
    var $place = "";
    var $stylewithiframe = \false;
    // this properties may be changed after object creation
    var $maxrating = 20;
    //������� �������� �������
    var $useglobalrules = 1;
    //������������ ���������� �������
    var $replace = 1;
    //
    var $replacement = "<!-- deleted by bitrix Antivirus -->";
    //�� ��� ��������, ���� ��������..
    //����������
    var $resultrules;
    //������ ����������� ������
    var $whitelist_id;
    //��������������� ��������
    var $data = '';
    //������ ��� �����, ������� �������������� ����
    var $type = '';
    //��� �����
    var $body = '';
    // ���� �����.
    var $bodylines = \false;
    // ������ ����� �� body
    var $bodyWOquotes = '';
    var $atributes = '';
    // �������������� �������� (������ � src)
    var $cnt = 0;
    //������� ������������ ������
    var $prev = '';
    var $next = '';
    private $quotes = array();
    function __construct($place = "body")
    {
    }
    public static function IsActive()
    {
    }
    public static function SetActive($bActive = \false)
    {
    }
    public static function GetAuditTypes()
    {
    }
    public static function OnPageStart()
    {
    }
    public static function OnEndBufferContent(&$content)
    {
    }
    public static function OnAfterEpilog()
    {
    }
    public static function PHPShutdown()
    {
    }
    public static function GetWhiteList()
    {
    }
    public static function UpdateWhiteList($arWhiteList)
    {
    }
    // function returns 1, if current block is in white list and needs not processing.
    function isInWhiteList()
    {
    }
    //��������. ����������� ������� ��������� �������� ����� �� ����, ��� FALSE
    // ���������� ������ ������������ ��������, ���������� ����������� ���������.
    function returnfromcache()
    {
    }
    //��������. ��������� ������� ��������� ��� �������� ����� � ���.
    function addtocache()
    {
    }
    //�������� ��� ������ ��������� �� ������������ �������������� ������� �����
    function dolog()
    {
    }
    // ���������� ������ ���, ����� ��������� ����� ��������� � ���� ������� ����������.
    // ������� ������ ���������� ���������� �����.
    function end_okblock()
    {
    }
    function end_whiteblock()
    {
    }
    // ���������� ������ ���, ����� ��������� ����� ��������� � ���� ������� �������.
    // ������� ������ ���������� ���������� �����.
    function end_blkblock()
    {
    }
    function CreateTrace()
    {
    }
    function Analyze(&$content)
    {
    }
    /*
    ���������� ������� ��������� ����� (������ ��� ������)
    ������� ��������� ������ ������ ���� ��������.
    */
    function returnblockrating()
    {
    }
    // �������
    // �������� � ������ ����������� ��� ������� ������� (�������� � ���������� ���������)
    function rulescriptglobals()
    {
    }
    //�������, ����������� ��������� �������
    function rulescriptblocks()
    {
    }
    //�������, ������������� "�����������" �����
    function ruleframevisiblity()
    {
    }
    //�������, ������������� ������������ ��������������� ����� � �������
    function rulescriptbasics()
    {
    }
    //�������, ������������� vbscript
    function rulescriptvbscript()
    {
    }
    //�������, ������������� ������� ����� �������� ������
    function ruleallsources()
    {
    }
    //�������, ������������ �������������� ����� ����� � ��������
    function rulescriptlenghts()
    {
    }
    // ������ ��������� ��������� ��������...
    function rulescriptfrequensy()
    {
    }
    // ��������, ����������� ������� ��������� �������
    function rulescriptwhiterules()
    {
    }
    //������ ��������� � ������ ������� � ����������
    function rulescriptnamerules()
    {
    }
    // ��������������� �������..
    // ���������� ��������� ���������� �������� � ������
    function getstatchars(&$str)
    {
    }
    function getnames_cb($m)
    {
    }
    function getnames($str)
    {
    }
    function isnormalname($nm, &$l)
    {
    }
    function returnscriptbody($str)
    {
    }
    public static function isSafetyRequest()
    {
    }
}