<?php

abstract class CBPCompositeActivity extends \CBPActivity
{
    protected $arActivities = array();
    public function SetWorkflow(\CBPWorkflow $workflow)
    {
    }
    protected function ReInitialize()
    {
    }
    public function CollectNestedActivities()
    {
    }
    public function FixUpParentChildRelationship(\CBPActivity $nestedActivity)
    {
    }
    protected function ClearNestedActivities()
    {
    }
    public function Initialize()
    {
    }
    public function Finalize()
    {
    }
    public function HandleFault(\Exception $exception)
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
}