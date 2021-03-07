<?php

class BXInstallServices
{
    public static function CreateWizardIndex($wizardName, &$errorMessage)
    {
    }
    public static function LoadWizardData($wizard)
    {
    }
    public static function GetWizardsList($moduleName = "")
    {
    }
    public static function CopyDirFiles($path_from, $path_to, $rewrite = \true)
    {
    }
    public static function GetDBTypes()
    {
    }
    public static function CheckDirPath($path, $dirPermissions = 0755)
    {
    }
    public static function DeleteDirRec($path)
    {
    }
    public static function DeleteDbFiles($dbType)
    {
    }
    public static function VersionCompare($strCurver, $strMinver, $strMaxver = "0.0.0")
    {
    }
    public static function Add2Log($sText, $sErrorCode = "")
    {
    }
    public static function ParseForSql($sqlString)
    {
    }
    public static function GetConfigWizard()
    {
    }
    public static function GetDemoWizard()
    {
    }
    public static function GetWizardCharset($wizardName)
    {
    }
    public static function IsShortInstall()
    {
    }
    //UTF Functions
    public static function IsUTF8Support()
    {
    }
    public static function IsUTFString($string)
    {
    }
    public static function EncodeFile($filePath, $charsetFrom)
    {
    }
    public static function EncodeDir($dirPath, $charsetFrom, $encodeALL = \false)
    {
    }
    public static function SetStatus($status)
    {
    }
    public static function LocalRedirect($url)
    {
    }
    public static function SetSession()
    {
    }
    public static function CheckSession()
    {
    }
    public static function GetWizardsSettings()
    {
    }
    public static function GetRegistrationKey($lic_key_user_name, $lic_key_user_surname, $lic_key_email, $DBType)
    {
    }
    public static function CreateLicenseFile($licenseKey)
    {
    }
}
function InstallGetMessage($name)
{
}