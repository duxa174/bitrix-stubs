<?php

namespace Bitrix\Main\Diag;

class Helper
{
    /**
     * Returns current Unix timestamp with microseconds.
     *
     * @return float
     */
    public static function getCurrentMicrotime()
    {
    }
    /**
     * Returns array backtrace.
     *
     * @param integer $limit Maximum stack elements to return.
     * @param null|integer $options Passed to debug_backtrace options.
     * @param integer $skip How many stack frames to skip.
     *
     * @return array
     * @see debug_backtrace
     */
    public static function getBackTrace($limit = 0, $options = null, $skip = 1)
    {
    }
}