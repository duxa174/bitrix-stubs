<?php

class CBPAllStateService extends \CBPRuntimeService
{
    const COUNTERS_CACHE_TAG_PREFIX = 'b_bp_wfi_cnt_';
    public function SetStateTitle($workflowId, $stateTitle)
    {
    }
    public function SetStatePermissions($workflowId, $arStatePermissions = array(), $bRewrite = \true)
    {
    }
    public function GetStateTitle($workflowId)
    {
    }
    public static function GetStateDocumentId($workflowId)
    {
    }
    public function AddWorkflow($workflowId, $workflowTemplateId, $documentId, $starterUserId = 0)
    {
    }
    public static function DeleteWorkflow($workflowId)
    {
    }
    public function DeleteAllDocumentWorkflows($documentId)
    {
    }
    public function onStatusChange($workflowId, $status)
    {
    }
    private static function __ExtractState(&$arStates, $arResult)
    {
    }
    public static function CountDocumentWorkflows($documentId)
    {
    }
    public static function GetDocumentStates($documentId, $workflowId = "")
    {
    }
    public static function getIdsByDocument(array $documentId)
    {
    }
    public static function GetWorkflowState($workflowId)
    {
    }
    public static function getWorkflowStateInfo($workflowId)
    {
    }
    public static function getWorkflowIntegerId($workflowId)
    {
    }
    public static function getWorkflowByIntegerId($integerId)
    {
    }
    public static function DeleteByDocument($documentId)
    {
    }
    public static function deleteCompletedStates(array $documentId)
    {
    }
    public static function MergeStates($firstDocumentId, $secondDocumentId)
    {
    }
    public static function MigrateDocumentType($oldType, $newType, $workflowTemplateIds)
    {
    }
    public function SetState($workflowId, $arState, $arStatePermissions = array())
    {
    }
    public function SetStateParameters($workflowId, $arStateParameters = array())
    {
    }
    public function AddStateParameter($workflowId, $arStateParameter)
    {
    }
    public function DeleteStateParameter($workflowId, $name)
    {
    }
    public static function __InsertStateHack($id, $moduleId, $entity, $documentId, $templateId, $state, $stateTitle, $stateParameters, $arStatePermissions)
    {
    }
    public static function getRunningCounters($userId)
    {
    }
    protected static function cleanRunningCountersCache($users)
    {
    }
}
//Compatibility
class CBPStateService extends \CBPAllStateService
{
}