<?php

namespace Bitrix\Forum\Integration\Socialnetwork;

class LogComment
{
    const EVENT_ID_FORUM_COMMENT = 'forum';
    const EVENT_ID_TASKS_COMMENT = 'tasks_comment';
    const EVENT_ID_CALENDAR_COMMENT = 'calendar_comment';
    const EVENT_ID_WIKI_COMMENT = 'wiki_comment';
    const EVENT_ID_TIMEMAN_ENTRY_COMMENT = 'timeman_entry_comment';
    const EVENT_ID_TIMEMAN_REPORT_COMMENT = 'report_comment';
    const EVENT_ID_LISTS_NEW_ELEMENT_COMMENT = 'lists_new_element_comment';
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