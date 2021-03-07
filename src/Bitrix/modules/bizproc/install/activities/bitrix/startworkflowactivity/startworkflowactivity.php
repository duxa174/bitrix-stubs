<?php

class CBPStartWorkflowActivity extends \CBPActivity implements \IBPEventActivity, \IBPActivityExternalEventListener
{
    private static $templatesCache = array();
    protected $wfId = \null;
    public function __construct($name)
    {
    }
    protected function ReInitialize()
    {
    }
    public function OnExternalEvent($eventParameters = array())
    {
    }
    public function Subscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function Unsubscribe(\IBPActivityExternalEventListener $eventHandler)
    {
    }
    public function Cancel()
    {
    }
    public function HandleFault(\Exception $exception)
    {
    }
    public function Execute()
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $currentValues = \null, $formName = "", $popupWindow, $siteId = '')
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$workflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $currentValues, &$errors)
    {
    }
    public static function ValidateProperties($testProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    public static function getAjaxResponse($request)
    {
    }
    protected static function jsObjectToPropertiesDialog(array $dialog)
    {
    }
    private static function checkAdminPermissions()
    {
    }
    private static function getTypesList($entityId)
    {
    }
    private static function getTemplatesList($document)
    {
    }
    private static function getTemplate($id)
    {
    }
    private static function extractTemplateParameterValues($documentType, $templateId, $request, &$errors = array())
    {
    }
    private static function renderTemplateParametersForm($documentType, $templateId, $formName, array $currentValues = array())
    {
    }
    private static function renderRobotTemplateParametersForm($dialog, $templateId, array $currentValues = array())
    {
    }
}