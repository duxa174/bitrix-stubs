<?php

class CBPRequestInformationActivity extends \CBPActivity implements \IBPEventActivity, \IBPActivityExternalEventListener
{
    const ACTIVITY = 'RequestInformationActivity';
    const CONTROLS_PREFIX = 'bpriact_';
    private $taskId = 0;
    private $taskUsers = array();
    private $subscriptionId = 0;
    private $isInEventActivityMode = \false;
    private $taskStatus = \false;
    public function __construct($name)
    {
    }
    protected function ReInitialize()
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
    public function HandleFault(\Exception $exception)
    {
    }
    public function Cancel()
    {
    }
    public function OnExternalEvent($eventParameters = array())
    {
    }
    protected function OnEvent(\CBPActivity $sender)
    {
    }
    public static function ShowTaskForm($arTask, $userId, $userName = "", $arRequest = \null)
    {
    }
    public static function getTaskControls($arTask)
    {
    }
    protected static function getEventParameters($task, $request)
    {
    }
    protected static function getTaskResponse($task)
    {
    }
    protected static function prepareResponseFields($task, $values)
    {
    }
    protected static function validateTaskEventParameters($arTask, $eventParameters)
    {
    }
    public static function PostTaskForm($task, $userId, $request, &$errors, $userName = "", $realUserId = \null)
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    private function findRequestChanges($properties, $values)
    {
    }
    private function CalculateTimeoutDuration()
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "", $popupWindow = \null)
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
    public function collectUsages()
    {
    }
}