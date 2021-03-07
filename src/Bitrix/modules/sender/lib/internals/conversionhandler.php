<?php

namespace Bitrix\Sender\Internals;

class ConversionHandler
{
    const CLICK_PARAM_NAME = 'BITRIX_SENDER_TO_CONVERSION_CLICK_ID';
    public static function onAfterRecipientClick($data)
    {
    }
    public static function onBeforeProlog()
    {
    }
    public static function onSetDayContextAttributes(\Bitrix\Conversion\DayContext $context)
    {
    }
    public static function onGetAttributeTypes()
    {
    }
}