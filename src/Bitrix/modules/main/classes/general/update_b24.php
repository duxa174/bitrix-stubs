<?php

class CB24Updater
{
    private $arFileVersions = \null;
    private $fileGenerateDate = 0;
    private $serverUniqID = "";
    private $isProcessingMain = \false;
    const versionsFileNameConst = "/bitrix/modules/versions.php";
    private $versionsFileName = "";
    const versionsDatabaseFolderConst = "/bitrix/updates/bitrix24_clients/";
    private $versionsDatabaseFolder = "";
    private $updatersDir = "";
    public function __construct($isProcessingMain = \false)
    {
    }
    private static function GetOption($name, $def = "")
    {
    }
    private static function SetOption($name, $value = "")
    {
    }
    private static function GetServerUniqID()
    {
    }
    public function Lock()
    {
    }
    public function UnLock()
    {
    }
    private static function GetDatabaseVersions()
    {
    }
    private static function SetDatabaseVersions($arDBVersions)
    {
    }
    private function InitializeFileData()
    {
    }
    private function GetFileVersions()
    {
    }
    private function GetFileGenerateDate()
    {
    }
    private function GetDatabaseGenerationDate()
    {
    }
    public function PreCheckUpdates()
    {
    }
    private function Collect4PreCheckUpdates($generationDate)
    {
    }
    public function CheckUpdates()
    {
    }
    public function UpdateFromVersion($moduleId, $dbVersion)
    {
    }
    public function CollectDatabaseVersions($type, $moduleId = \null, $version = \null)
    {
    }
}