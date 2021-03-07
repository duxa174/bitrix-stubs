<?php

namespace Bitrix\Socialnetwork\Item;

/**
 * Class for content view event handlers
 *
 * Class ContentViewHandler
 * @package Bitrix\Socialnetwork\Item
 */
final class ContentViewHandler
{
    const CONTENT_TYPE_ID_COMMENT = 'LOG_COMMENT';
    static final function getContentTypeIdList()
    {
    }
    /**
     * Handles content view event, marking IM notifications as read
     *
     * @param \Bitrix\Main\Event $event Event.
     * @return int|false
     */
    public static function onContentViewed($viewParams)
    {
    }
}