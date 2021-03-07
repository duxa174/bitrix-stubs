<?php

namespace Bitrix\Blog\Internals;

/**
 * Class for incoming mail event handlers
 *
 * Class MailHandler
 * @package Bitrix\Blog\Internals
 */
final class MailHandler
{
    /**
     * Adds new comment from mail
     *
     * @param \Bitrix\Main\Event $event Event.
     * @return int|false
     */
    public static function handleReplyReceivedBlogPost(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Adds new post from mail
     *
     * @param \Bitrix\Main\Event $event Event.
     * @return int|false
     */
    public static function handleForwardReceivedBlogPost(\Bitrix\Main\Event $event)
    {
    }
}