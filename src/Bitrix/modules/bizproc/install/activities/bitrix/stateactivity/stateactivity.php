<?php

class CBPStateActivity extends \CBPCompositeActivity implements \IBPActivityEventListener
{
    public $isListenTrigerred = \false;
    public $arActivityState = array();
    protected $nextStateName = "";
    public function __construct($name)
    {
    }
    public function ToString()
    {
    }
    public function SetNextStateName($name)
    {
    }
    public function Execute()
    {
    }
    private function ExecuteState()
    {
    }
    public function OnEvent(\CBPActivity $sender, $arEventParameters = array())
    {
    }
    public function Cancel()
    {
    }
    /**
     * Returns available events for current state
     *
     */
    private function GetAvailableStateEvents()
    {
    }
    public static function ValidateChild($childActivity, $bFirstChild = \false)
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
}
final class CBPStateEventActivitySubscriber implements \IBPActivityExternalEventListener
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