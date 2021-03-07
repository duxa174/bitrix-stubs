<?php

class CBPDocumentService extends \CBPRuntimeService
{
    const FEATURE_MARK_MODIFIED_FIELDS = 'FEATURE_MARK_MODIFIED_FIELDS';
    const FEATURE_SET_MODIFIED_BY = 'FEATURE_SET_MODIFIED_BY';
    private $arDocumentsCache = array();
    private $documentTypesCache = array();
    private $documentFieldsCache = array();
    private $typesMapCache = array();
    private $tzFlag;
    public function getEntityName($moduleId, $entity)
    {
    }
    public function GetDocument($parameterDocumentId, $parameterDocumentType = \null)
    {
    }
    public function UpdateDocument($parameterDocumentId, $arFields, $modifiedBy = \null)
    {
    }
    public function CreateDocument($parameterDocumentId, $arFields)
    {
    }
    public function PublishDocument($parameterDocumentId)
    {
    }
    public function UnpublishDocument($parameterDocumentId)
    {
    }
    public function LockDocument($parameterDocumentId, $workflowId)
    {
    }
    public function UnlockDocument($parameterDocumentId, $workflowId)
    {
    }
    public function DeleteDocument($parameterDocumentId)
    {
    }
    public function IsDocumentLocked($parameterDocumentId, $workflowId)
    {
    }
    public function SubscribeOnUnlockDocument($parameterDocumentId, $workflowId, $eventName)
    {
    }
    public function UnsubscribeOnUnlockDocument($parameterDocumentId, $workflowId, $eventName)
    {
    }
    public static function OnUnlockDocument($workflowId, $eventName, $documentId = [])
    {
    }
    public function GetDocumentType($parameterDocumentId)
    {
    }
    public function normalizeDocumentId($parameterDocumentId)
    {
    }
    public function GetDocumentFields($parameterDocumentType, $importExportMode = \false)
    {
    }
    public function GetDocumentFieldTypes($parameterDocumentType)
    {
    }
    public function AddDocumentField($parameterDocumentType, $arFields)
    {
    }
    public function UpdateDocumentField($parameterDocumentType, $arFields)
    {
    }
    public function GetJSFunctionsForFields($parameterDocumentType, $objectName, $arDocumentFields = array(), $arDocumentFieldTypes = array())
    {
    }
    public function GetFieldInputControlOptions($parameterDocumentType, &$fieldType, $jsFunctionName, &$value)
    {
    }
    public function GetFieldInputControl($parameterDocumentType, $fieldType, $fieldName, $fieldValue, $bAllowSelection = \false, $publicMode = \false)
    {
    }
    public function GetFieldInputValue($parameterDocumentType, $fieldType, $fieldName, $arRequest, &$arErrors)
    {
    }
    public function GetFieldInputValuePrintable($parameterDocumentType, $fieldType, $fieldValue)
    {
    }
    public function GetFieldValuePrintable($parameterDocumentId, $fieldName, $fieldType, $fieldValue, $arFieldType = \null)
    {
    }
    /**
     * @param array $parameterDocumentType
     * @return array
     */
    public function getTypesMap(array $parameterDocumentType)
    {
    }
    public function getTypesConversionMap(array $parameterDocumentType)
    {
    }
    /**
     * @param array $parameterDocumentType
     * @param string $type
     * @return null|string
     */
    public function getTypeClass(array $parameterDocumentType, $type)
    {
    }
    /**
     * @param array $parameterDocumentType
     * @param array $property
     * @return null|FieldType
     */
    public function getFieldTypeObject(array $parameterDocumentType, array $property)
    {
    }
    /**
     * @deprecated
     * @param $parameterDocumentType
     * @param $formName
     * @param $fieldName
     * @param $fieldValue
     * @param array $arDocumentField
     * @param bool $bAllowSelection
     * @return mixed|string
     * @throws CBPArgumentNullException
     */
    public function GetGUIFieldEdit($parameterDocumentType, $formName, $fieldName, $fieldValue, $arDocumentField = array(), $bAllowSelection = \false)
    {
    }
    /**
     * @deprecated
     * @param $parameterDocumentType
     * @param $fieldName
     * @param $arRequest
     * @param $arErrors
     * @param array $arDocumentField
     * @return array|mixed|null
     * @throws CBPArgumentNullException
     */
    public function SetGUIFieldEdit($parameterDocumentType, $fieldName, $arRequest, &$arErrors, $arDocumentField = array())
    {
    }
    public function GetDocumentAdminPage($parameterDocumentId)
    {
    }
    public function getDocumentName($parameterDocumentId)
    {
    }
    public function getDocumentTypeName($parameterDocumentType)
    {
    }
    public function getDocumentIcon($parameterDocumentId)
    {
    }
    public function getDocumentResponsible(array $parameterDocumentId)
    {
    }
    public function GetDocumentForHistory($parameterDocumentId, $historyIndex)
    {
    }
    public function RecoverDocumentFromHistory($parameterDocumentId, $arDocument)
    {
    }
    public function GetUsersFromUserGroup($group, $parameterDocumentId)
    {
    }
    public function GetAllowableUserGroups($parameterDocumentType, $withExtended = \false)
    {
    }
    public function GetAllowableOperations($parameterDocumentType)
    {
    }
    public function SetPermissions($parameterDocumentId, $workflowId, $arPermissions, $bRewrite = \true)
    {
    }
    public function isFeatureEnabled($parameterDocumentType, $feature)
    {
    }
    public function isExtendedPermsSupported($parameterDocumentType)
    {
    }
    public function toInternalOperations($parameterDocumentType, $permissions)
    {
    }
    public function toExternalOperations($parameterDocumentType, $permissions)
    {
    }
    public function onTaskChange($parameterDocumentId, $taskId, $taskData, $status)
    {
    }
    public function onWorkflowStatusChange($parameterDocumentId, $workflowId, $status, $rootActivity = \null)
    {
    }
    public function createAutomationTarget($parameterDocumentType)
    {
    }
    private function clearCache()
    {
    }
    private function checkCache()
    {
    }
}