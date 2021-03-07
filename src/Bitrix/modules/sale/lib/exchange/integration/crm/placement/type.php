<?php

namespace Bitrix\Sale\Exchange\Integration\CRM\Placement;

class Type
{
    const UNDEFINED = 0;
    const DEFAULT_TOOLBAR = 1;
    const DEAL_DETAIL_TOOLBAR = 2;
    const DEFAULT_TOOLBAR_NAME = 'DEFAULT';
    const DEAL_DETAIL_TOOLBAR_NAME = 'CRM_DEAL_DETAIL_TOOLBAR';
    const FIRST_TYPE = 1;
    const LAST_TYPE = 2;
    public static function isDefined($typeId)
    {
    }
    public static function resolveId($name)
    {
    }
    public static function resolveName($typeId)
    {
    }
}