<?php

namespace Bitrix\Main\UserField;

/**
 * Class TypeBase
 * @package Bitrix\Main\UserField
 * @deprecated
 */
abstract class TypeBase
{
    static $helper = array();
    const USER_TYPE_ID = '_generic';
    /**
     * @return TypeHelper
     */
    public static function getHelper()
    {
    }
    /**
     * @param TypeHelper $helper
     */
    public static function setHelper(\Bitrix\Main\UserField\TypeHelper $helper)
    {
    }
    protected static function initDisplay(array $additional = array())
    {
    }
    protected static function buildTagAttributes(array $attributes)
    {
    }
    protected static function getFieldName($arUserField, $arAdditionalParameters = array())
    {
    }
    protected static function normalizeFieldValue($value)
    {
    }
    protected static function getFieldValue($arUserField, $arAdditionalParameters = array())
    {
    }
    public static function getPublicText($userField)
    {
    }
}