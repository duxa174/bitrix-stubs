<?php

class CBPListenActivity extends \CBPCompositeActivity implements \IBPActivityEventListener
{
    public $isListenTrigerred = \false;
    public $arActivityState = array();
    public function __construct($name)
    {
    }
    protected function ReInitialize()
    {
    }
    public function ToString()
    {
    }
    public function Execute()
    {
    }
    public function OnEvent(\CBPActivity $sender, $arEventParameters = array())
    {
    }
    public function Cancel()
    {
    }
    public static function ValidateChild($childActivity, $bFirstChild = \false)
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
}
final class CBPListenEventActivitySubscriber implements \IBPActivityExternalEventListener
{
    private $eventDrivenActivity;
    public function __construct(\CBPEventDrivenActivity $eventDriven)
    {
    }
    public function ToString()
    {
    }
    public function OnExternalEvent($arEventParameters = array())
    {
    }
}