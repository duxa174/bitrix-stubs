<?php

class CUpdateClientPartner
{
    public static function RegisterModules(&$strError, $lang = \false, $stableVersionsOnly = \false)
    {
    }
    public static function loadModule4Wizard($moduleId, $lang = \false)
    {
    }
    public static function LoadModuleNoDemand($moduleId, &$strError, $stableVersionsOnly = "Y", $lang = \false)
    {
    }
    public static function SearchModulesEx($arOrder, $arFilter, $searchPage, $lang, &$strError)
    {
    }
    public static function SearchModules($searchModule, $lang)
    {
    }
    /** ����� ��������� � ��� ���� ������� ����������. ������ ���, ���� �����. **/
    public static function AddMessage2Log($sText, $sErrorCode = "")
    {
    }
    public static function GetRequestedModules($strAddModule)
    {
    }
    /** ��������� ������������� ����� �������� ������� **/
    public static function GetLicenseKey()
    {
    }
    /* �������� ���������� ���������� ���� */
    public static function GetNextStepUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $bStrongList = \false)
    {
    }
    // ������������� ����� ������ update_archive.gz � ����y $updatesDir
    public static function UnGzipArchive(&$updatesDir, &$strError, $bDelArch = \true)
    {
    }
    // ���������� ���������� �� ����������� � ����� $updatesDir ����������� �������
    public static function CheckUpdatability($updatesDir, &$strError)
    {
    }
    // ���������� ���������� �� ����������� � ����� $updatesDir ����������� �������
    public static function GetStepUpdateInfo($updatesDir, &$strError)
    {
    }
    public static function __CollectRequestData(&$strError, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $arAdditionalData = array(), $bStrongList = \false)
    {
    }
    /** �������� ���������� ������ � �������� **/
    public static function GetCurrentModules(&$strError)
    {
    }
    /* �������� ������ ��������� ���������� */
    public static function GetUpdatesList(&$strError, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $aditData = array())
    {
    }
    public static function ClearUpdateFolder($updatesDirFull)
    {
    }
    public static function LoadModulesUpdates(&$errorMessage, &$arUpdateDescription, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $bStrongList = \false)
    {
    }
    private static function getAddr($serverIp = \null, $serverPort = \null)
    {
    }
    private static function getSocketError($errstr, $errno, $addrParams)
    {
    }
    private static function loadFileBx($requestedUrl, $realSize, $outputFilename, $timeout, $requestQueryString, &$errorMessage)
    {
    }
    private function loadFile($requestedUrl, $realSize, $outputFilename, $timeout, &$errorMessage)
    {
    }
    public static function UpdateStepModules($updatesDir, &$strError, $bSaveUpdaters = \False)
    {
    }
    public static function ActivateCoupon($coupon, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    /** ��������� updater ������ **/
    public static function __RunUpdaterScript($path, &$strError, $updateDirFrom, $moduleID)
    {
    }
    /** ��������� ���� ������ � ������� XX.XX.XX  **/
    /** ���������� 1, ���� $strVers1 > $strVers2  **/
    /** ���������� -1, ���� $strVers1 < $strVers2 **/
    /** ���������� 0, ���� $strVers1 == $strVers2 **/
    public static function __CompareVersions($strVers1, $strVers2)
    {
    }
    /** ����������� ������� POST �������� $page �� ������� ���������� **/
    /** $strVars � ���������� ���� ������. � ��������� $strError      **/
    /** ������������ ����� ������, ���� ������� ����.                 **/
    public static function __GetHTTPPage($page, $strVars, &$strError)
    {
    }
    /** ��������� �� ������ ����� ������� $strServerOutput **/
    /** � ������ � ������ $arRes                           **/
    public static function __ParseServerData(&$strServerOutput, &$arRes, &$strError)
    {
    }
    /** �������� �� ��������� GZip ���������� **/
    public static function __IsGzipInstalled()
    {
    }
    public static function __GetFooPath()
    {
    }
    public static function __GetFooPath1($v = 0)
    {
    }
    /** �������� ����, ���� ��� ���, � ��������� ���� ������ **/
    public static function __CheckDirPath($path, $bPermission = \true)
    {
    }
    /** ����������� ����������� �� $path_from � $path_to **/
    public static function __CopyDirFiles($path_from, $path_to, &$strError, $bSkipUpdater = \True)
    {
    }
    /** ����������� �������� $path **/
    public static function __DeleteDirFilesEx($path)
    {
    }
    public static function __bxstrrpos($haystack, $needle)
    {
    }
    /** ���������� ��������� ������-����������� ������ �� ����������� ���� $path **/
    public static function __GetModuleInfo($path)
    {
    }
    public static function __GetMicroTime()
    {
    }
}