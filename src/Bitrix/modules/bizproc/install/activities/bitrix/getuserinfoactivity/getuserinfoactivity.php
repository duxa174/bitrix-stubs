<?php

class CBPGetUserInfoActivity extends \CBPActivity
{
    private $userFields;
    protected static function getUserFields()
    {
    }
    public function __construct($name)
    {
    }
    protected function ReInitialize()
    {
    }
    public function Execute()
    {
    }
    protected function convertSelectValue($value, $fieldMap)
    {
    }
    protected function isCreatedByUser($fieldName)
    {
    }
    protected static function getFieldsCreatedByUser()
    {
    }
    protected static function resolveUserFieldType(string $type) : ?string
    {
    }
    protected static function getOptionsFromFieldEnum($field)
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$errors)
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
}