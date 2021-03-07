<?php

namespace Bitrix\Sale\Integration\Numerator;

/**
 * Class AccountNumberCompatibilityManager
 * @package Bitrix\Sale\Integration\Numerator
 */
class AccountNumberCompatibilityManager
{
    /** For compatibility - in the past users could add a custom type
     * to the select list of number generation template
     * Now if you want to add new template words and extend numerator functionality
     * you should create your own generator (extending from NumberGenerator)
     * and write your logic there
     * @param \Bitrix\Main\Event $event
     * @return array
     */
    public static function onBuildNumeratorTemplateWordsList(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Event $event
     * @return EventResult
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function resetAccountNumberType(\Bitrix\Main\Entity\Event $event)
    {
    }
    /** If numerator template is the same as it was in an old version of API
     * we save account_number_template into b_option as if it was before
     * for compatibility reasons
     * @param Event $event
     * @return EventResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function updateAccountNumberType(\Bitrix\Main\Entity\Event $event)
    {
    }
}