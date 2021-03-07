<?php

class CBPAllTrackingService extends \CBPRuntimeService
{
    protected $skipTypes = array();
    protected $forcedModeWorkflows = array();
    protected static $userGroupsCache = array();
    public function Start(\CBPRuntime $runtime = \null)
    {
    }
    public function DeleteAllWorkflowTracking($workflowId)
    {
    }
    public static function DumpWorkflow($workflowId)
    {
    }
    public function LoadReport($workflowId)
    {
    }
    public static function DeleteByWorkflow($workflowId)
    {
    }
    public function setCompletedByWorkflow($workflowId, $flag = \true)
    {
    }
    public static function ClearOldAgent()
    {
    }
    public static function parseStringParameter($string, $documentType = \null)
    {
    }
    public static function parseStringParameterMatches($matches, $documentType = \null)
    {
    }
    public function setForcedMode($workflowId)
    {
    }
    public function isForcedMode($workflowId)
    {
    }
    public function canWrite($type, $workflowId)
    {
    }
    public function Write($workflowId, $type, $actionName, $executionStatus, $executionResult, $actionTitle = "", $actionNote = "", $modifiedBy = 0)
    {
    }
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function ClearOld($days = 0)
    {
    }
}
class CBPTrackingType
{
    const Unknown = 0;
    const ExecuteActivity = 1;
    const CloseActivity = 2;
    const CancelActivity = 3;
    const FaultActivity = 4;
    const Custom = 5;
    const Report = 6;
    const AttachedEntity = 7;
    const Trigger = 8;
    const Error = 9;
}
//Compatibility
class CBPTrackingService extends \CBPAllTrackingService
{
}