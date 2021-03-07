<?php

namespace Bitrix\Conversion;

final class AttributeGroupManager extends \Bitrix\Conversion\Internals\TypeManager
{
    protected static $event = 'OnGetAttributeGroupTypes';
    protected static $types = array();
    protected static $ready = false;
    protected static $checkModule = false;
}