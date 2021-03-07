<?php

class CSVUserImport
{
    var $csv;
    var $arHeader = \false;
    var $isErrorOccured = \false;
    var $errorMessage = "";
    var $ignoreDuplicate = \false;
    var $userGroups = \false;
    var $callback = \null;
    var $defaultEmail = \false;
    var $imageFilePath = \null;
    var $externalAuthID = \null;
    var $attachIBlockID = 0;
    var $userPropertyName = "UF_DEPARTMENT";
    var $arSectionCache = array();
    var $isUserPropertyCreate = \false;
    public function __construct($csvFilePath, $delimiter)
    {
    }
    function CheckRequiredFields()
    {
    }
    function AttachUsersToIBlock($iblockID)
    {
    }
    function SetUserPropertyName($userPropertyName)
    {
    }
    function GenerateUserPassword($pass_len = 10)
    {
    }
    function IsErrorOccured()
    {
    }
    function SetExternalAuthID($externalAuthID)
    {
    }
    function GetErrorMessage()
    {
    }
    function IgnoreDuplicate($ignore = \true)
    {
    }
    function SetCallback($functionName)
    {
    }
    function &GetCsvObject()
    {
    }
    function SetDefaultEmail($email)
    {
    }
    function GetDefaultEmail()
    {
    }
    function SetUserGroups($arGroups)
    {
    }
    function SetImageFilePath($relativePath)
    {
    }
    function __CreateUserProperty()
    {
    }
    function __GetIBlockSectionID(&$arFields)
    {
    }
    function ImportUser()
    {
    }
}