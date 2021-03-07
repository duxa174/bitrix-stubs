<?php

class CUpdateSystem
{
    public static function IsInCommonKernel()
    {
    }
    /** �������� �� ���������� �� ����������� **/
    public static function SubscribeUpdates($strEmails, &$strError, $lang = \false)
    {
    }
    /** ���������� ������������ ���� **/
    public static function AddSites($strCheck, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    /** ���������� ������������ ���� **/
    public static function ActivateLicenseKey($arFields, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ������������ ����� ��������, ���� �����
    public static function RegisterVersion(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ��������� ������� ����������
    public static function UpdateUpdate(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ���������� ��������� ��������, ���� �����
    public static function LoadSources(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ����������, ��� ����������
    public static function GetAvailableUpdateTypes(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ���������� ���������� �� ��������� ����������� ������� �� �������
    public static function GetServerModuleUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ���������� ���������� �� ��������� ������ �� �������
    public static function GetServerLangsUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ���������� ���������� �� ��������� ������ �� �������
    public static function GetServerHelpUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ��������� ���������� ������� $arModules � ���� update_archive.gz
    public static function LoadModuleUpdates($arModules, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ��������� ���������� ������ $arLangs � ���� update_archive.gz
    public static function LoadLangsUpdates($arLangs, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ��������� ���������� ������ $load_help � ���� update_archive.gz
    public static function LoadHelpUpdates($arHelp, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // ������������� ����� ������ update_archive.gz � ����y $updates_dir
    public static function UnGzipArchive(&$updates_dir, &$strError, $DelArch = "Y")
    {
    }
    // ��������� ����������� ���������� ������� $arModules
    // �� ��������� �������� ������ VERSION_CONTROL
    public static function CheckVersions(&$arRes, &$strError, $arSelectedModules = \false)
    {
    }
    // ���������� ���������� �� ����������� � ����� $updates_dir ����������� �������
    public static function CheckUpdatability($updates_dir, &$strError)
    {
    }
    public static function CheckFolderUpdatability($destFolder, $srcFolder, &$strError)
    {
    }
    // ���������� ���������� �� ����������� � ����� $updates_dir ����������� �������
    public static function GetLoadedModuleUpdates($updates_dir, &$strError)
    {
    }
    // ���������� ���������� �� ����������� � ����� $updates_dir ����������� ������
    public static function GetLoadedLangsUpdates($updates_dir, &$strError)
    {
    }
    // ���������� ���������� �� ����������� � ����� $updates_dir ����������� ������
    public static function GetLoadedHelpUpdates($updates_dir, &$strError)
    {
    }
    // ��������� ������ $arModules �������� �� ����� $updates_dir
    public static function UpdateKernel($updates_dir, $arModules, &$strError, &$arErrorModules, &$arSuccessModules)
    {
    }
    // ��������� ������ $arLangs �������� �� ����� $updates_dir
    public static function UpdateLangs($updates_dir, $arLangs, &$strError, &$arErrorLangs, &$arSuccessLangs)
    {
    }
    // ��������� ������� ������ �������� �� ����� $updates_dir
    public static function UpdateHelp($updates_dir, $arHelp, &$strError, &$arErrorHelp, &$arSuccessHelp)
    {
    }
    public static function Report2Server($arServerReport)
    {
    }
    /*******************************************************************/
    /********   ��������������� �������   ******************************/
    /*******************************************************************/
    /** ��������� �� ������ ����� ������� $strServerOutput **/
    /** � ������ � ������ $arRes                           **/
    public static function ParseServerData(&$strServerOutput, &$arRes, &$strError)
    {
    }
    /** ��������� ���� ������ � ������� XX.XX.XX  **/
    /** ���������� 1, ���� $strVers1 > $strVers2  **/
    /** ���������� -1, ���� $strVers1 < $strVers2 **/
    /** ���������� 0, ���� $strVers1 == $strVers2 **/
    public static function CompareVersions($strVers1, $strVers2)
    {
    }
    /** ����� ��������� � ��� ���� ������� ����������. ������ ���, ���� �����. **/
    public static function AddMessage2Log($sText, $sErrorCode = "")
    {
    }
    /** �������� �� ������� ������� ������ ������� **/
    public static function ModulesArray2Query($arClientModules, $pref = "bitm_")
    {
    }
    /** �������� ���������� ������ � �������� **/
    public static function GetModules(&$strError, $arSelected = \false)
    {
    }
    /** �������� ���������� ����� � ������ **/
    public static function GetLanguages(&$strError, $arSelected = \false)
    {
    }
    /** �������� ���������� help'� � ������ **/
    public static function GetHelps(&$strError, $arSelected = \false)
    {
    }
    public static function GetFooPath($path)
    {
    }
    public static function GetModuleVersion($module)
    {
    }
    /** ���������� ��������� ������-����������� ������ �� ����������� ���� $path **/
    public static function GetModuleInfo($path)
    {
    }
    /** ����������� ������� POST �������� $page �� ������� ���������� **/
    /** $strVars � ���������� ���� ������. � ��������� $strError      **/
    /** ������������ ����� ������, ���� ������� ����.                 **/
    public static function getHTTPPage($page, $strVars, &$strError)
    {
    }
    /** �������� �� ��������� GZip ���������� **/
    public static function IsGzipInstalled()
    {
    }
    /** �������� ����, ���� ��� ���, � ��������� ���� ������ **/
    public static function CheckDirPath($path, $bPermission = \true)
    {
    }
    /** ����������� ����������� �� $path_from � $path_to **/
    public static function CopyDirFiles($path_from, $path_to, &$strError)
    {
    }
    /** ����������� �������� $path **/
    public static function DeleteDirFilesEx($path)
    {
    }
    /** ������� ������ ��������� �����, �������� ��������� $iCnt **/
    public static function EraseOldFolders($iCnt = 1)
    {
    }
    /** ��������� updater ������ **/
    public static function RunUpdaterScript($path, &$strError, $from_dir, $moduleID)
    {
    }
    /** ��������� ������������� ����� �������� ������� **/
    public static function GetLicenseKey()
    {
    }
    public static function getmicrotime()
    {
    }
    public static function InsertSpaces($sText, $iMaxChar = 80)
    {
    }
    public static function CheckEMail($email)
    {
    }
    public static function GetDateFormat($strDBFormat = \false)
    {
    }
    /** ��������� ����������� ��������� ��� ������ ����� "����������" **/
    public static function NumberEndings($num, $lang = \false, $arEnds = \false)
    {
    }
    public static function FooMakePath()
    {
    }
    public static function bxstrrpos($haystack, $needle)
    {
    }
}
/**********************************************************************/
/*********   CUpdatesXMLNode   ****************************************/
/**********************************************************************/
class CUpdatesXMLNode
{
    var $name;
    // Name of the node
    var $content;
    // Content of the node
    var $children;
    // Subnodes
    var $attributes;
    // Attributes
    public function __construct()
    {
    }
    function &__toString()
    {
    }
    function &__toArray()
    {
    }
}
/**********************************************************************/
/*********   CUpdatesXMLDocument   ******************************************/
/**********************************************************************/
class CUpdatesXMLDocument
{
    var $version;
    // XML version
    var $encoding;
    // XML encoding
    var $children;
    var $root;
    public function __construct()
    {
    }
    /* Returns a XML string of the DOM document */
    function &__toString()
    {
    }
    /* Returns an array of the DOM document */
    function &__toArray()
    {
    }
}
/**********************************************************************/
/*********   CUpdatesXML   **************************************************/
/**********************************************************************/
class CUpdatesXML
{
    var $tree;
    var $TrimWhiteSpace;
    public function __construct($TrimWhiteSpace = \True)
    {
    }
    function Load($file)
    {
    }
    function LoadString($text)
    {
    }
    function &GetTree()
    {
    }
    function &GetArray()
    {
    }
    function &GetString()
    {
    }
    function &SelectNodes($strNode)
    {
    }
    /* Will return an DOM object tree from the well formed XML. */
    function &__parse(&$strXMLText)
    {
    }
    function __stripComments(&$str)
    {
    }
    /* Parses the attributes. Returns false if no attributes in the supplied string is found */
    function &__parseAttributes($attributeString)
    {
    }
}
/************************************************************************/
/********************* ����� ��� UPDATER'� ******************************/
/************************************************************************/
class CUpdater
{
    var $errorMessage;
    var $curPath;
    // ���� � ������� updater (��� ����� �������) ������������ ����� �����
    var $curModulePath;
    // ���� � ����� � ������������ ������
    var $dbType;
    // ��� ���� ������
    var $updater;
    // ���� � ������� updater (c ������ �������) ������������ ����� �����
    var $moduleID;
    // ������
    var $callType;
    // ������ ����� (ALL - ���, KERNEL - ����, PERSONAL - ������������ �����, DATABASE - ���� ������  // DB=PERSONAL+DATABASE)
    var $kernelPath;
    // ���� � ����
    function Init($curPath, $dbType, $updater, $curDir, $moduleID, $callType = "ALL")
    {
    }
    // ������������� ��� ����������
    // $arDeleteFiles = array("component.name" => array("/images/1.gif", "/templates/.default/style.css"), "component.name1" => array("/style.css"));
    function InstallComponents($arDeleteFiles = array())
    {
    }
    function __MakeComponentPath($componentName)
    {
    }
    // ������������� ��������� �� ��� �����
    // $arDeleteFiles - ������� ����� �� ������� ( Array("/images/1.gif", "/templates/.default/style.css") )
    function InstallComponent($componentName, $arDeleteFiles = array())
    {
    }
    // ������������� ��� �������
    // $arDeleteFiles = array("component.name" => array("/images/1.gif", "/templates/.default/style.css"), "component.name1" => array("/style.css"));
    function InstallWizards($arDeleteFiles = array())
    {
    }
    // ������������� ������ �� ��� �����
    // $arDeleteFiles - ������� ����� �� ������� ( Array("/images/1.gif", "/templates/.default/style.css") )
    function InstallWizard($wizardName, $arDeleteFiles = array())
    {
    }
    function CopyFiles($fromDir, $toDir)
    {
    }
    function CopyDirFiles($fromDir, $toDir)
    {
    }
    function Query($query, $tableName = "")
    {
    }
    function QueryBatch($queryPath, $tableName = "")
    {
    }
    function TableExists($tableName)
    {
    }
    function CanUpdateDatabase()
    {
    }
    function CanUpdateKernel()
    {
    }
    function CanUpdatePersonalFiles()
    {
    }
}