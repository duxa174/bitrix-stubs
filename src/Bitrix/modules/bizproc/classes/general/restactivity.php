<?php

class CBPRestActivity extends \CBPActivity implements \IBPEventActivity, \IBPActivityExternalEventListener
{
    const TOKEN_SALT = 'bizproc';
    const PROPERTY_NAME_PREFIX = 'property_';
    const REST_ACTIVITY_ID = 0;
    protected static $restActivityData = array();
    protected $subscriptionId = 0;
    protected $eventId;
    private static function getRestActivityData()
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
    public function Subscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function Unsubscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function OnExternalEvent($eventParameters = array())
    {
    }
    public function Cancel()
    {
    }
    public function HandleFault(\Exception $exception)
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $workflowTemplate, $workflowParameters, $workflowVariables, $currentValues = \null, $formName = "")
    {
    }
    private static function getAppPlacement(int $appId, string $code) : ?array
    {
    }
    public static function renderPropertiesDialog(\Bitrix\Bizproc\Activity\PropertiesDialog $dialog)
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$workflowTemplate, &$workflowParameters, &$workflowVariables, $currentValues, &$errors)
    {
    }
    public static function ValidateProperties($testProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    private function CalculateTimeoutDuration()
    {
    }
    private static function checkAdminPermissions()
    {
    }
    public static function generateToken($workflowId, $activityName, $eventId)
    {
    }
    public static function extractToken($token)
    {
    }
}