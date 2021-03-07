<?php

class CBPSetFieldActivity extends \CBPActivity implements \IBPActivityExternalEventListener
{
    public function __construct($name)
    {
    }
    public function Execute()
    {
    }
    protected function prepareFieldsValues(array $documentId, array $documentType, array $fields, $mergeValues = \null) : array
    {
    }
    public function OnExternalEvent($arEventParameters = array())
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "", $popupWindow = \null)
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$errors)
    {
    }
    public function collectUsages()
    {
    }
}