<?php

class CBPVirtualDocument extends \CIBlockDocument
{
    public static function getEntityName()
    {
    }
    public static function getDocumentTypeName($documentType)
    {
    }
    function GetFieldInputControlOptions($documentType, &$arFieldType, $jsFunctionName, &$value)
    {
    }
    function GetFieldInputControl($documentType, $arFieldType, $arFieldName, $fieldValue, $bAllowSelection = \false, $publicMode = \false)
    {
    }
    function GetFieldInputValue($documentType, $arFieldType, $arFieldName, $arRequest, &$arErrors)
    {
    }
    function GetFieldInputValuePrintable($documentType, $arFieldType, $fieldValue)
    {
    }
    function CanUserOperateDocument($operation, $userId, $documentId, $arParameters = array())
    {
    }
    function CanUserOperateDocumentType($operation, $userId, $documentType, $arParameters = array())
    {
    }
    function GetList($arOrder = array("SORT" => "ASC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    private function PrepareUserForPrint($value)
    {
    }
    private function PrepareSectionForPrint($value, $iblockId = 0)
    {
    }
    /**
     * @param string $documentId
     * @return string - document admin page url.
     */
    public function GetDocumentAdminPage($documentId)
    {
    }
    public function GetDocument($documentId)
    {
    }
    public function GetDocumentType($documentId)
    {
    }
    public function GetDocumentFields($documentType)
    {
    }
    public function GetDocumentFieldTypes($documentType)
    {
    }
    public function AddDocumentField($documentType, $arFields)
    {
    }
    public function UpdateDocument($documentId, $arFields)
    {
    }
    public function CreateDocument($parentDocumentId, $arFields)
    {
    }
    public function GetAllowableOperations($documentType)
    {
    }
    // array("1" => "Admins", 2 => "Guests", 3 => ..., "Author" => "Author")
    public function GetAllowableUserGroups($documentType, $withExtended = \false)
    {
    }
    public function GetUsersFromUserGroup($group, $documentId)
    {
    }
    public function GetJSFunctionsForFields($documentType, $objectName, $arDocumentFields = array(), $arDocumentFieldTypes = array())
    {
    }
    function GetGUIFieldEdit($documentType, $formName, $fieldName, $fieldValue, $arDocumentField = \null, $bAllowSelection = \false)
    {
    }
    function SetGUIFieldEdit($documentType, $fieldName, $arRequest, &$arErrors, $arDocumentField = \null)
    {
    }
    function GetFieldValuePrintable($documentId, $fieldName, $fieldType, $fieldValue, $arFieldType)
    {
    }
    public function SetPermissions($documentId, $workflowId, $arPermissions, $bRewrite = \true)
    {
    }
    public function OnAfterIBlockElementDelete($arFields)
    {
    }
    public static function isExtendedPermsSupported($documentType)
    {
    }
}