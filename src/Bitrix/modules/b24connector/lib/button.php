<?php

namespace Bitrix\B24Connector;

/**
 * Class Button
 * @package Bitrix\B24Connector
 */
class Button
{
    const ENUM_TYPE_OPEN_LINE = 'openline';
    const ENUM_TYPE_CRM_FORM = 'crmform';
    const ENUM_TYPE_CALLBACK = 'callback';
    const ENUM_LOCATION_TOP_LEFT = 1;
    const ENUM_LOCATION_TOP_MIDDLE = 2;
    const ENUM_LOCATION_TOP_RIGHT = 3;
    const ENUM_LOCATION_BOTTOM_RIGHT = 4;
    const ENUM_LOCATION_BOTTOM_MIDDLE = 5;
    const ENUM_LOCATION_BOTTOM_LEFT = 6;
    /**
     * @return array
     */
    public static function getTypeList()
    {
    }
    /**
     * @return array
     */
    public static function getLocationList()
    {
    }
}