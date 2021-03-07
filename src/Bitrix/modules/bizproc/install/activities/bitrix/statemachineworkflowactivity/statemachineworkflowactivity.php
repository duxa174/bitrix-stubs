<?php

class CBPStateMachineWorkflowActivity extends \CBPCompositeActivity implements \IBPActivityEventListener
{
    private $documentId = array();
    private $workflowTemplateId = \null;
    private $templateUserId = \null;
    protected $documentType = array();
    private $workflowStatus = \CBPWorkflowStatus::Created;
    private $customStatusMode = \false;
    protected $arVariables = array();
    protected $arVariablesTypes = array();
    protected $arFieldTypes = array();
    public function __construct($name)
    {
    }
    public function ToString()
    {
    }
    public function GetDocumentId()
    {
    }
    public function SetDocumentId($documentId)
    {
    }
    public function GetWorkflowTemplateId()
    {
    }
    public function SetWorkflowTemplateId($workflowTemplateId)
    {
    }
    public function getTemplateUserId()
    {
    }
    public function setTemplateUserId($userId)
    {
    }
    public function GetWorkflowStatus()
    {
    }
    public function SetWorkflowStatus($status)
    {
    }
    public function SetCustomStatusMode()
    {
    }
    public function Execute()
    {
    }
    protected function GetStateActivityByName($name)
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
    public function GetAvailableStateEvents()
    {
    }
    public static function ValidateChild($childActivity, $bFirstChild = \false)
    {
    }
}