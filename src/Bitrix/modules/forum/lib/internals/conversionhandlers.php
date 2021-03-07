<?php

namespace Bitrix\Forum\Internals;

final class ConversionHandlers
{
    /**
     * Returns conversion counter types
     *
     * @return array
     */
    public static function onGetCounterTypes()
    {
    }
    /**
     * Returns conversion rate types
     *
     * @return array
     */
    public static function onGetRateTypes()
    {
    }
    /**
     * Increments conversion topic day counter
     *
     * @param int $id Topic ID.
     * @param array $fields Topic fields.
     * @return void
     */
    public static function onTopicAdd($id, $fields)
    {
    }
    /**
     * Increments conversion post day counter
     *
     * @param int $id Topic ID.
     * @param array $message Message fields.
     * @param array $topicInfo Message TOPIC_INFO field.
     * @param array $forumInfo Message FORUM_INFO field.
     * @param array $fields Message fields used to insert.
     * @return void
     */
    public static function onMessageAdd($id, $message, $topicInfo, $forumInfo, $fields)
    {
    }
}