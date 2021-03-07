<?php

namespace Bitrix\Blog\Integration\Socialnetwork;

/**
 * Class for content view event handlers
 *
 * Class ContentViewHandler
 * @package Bitrix\Blog\Integration\Socialnetwork
 */
final class ContentViewHandler
{
    const CONTENT_TYPE_ID_POST = 'BLOG_POST';
    const CONTENT_TYPE_ID_COMMENT = 'BLOG_COMMENT';
    static final function getContentTypeIdList()
    {
    }
    /**
     * Handles content view event, marking IM notifications as read
     *
     * @param \Bitrix\Main\Event $event Event.
     * @return int|false
     */
    public static function onContentViewed(\Bitrix\Main\Event $event)
    {
    }
}