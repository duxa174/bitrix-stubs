<?php

class CBPHelper
{
    const DISTR_B24 = 'b24';
    const DISTR_BOX = 'box';
    private static $serverName;
    protected static $cAccess;
    protected static $groupsCache = array();
    protected static function getAccessProvider()
    {
    }
    private static function UsersArrayToStringInternal($arUsers, $arWorkflowTemplate, $arAllowableUserGroups, $appendId = \true)
    {
    }
    public static function UsersArrayToString($arUsers, $arWorkflowTemplate, $documentType, $appendId = \true)
    {
    }
    public static function UsersStringToArray($strUsers, $documentType, &$arErrors, $callbackFunction = \null)
    {
    }
    private static function SearchUserByName($user)
    {
    }
    public static function FormatTimePeriod($period)
    {
    }
    private static function MakeWord($val, $arWords)
    {
    }
    public static function GetFilterOperation($key)
    {
    }
    public static function PrepareSql(&$arFields, $arOrder, $arFilter, $arGroupBy, $arSelectFields)
    {
    }
    public static function ParseDocumentId($parameterDocumentId)
    {
    }
    public static function ParseDocumentIdArray($parameterDocumentId)
    {
    }
    public static function GetFieldValuePrintable($fieldName, $fieldType, $result)
    {
    }
    public static function ConvertUserToPrintableForm($userId, $nameTemplate = "")
    {
    }
    public static function GetJSFunctionsForFields($objectName, $arDocumentFields, $arDocumentFieldTypes)
    {
    }
    public static function GetDocumentFieldTypes()
    {
    }
    /**
     * @deprecated
     */
    public static function GetGUIFieldEdit($documentType, $formName, $fieldName, $fieldValue, $arDocumentField, $bAllowSelection)
    {
    }
    public static function GetFieldInputControl($documentType, $arFieldType, $arFieldName, $fieldValue, $bAllowSelection = \false)
    {
    }
    public static function GetFieldInputValue($documentType, $arFieldType, $arFieldName, $arRequest, &$arErrors)
    {
    }
    public static function GetFieldInputValuePrintable($documentType, $arFieldType, $fieldValue)
    {
    }
    public static function SetGUIFieldEdit($documentType, $fieldName, $arRequest, &$arErrors, $arDocumentField = \null)
    {
    }
    public static function ConvertTextForMail($text, $siteId = \false)
    {
    }
    public static function __ConvertAnchorTag($url, $text = '', $serverName = '')
    {
    }
    public static function IsAssociativeArray($ar)
    {
    }
    public static function ExtractUsersFromUserGroups($value, $activity)
    {
    }
    /**
     * Method return array of user ids, extracting from special codes. Supported: user (U), group (G),
     * intranet (IU, D, DR, Dextranet, UA), socnet (SU, SG1_A, SG1_E, SG1_K)
     *
     * @param string $code - group code, ex. group_D1
     * @return bool|array
     */
    public static function extractUsersFromExtendedGroup($code)
    {
    }
    public static function ExtractUsers($arUsersDraft, $documentId, $bFirst = \false)
    {
    }
    public static function MakeArrayFlat($ar)
    {
    }
    public static function getBool($value)
    {
    }
    public static function isEmptyValue($value)
    {
    }
    public static function ConvertParameterValues($val)
    {
    }
    public static function StripUserPrefix($value)
    {
    }
    /**
     * @param $userId
     * @return array
     */
    public static function getUserExtendedGroups($userId)
    {
    }
    /**
     * @param string $group - Extended group code (ex. group_g1)
     * @param bool $appendId - Append id to group name
     * @return string
     */
    public static function getExtendedGroupName($group, $appendId = \true)
    {
    }
    /**
     * @param $users
     * @return array
     */
    public static function convertToExtendedGroups($users)
    {
    }
    /**
     * @param $users
     * @param bool $extractUsers
     * @return array
     */
    public static function convertToSimpleGroups($users, $extractUsers = \false)
    {
    }
    public static function getForumId()
    {
    }
    public static function getDistrName()
    {
    }
    /**
     * @param int $headUserId
     * @param int $subUserId
     * @return bool
     */
    public static function checkUserSubordination($headUserId, $subUserId)
    {
    }
    public static function renderControlSelectorButton($controlId, $baseType = 'string', array $options = \null)
    {
    }
    public static function decodeTemplatePostData(&$data)
    {
    }
    public static function decodeArrayKeys($item, $reverse = \false)
    {
    }
    public static function makeTimestamp($date)
    {
    }
}