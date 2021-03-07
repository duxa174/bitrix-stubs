<?php

class CBPParallelActivity extends \CBPCompositeActivity implements \IBPActivityEventListener
{
    private $isExecuting = \false;
    public function __construct($name)
    {
    }
    public function Cancel()
    {
    }
    public function Execute()
    {
    }
    public function OnEvent(\CBPActivity $sender, $arEventParameters = array())
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
}