<?php

class CBPApproveActivity extends \CBPCompositeActivity implements \IBPEventActivity, \IBPActivityExternalEventListener
{
    private $taskId = 0;
    private $taskUsers = array();
    private $subscriptionId = 0;
    private $isInEventActivityMode = \false;
    private $taskStatus = \false;
    private $arApproveResults = array();
    private $arApproveOriginalResults = array();
    public function __construct($name)
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
    protected function ExecuteOnApprove()
    {
    }
    protected function ExecuteOnNonApprove()
    {
    }
    public function OnExternalEvent($arEventParameters = array())
    {
    }
    private function GetApproversNames($b)
    {
    }
    private function writeApproversResult()
    {
    }
    protected function OnEvent(\CBPActivity $sender)
    {
    }
    protected function ReInitialize()
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