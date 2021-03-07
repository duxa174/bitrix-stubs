<?php

namespace Bitrix\Sale\DocumentGenerator;

/**
 * Class CallbackRegistry
 * @package Bitrix\Sale\DocumentGenerator
 */
final class CallbackRegistry
{
    /**
     * @param array $data
     * @return bool
     * @throws Main\ObjectException
     */
    public static function add(array $data)
    {
    }
    /**
     * @param Main\Event $event
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function onDocumentGenerated(\Bitrix\Main\Event $event)
    {
    }
}