<?php

class CBPCreateDocumentActivity extends \CBPActivity
{
    const EXECUTION_MAX_DEPTH = 1;
    private static $executionDepth = array();
    public function __construct($name)
    {
    }
    public function Execute()
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "", $popupWindow = \null)
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
    private static function increaseExecutionDepth($key)
    {
    }
    private static function resetExecutionDepth($key)
    {
    }
}