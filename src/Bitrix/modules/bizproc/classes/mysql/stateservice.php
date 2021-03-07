<?php

class CBPStateService extends \CBPAllStateService
{
    public function SetState($workflowId, $arState, $arStatePermissions = array())
    {
    }
    public function SetStateParameters($workflowId, $arStateParameters = array())
    {
    }
    public function AddStateParameter($workflowId, $arStateParameter)
    {
    }
    public function DeleteStateParameter($workflowId, $name)
    {
    }
    public static function __InsertStateHack($id, $moduleId, $entity, $documentId, $templateId, $state, $stateTitle, $stateParameters, $arStatePermissions)
    {
    }
}