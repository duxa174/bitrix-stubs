<?php

namespace Bitrix\Bizproc;

class SchedulerEventTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    public static function deleteBySubscription($workflowId, $handler, $eventModule, $eventType, $entityId = null)
    {
    }
    public static function deleteByWorkflow($workflowId)
    {
    }
    public static function isSubscribed($workflowId, $handler, $eventModule, $eventType, $entityId = null)
    {
    }
    public static function hasSubscriptions($eventModule, $eventType)
    {
    }
}