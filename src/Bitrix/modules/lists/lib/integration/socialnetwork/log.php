<?php

namespace Bitrix\Lists\Integration\Socialnetwork;

class Log
{
    const EVENT_ID_LISTS = 'lists_new_element';
    /**
     * Returns set EVENT_ID processed by handler to generate content for full index.
     *
     * @param void
     * @return array
     */
    public static function getEventIdList()
    {
    }
    /**
     * Returns content for LogIndex.
     *
     * @param Event $event Event from LogIndex::setIndex().
     * @return EventResult
     */
    public static function onIndexGetContent(\Bitrix\Main\Event $event)
    {
    }
}