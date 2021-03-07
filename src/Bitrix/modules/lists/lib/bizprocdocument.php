<?php

class BizprocDocument extends \CIBlockDocument
{
    const DOCUMENT_TYPE_PREFIX = 'iblock_';
    private static $cachedTasks;
    private static $elements = [];
    public static function getEntityName()
    {
    }
    /**
     * @param $iblockId
     * @return string
     */
    public static function generateDocumentType($iblockId)
    {
    }
    /**
     * @param $iblockType
     * @param $iblockId
     * @return array
     */
    public static function generateDocumentComplexType($iblockType, $iblockId)
    {
    }
    /**
     * @param $iblockType
     * @param $documentId
     * @return array
     */
    public static function getDocumentComplexId($iblockType, $documentId)
    {
    }
    /**
     * @param $iblockId
     */
    public static function deleteDataIblock($iblockId)
    {
    }
    /**
     * Method returns document icon (image source path)
     * @param $documentId
     * @return null|string
     * @throws CBPArgumentNullException
     */
    public static function getDocumentIcon($documentId)
    {
    }
    /**
     * @param $documentId
     * @return array
     * @throws CBPArgumentNullException
     * @throws CBPArgumentOutOfRangeException
     * @throws Exception
     */
    public function getDocument($documentId)
    {
    }
    protected static function setArray(array $result, $value)
    {
    }
    protected static function getSystemIblockFields()
    {
    }
    /**
     * @param string $documentType
     * @return array
     * @throws CBPArgumentOutOfRangeException
     */
    public function getDocumentFields($documentType)
    {
    }
    /**
     * @param int $integerCode
     * @return string
     */
    public static function generateMnemonicCode($integerCode = 0)
    {
    }
    /**
     * @param $documentType
     * @param $fields
     * @return bool|string
     * @throws CBPArgumentOutOfRangeException
     */
    public function addDocumentField($documentType, $fields)
    {
    }
    /**
     * @param string $documentType
     * @param array $fields
     * @return bool|string
     * @throws CBPArgumentOutOfRangeException
     */
    public function updateDocumentField($documentType, $fields)
    {
    }
    public function updateDocument($documentId, $arFields)
    {
    }
    public static function onTaskChange($documentId, $taskId, $taskData, $status)
    {
    }
    public static function onWorkflowStatusChange($documentId, $workflowId, $status)
    {
    }
    /**
     * @param int $documentId
     * @return null|string
     * @throws CBPArgumentNullException
     */
    public function getDocumentAdminPage($documentId)
    {
    }
    protected static function getRightsTasks()
    {
    }
    /**
     * @param string $documentType
     * @return array
     * @throws CBPArgumentOutOfRangeException
     */
    public function getAllowableOperations($documentType)
    {
    }
    /**
     * @param $documentType
     * @param array $permissions
     * @return array
     */
    public function toInternalOperations($documentType, $permissions)
    {
    }
    /**
     * @param $documentType
     * @param array $permissions
     * @return array
     */
    public function toExternalOperations($documentType, $permissions)
    {
    }
    function CanUserOperateDocument($operation, $userId, $documentId, $parameters = array())
    {
    }
    function CanUserOperateDocumentType($operation, $userId, $documentType, $parameters = array())
    {
    }
    protected function isAdmin()
    {
    }
    /**
     * @param $documentType
     * @param bool $withExtended
     * @return array|bool
     */
    public function GetAllowableUserGroups($documentType, $withExtended = \false)
    {
    }
    public function SetPermissions($documentId, $workflowId, $permissions, $rewrite = \true)
    {
    }
    public function GetFieldInputControl($documentType, $fieldType, $fieldName, $fieldValue, $allowSelection = \false, $publicMode = \false)
    {
    }
    public function GetFieldInputValue($documentType, $fieldType, $fieldName, $request, &$errors)
    {
    }
    public function GetFieldInputValuePrintable($documentType, $fieldType, $fieldValue)
    {
    }
    public function UnlockDocument($documentId, $workflowId)
    {
    }
    /**
     * The method of publishing the document. That is making it available in the public section.
     * @param string $documentId
     * @return bool|int
     */
    public function PublishDocument($documentId)
    {
    }
    /**
     * Method return array with all information about document. Array used for method RecoverDocumentFromHistory.
     * @param string $documentId
     * @param $historyIndex
     * @return null
     * @throws CBPArgumentNullException
     */
    public function GetDocumentForHistory($documentId, $historyIndex)
    {
    }
    public static function isFeatureEnabled($documentType, $feature)
    {
    }
}