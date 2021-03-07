<?php

namespace Bitrix\Blog\Integration\Socialnetwork;

class LogComment
{
    const EVENT_ID_COMMENT = 'blog_comment';
    public static function getEventIdList()
    {
    }
    /**
     * Return content for LogIndex.
     *
     * @param Event $event Event from LogIndex::setIndex().
     * @return EventResult
     */
    public static function onIndexGetContent(\Bitrix\Main\Event $event)
    {
    }
}