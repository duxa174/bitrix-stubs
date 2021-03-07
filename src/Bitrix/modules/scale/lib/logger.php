<?php

namespace Bitrix\Scale;

/**
* Class Logger
* Makes records to bitrix-system site log
* @package Bitrix\Scale
*/
class Logger
{
    const LOG_LEVEL_DISABLE = 0;
    const LOG_LEVEL_ERROR = 10;
    const LOG_LEVEL_INFO = 20;
    const LOG_LEVEL_DEBUG = 30;
    /**
     * @param $level
     * @param $auditType
     * @param $itemId
     * @param $description
     * @return bool
     */
    public static function addRecord($level, $auditType, $itemId, $description)
    {
    }
    /**
     * @return array
     */
    public static function onEventLogGetAuditTypes()
    {
    }
}