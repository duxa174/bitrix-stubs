<?php

namespace Bitrix\Conversion;

final class CounterManager extends \Bitrix\Conversion\Internals\TypeManager
{
    protected static $event = 'OnGetCounterTypes';
    protected static $types = array();
    protected static $ready = false;
    protected static $checkModule = true;
}