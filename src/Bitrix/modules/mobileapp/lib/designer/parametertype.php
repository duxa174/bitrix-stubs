<?php

namespace Bitrix\MobileApp\Designer;

class ParameterType
{
    /**
     * Group types
     */
    const GROUP_BACKGROUND = 1;
    const GROUP_BACKGROUND_LIGHT = 2;
    const GROUP = 13;
    /**
     * Value types
     */
    const SIZE = 3;
    const IMAGE_SET = 4;
    const VALUE_SET = 5;
    const IMAGE = 6;
    const COLOR = 7;
    const STRING = 8;
    const BOOLEAN = 9;
    const BUTTON_STRETCH = 10;
    const FILL_LIST = 11;
    const VALUE_LIST = 12;
    public static function getDesc($type, $paramName = false)
    {
    }
    public static function getStringType($intType)
    {
    }
}