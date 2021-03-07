<?php

class CBPSchedulerService extends \CBPRuntimeService
{
    /**
     * @param bool $withType Return as array [value, type].
     * @return int|array
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getDelayMinLimit($withType = \false)
    {
    }
    public static function setDelayMinLimit($limit, $type = 's')
    {
    }
    public function SubscribeOnTime($workflowId, $eventName, $expiresAt)
    {
    }
    private static function addAgent($workflowId, $eventName, $expiresAt, $counter = 0)
    {
    }
    public function UnSubscribeOnTime($id)
    {
    }
    public static function OnAgent($workflowId, $eventName, $eventParameters = array())
    {
    }
    public function SubscribeOnEvent($workflowId, $eventHandlerName, $eventModule, $eventName, $entityId = \null)
    {
    }
    public function UnSubscribeOnEvent($workflowId, $eventHandlerName, $eventModule, $eventName, $entityId = \null)
    {
    }
    /**
     * @deprecated
     * @param $workflowId
     * @param $eventName
     * @param array $arEventParameters
     */
    public static function OnEvent($workflowId, $eventName, $arEventParameters = array())
    {
    }
    public static function sendEvents($eventModule, $eventName, $entityKey)
    {
    }
    public static function repeatEvent($eventId, $counter = 0)
    {
    }
    private static function sendEventToWorkflow($event, $counter = 0)
    {
    }
    private static function filterEventParameters(array $parameters)
    {
    }
    private static function addEventRepeatAgent($event, $counter = 0)
    {
    }
    private static function addAgentInternal($name, $expiresAt)
    {
    }
    private static function getExpiresTimeByCounter($counter = 0)
    {
    }
}