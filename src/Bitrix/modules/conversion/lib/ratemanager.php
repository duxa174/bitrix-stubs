<?php

namespace Bitrix\Conversion;

final class RateManager extends \Bitrix\Conversion\Internals\TypeManager
{
    protected static $event = 'OnGetRateTypes';
    protected static $types = array();
    protected static $ready = false;
    protected static $checkModule = true;
    /** @internal */
    public static function getRatesCounters(array $types)
    {
    }
    public static function getRatesCalculated(array $types, array $counters)
    {
    }
}