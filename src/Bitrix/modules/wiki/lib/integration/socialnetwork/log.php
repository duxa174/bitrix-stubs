<?php

namespace Bitrix\Wiki\Integration\SocialNetwork;

class Log
{
    const EVENT_ID_WIKI = 'wiki';
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