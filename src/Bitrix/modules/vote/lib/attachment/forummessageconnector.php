<?php

namespace Bitrix\Vote\Attachment;

final class ForumMessageConnector extends \Bitrix\Vote\Attachment\Connector
{
    protected static $messages = array();
    protected static $topics = array();
    private $canRead = null;
    /**
     * @param integer $userId User ID.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * @param integer $userId User ID.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
}