<?php

class CBPSequentialWorkflowActivity extends \CBPSequenceActivity implements \IBPRootActivity
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
    public function ToString()
    {
    }
    public function Execute()
    {
    }
    protected function OnSequenceComplete()
    {
    }
}