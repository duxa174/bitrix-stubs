<?php

namespace Bitrix\Forum\Comments;

class EventManager
{
    public static function init()
    {
    }
    public static function updateIBlockPropertyAfterAddingMessage($ID, $arFields, $arTopic = array())
    {
    }
    public static function updateIBlockPropertyAfterDeletingMessage($ID, $arFields)
    {
    }
    public static function updateIBlockProperty($ID, $TYPE, $arMessage, $arTopic = array())
    {
    }
    /**
     * Event before indexing message.
     * @param integer $id Message ID.
     * @param array $message Message data.
     * @param array &$index Search index array.
     * @return boolean
     */
    public static function onMessageIsIndexed($id, array $message, array &$index)
    {
    }
}