<?php

abstract class CBPActivityCondition
{
    public abstract function Evaluate(\CBPActivity $ownerActivity);
    public static function CreateInstance($code, $data)
    {
    }
    public function collectUsages(\CBPActivity $ownerActivity)
    {
    }
    public static function ValidateProperties($value = \null, \CBPWorkflowTemplateUser $user = \null)
    {
    }
    public static function CallStaticMethod($code, $method, $arParameters = array())
    {
    }
}