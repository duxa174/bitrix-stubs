<?php

namespace Bitrix\Forum\Integration\Search;

class Topic extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "forum";
    public static function getTitle()
    {
    }
    /**
     * @inheritDoc
     */
    function execute(array &$option)
    {
    }
    public static function reindexFirstMessage(int $topicId)
    {
    }
    public static function reindex(int $topicId)
    {
    }
}