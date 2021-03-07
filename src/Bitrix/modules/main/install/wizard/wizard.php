<?php

class WelcomeStep extends \CWizardStep
{
    function InitStep()
    {
    }
    function ShowStep()
    {
    }
    public static function unformat($_1938121630)
    {
    }
}
class AgreementStep extends \CWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function ShowStep()
    {
    }
}
class AgreementStep4VM extends \CWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    public function CheckShortInstall()
    {
    }
    function SetError($_1746456102, $_2011457012 = \false)
    {
    }
    function ShowStep()
    {
    }
}
class DBTypeStep extends \CWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function ShowStep()
    {
    }
}
class RequirementStep extends \CWizardStep
{
    var $_218486067 = 64;
    var $_828889460 = 256;
    var $_868545734 = 500;
    var $_1885430628 = "7.1.0";
    var $_67309573 = "1.3";
    var $_780416850 = array();
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function CheckRequirements($dbType)
    {
    }
    function GetPHPSetting($_489746519)
    {
    }
    function ShowResult($_34785730, $type = "OK")
    {
    }
    function CheckServerVersion(&$_865571492, &$_1506306195, &$_1124140726)
    {
    }
    function CheckPHPVersion()
    {
    }
    function CheckFileAccess()
    {
    }
    function CreateTemporaryFiles()
    {
    }
    function ShowStep()
    {
    }
}
class CreateDBStep extends \CWizardStep
{
    var $dbType;
    var $_664902286;
    var $_1551647363;
    var $_1170615647;
    var $dbName;
    var $_1299633152;
    var $_1345651238;
    var $createCharset = \false;
    var $createDBType;
    var $_479234887;
    var $_1112353976;
    var $filePermission;
    var $folderPermission;
    var $utf8;
    var $needCodePage = \false;
    var $DB = \null;
    var $_198538914 = \false;
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function IsBitrixInstalled()
    {
    }
    function CreateMySQL()
    {
    }
    function createSettings()
    {
    }
    function CreateDBConn()
    {
    }
    function CreateAfterConnect()
    {
    }
    function CreateLicenseFile()
    {
    }
    function CheckDBOperation()
    {
    }
    function ShowStep()
    {
    }
}
class CreateModulesStep extends \CWizardStep
{
    var $_824100326 = array();
    var $_1555285727 = array();
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function SendResponse($_1408324516)
    {
    }
    function GetModuleList()
    {
    }
    function GetNextStep($_127158487, $_1498485255, $_1786247161)
    {
    }
    function InstallSingleStep($_1845900004)
    {
    }
    function GetModuleObject($_1818666717)
    {
    }
    function InstallModule($_1818666717, $_1498485255)
    {
    }
    function IsModuleEncode($_1818666717)
    {
    }
    function SetEncodeModule($_1818666717)
    {
    }
    function EncodeDemoWizard()
    {
    }
    function ShowStep()
    {
    }
}
class CreateAdminStep extends \CWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function ShowStep()
    {
    }
}
class SelectWizardStep extends \CWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function ShowStep()
    {
    }
}
class LoadModuleStep extends \CWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function GetModuleObject($_1818666717)
    {
    }
    function ShowStep()
    {
    }
}
class LoadModuleActionStep extends \CWizardStep
{
    var $_824100326 = array();
    var $_1555285727 = array();
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function SendResponse($_1408324516)
    {
    }
    function GetModuleObject($_1818666717)
    {
    }
    function ShowStep()
    {
    }
}
class SelectWizard1Step extends \SelectWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function ShowStep()
    {
    }
}
class FinishStep extends \CWizardStep
{
    function InitStep()
    {
    }
    function CreateNewIndex()
    {
    }
    function ShowStep()
    {
    }
}
class CheckLicenseKey extends \CWizardStep
{
    function InitStep()
    {
    }
    function OnPostForm()
    {
    }
    function CreateLicenseFile()
    {
    }
    function ShowStep()
    {
    }
}
function ___737213606($_1223926305)
{
}