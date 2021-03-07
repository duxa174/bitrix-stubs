<?php

namespace Bitrix\Forum\Comments;

final class CalendarEntity extends \Bitrix\Forum\Comments\Entity
{
    const ENTITY_TYPE = 'ev';
    const MODULE_ID = 'calendar';
    const XML_ID_PREFIX = 'EVENT_';
    protected static $permissions = array();
    private $canRead = null;
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canAdd($userId)
    {
    }
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canEditOwn($userId)
    {
    }
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
    /**
     * Event before indexing message.
     * @param integer $id Message ID.
     * @param array $message Message data.
     * @param array &$index Search index array.
     * @return boolean
     */
    public static function onMessageIsIndexed($id, array $message, array &$index)
    {
    }
}