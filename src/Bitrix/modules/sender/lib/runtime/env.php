<?php

namespace Bitrix\Sender\Runtime;

/**
 * Class Env
 * @package Bitrix\Sender\Runtime
 */
class Env
{
    /**
     * Return true if jobs run at cron.
     * @return bool
     */
    public static function isSenderJobCron()
    {
    }
    /**
     * Return true if reiterated jobs run at cron.
     * @return bool
     */
    public static function isReiteratedJobCron()
    {
    }
    /**
     * Get execution timeout.
     * @return int
     */
    public static function getJobExecutionTimeout()
    {
    }
    /**
     * Get execution item limit.
     * @return int
     */
    public static function getJobExecutionItemLimit()
    {
    }
    /**
     * Get execution item limit.
     * @return IThreadStrategy
     */
    public static function getThreadContext()
    {
    }
}