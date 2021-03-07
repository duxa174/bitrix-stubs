<?php

namespace Bitrix\Forum\Replica;

class Bind
{
    /** @var \Bitrix\Forum\Replica\TopicHandler */
    protected static $topicHandler = null;
    /** @var \Bitrix\Forum\Replica\MessageHandler */
    protected static $messageHandler = null;
    /**
     * Initializes replication process on forum side.
     *
     * @return void
     */
    public function start()
    {
    }
}