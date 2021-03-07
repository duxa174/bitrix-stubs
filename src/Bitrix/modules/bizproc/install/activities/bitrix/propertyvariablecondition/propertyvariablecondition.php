<?php

class CBPPropertyVariableCondition extends \CBPActivityCondition
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
     * @param $field
     * @param $operation
     * @param $value
     * @param null $baseType
     * @param CBPActivity $rootActivity
     * @param null $property
     * @return bool
     */
    private function CheckCondition($field, $operation, $value, $baseType, $rootActivity, $property = \null)
    {
    }
    public static function GetPropertiesDialog($documentType, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $defaultValue, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function GetPropertiesDialogValues($documentType, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues, &$errors)
    {
    }
}