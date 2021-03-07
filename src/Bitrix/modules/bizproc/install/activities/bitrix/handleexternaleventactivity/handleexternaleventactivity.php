<?php

class CBPHandleExternalEventActivity extends \CBPActivity implements \IBPEventActivity, \IBPActivityExternalEventListener, \IBPEventDrivenActivity
{
    private $isInEventActivityMode = \false;
    public function __construct($name)
    {
    }
    public function Subscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function Unsubscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function Execute()
    {
    }
    public function Cancel()
    {
    }
    public function HandleFault(\Exception $exception)
    {
    }
    public function OnExternalEvent($arEventParameters = array())
    {
    }
    public function OnExternalDrivenEvent($arEventParameters = array())
    {
    }
    private function onExternalEventHandler($arEventParameters = array())
    {
    }
    public function OnStateExternalEvent($arEventParameters = array())
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