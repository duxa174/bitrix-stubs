<?php

namespace Bitrix\Conversion;

final class AttributeManager extends \Bitrix\Conversion\Internals\TypeManager
{
    protected static $event = 'OnGetAttributeTypes';
    protected static $types = array();
    protected static $ready = false;
    protected static $checkModule = true;
    public static function getGroupedTypes()
    {
    }
}