<?php

class CBPFieldCondition extends \CBPActivityCondition
{
    const CONDITION_JOINER_AND = 0;
    const CONDITION_JOINER_OR = 1;
    public $condition = \null;
    public function __construct($condition)
    {
    }
    public function Evaluate(\CBPActivity $ownerActivity)
    {
    }
    public function collectUsages(\CBPActivity $ownerActivity)
    {
    }
    /**
     * @param $fieldName
     * @param $field
     * @param $operation
     * @param $value
     * @param $baseType
     * @param $type
     * @param CBPActivity $rootActivity
     * @return bool
     */
    private function CheckCondition($fieldName, $field, $operation, $value, $baseType, $type, $rootActivity)
    {
    }
    public static function GetPropertiesDialog($documentType, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $defaultValue, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function GetPropertiesDialogValues($documentType, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
}