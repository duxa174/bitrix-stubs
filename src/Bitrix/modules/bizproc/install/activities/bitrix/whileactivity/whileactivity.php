<?php

class CBPWhileActivity extends \CBPCompositeActivity implements \IBPActivityEventListener
{
    const CYCLE_LIMIT = 1000;
    private $cycleCounter = 0;
    public function __construct($name)
    {
    }
    protected function GetACNames()
    {
    }
    public function InitializeFromArray($arParams)
    {
    }
    private function CreateCondition($conditionCode, $data)
    {
    }
    public function Execute()
    {
    }
    public function Cancel()
    {
    }
    public function OnEvent(\CBPActivity $sender, $arEventParameters = array())
    {
    }
    public function __wakeup()
    {
    }
    private function TryNextIteration()
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
    public function collectUsages()
    {
    }
}