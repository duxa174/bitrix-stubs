<?php

class CBPForEachActivity extends \CBPCompositeActivity implements \IBPActivityEventListener
{
    private $values;
    private $valuesKeys;
    public function __construct($name)
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
    private function TryNextIteration()
    {
    }
    protected function ReInitialize()
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