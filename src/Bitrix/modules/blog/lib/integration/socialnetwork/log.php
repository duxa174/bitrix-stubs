<?php

namespace Bitrix\Blog\Integration\Socialnetwork;

class Log
{
    const EVENT_ID_POST = 'blog_post';
    const EVENT_ID_POST_IMPORTANT = 'blog_post_important';
    const EVENT_ID_POST_VOTE = 'blog_post_vote';
    const EVENT_ID_POST_GRAT = 'blog_post_grat';
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