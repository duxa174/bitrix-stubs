<?php

namespace Bitrix\Seo\Retargeting\Internals;

class QueueTable extends \Bitrix\Main\Entity\DataManager
{
    const MODULE_ID = 'seo';
    const PORTION_QUANTITY = 50;
    const ACTION_IMPORT = 'IMP';
    const ACTION_IMPORT_AND_AUTO_REMOVE = 'IAR';
    const ACTION_REMOVE = 'REM';
    const ACTION_AUTO_REMOVE = 'ARM';
    protected static $isAgentAdded = array();
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    protected static function processQueueAutoRemoveAgentName()
    {
    }
    protected static function getProcessQueueAgentName($type)
    {
    }
    public static function processQueueAutoRemoveAgent()
    {
    }
    public static function processQueueAgent($type)
    {
    }
    protected static function processQueue($type)
    {
    }
    protected static function divideListIntoPortions($list)
    {
    }
    protected static function addQueueAutoRemoveAgent()
    {
    }
    protected static function addQueueAgent($type)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}