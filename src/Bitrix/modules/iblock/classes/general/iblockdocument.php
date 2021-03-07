<?php

class CIBlockDocument
{
    public static function getEntityName()
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
    function GetFieldValuePrintable($documentId, $fieldName, $fieldType, $fieldValue, $arFieldType)
    {
    }
    public static function GetVersion()
    {
    }
    /**
     * @param string $documentId - document id.
     * @return string - document admin page url.
     */
    public function GetDocumentAdminPage($documentId)
    {
    }
    /**
     * @param $documentId
     * @return null|string
     * @throws CBPArgumentNullException
     */
    public function getDocumentName($documentId)
    {
    }
    public static function getDocumentTypeName($documentType)
    {
    }
    /**
     * @param $documentId
     * @return array - document fields array.
     * @throws CBPArgumentNullException
     * @throws CBPArgumentOutOfRangeException
     */
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
    public static function generateMnemonicCode($integerCode = 0)
    {
    }
    public function AddDocumentField($documentType, $arFields)
    {
    }
    public function UpdateDocument($documentId, $arFields)
    {
    }
    public function LockDocument($documentId, $workflowId)
    {
    }
    public function UnlockDocument($documentId, $workflowId)
    {
    }
    public function IsDocumentLocked($documentId, $workflowId)
    {
    }
    function CanUserOperateDocument($operation, $userId, $documentId, $arParameters = array())
    {
    }
    function CanUserOperateDocumentType($operation, $userId, $documentType, $arParameters = array())
    {
    }
    /**
     * Метод создает новый документ с указанными свойствами (полями).
     *
     * @param array $arFields - массив значений свойств документа в виде array(код_свойства => значение, ...). Коды свойств соответствуют кодам свойств, возвращаемым методом GetDocumentFields.
     * @return int - код созданного документа.
     */
    public function CreateDocument($parentDocumentId, $arFields)
    {
    }
    /**
     * Метод удаляет указанный документ.
     *
     * @param string $documentId - код документа.
     */
    public function DeleteDocument($documentId)
    {
    }
    /**
     * Метод публикует документ. То есть делает его доступным в публичной части сайта.
     *
     * @param string $documentId - код документа.
     */
    public function PublishDocument($documentId)
    {
    }
    public function CloneElement($ID, $arFields = array())
    {
    }
    /**
     * Метод снимает документ с публикации. То есть делает его недоступным в публичной части сайта.
     *
     * @param string $documentId - код документа.
     */
    public function UnpublishDocument($documentId)
    {
    }
    // array("read" => "Ета чтение", "write" => "Ета запысь")
    public function GetAllowableOperations($documentType)
    {
    }
    public function GetJSFunctionsForFields($documentType, $objectName, $arDocumentFields = array(), $arDocumentFieldTypes = array())
    {
    }
    function GetFieldInputControlOptions($documentType, &$arFieldType, $jsFunctionName, &$value)
    {
    }
    public function GetAllowableUserGroups($documentType, $withExtended = \false)
    {
    }
    public function GetUsersFromUserGroup($group, $documentId)
    {
    }
    public function SetPermissions($documentId, $workflowId, $arPermissions, $bRewrite = \true)
    {
    }
    /**
     * Method return array with all information about document. Array used for method RecoverDocumentFromHistory.
     *
     * @param string $documentId - document id.
     * @return array - document information array.
     */
    public function GetDocumentForHistory($documentId, $historyIndex)
    {
    }
    /**
     * Method recover document from array. Array must be created by method RecoverDocumentFromHistory.
     *
     * @param string $documentId - document id.
     * @param array $arDocument - array.
     */
    public function RecoverDocumentFromHistory($documentId, $arDocument)
    {
    }
    public static function isExtendedPermsSupported($documentType)
    {
    }
    public static function generatePropertyCode($name, $code, $iblockId, $propertyId = 0)
    {
    }
}