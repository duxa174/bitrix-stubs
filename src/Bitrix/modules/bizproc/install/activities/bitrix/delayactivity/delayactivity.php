<?php

class CBPDelayActivity extends \CBPActivity implements \IBPEventActivity, \IBPActivityExternalEventListener, \IBPEventDrivenActivity
{
    private $subscriptionId = 0;
    private $isInEventActivityMode = \false;
    public function __construct($name)
    {
    }
    public function Cancel()
    {
    }
    public function Execute()
    {
    }
    public function Subscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function Unsubscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function OnExternalEvent($arEventParameters = array())
    {
    }
    public function HandleFault(\Exception $exception)
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    private function CalculateTimeoutDuration()
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "")
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$errors)
    {
    }
}