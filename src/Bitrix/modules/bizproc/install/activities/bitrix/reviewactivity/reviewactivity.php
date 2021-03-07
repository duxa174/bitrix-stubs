<?php

class CBPReviewActivity extends \CBPCompositeActivity implements \IBPEventActivity, \IBPActivityExternalEventListener
{
    private $taskId = 0;
    private $taskUsers = array();
    private $subscriptionId = 0;
    private $isInEventActivityMode = \false;
    private $taskStatus = \false;
    private $arReviewResults = array();
    private $arReviewOriginalResults = array();
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
    private function ReplaceTemplate($str, $ar)
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
    public function OnExternalEvent($arEventParameters = array())
    {
    }
    private function GetReviewersNames()
    {
    }
    protected function OnEvent(\CBPActivity $sender)
    {
    }
    public static function ShowTaskForm($arTask, $userId, $userName = "")
    {
    }
    public static function getTaskControls($arTask)
    {
    }
    public static function PostTaskForm($arTask, $userId, $arRequest, &$arErrors, $userName = "", $realUserId = \null)
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
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
}