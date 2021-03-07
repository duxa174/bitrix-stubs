<?php

namespace Bitrix\Forum\Comments;

final class TaskEntity extends \Bitrix\Forum\Comments\Entity
{
    const ENTITY_TYPE = 'tk';
    const MODULE_ID = 'tasks';
    const XML_ID_PREFIX = 'TASK_';
    private $taskPostData;
    private $hasAccess;
    protected static $permissions = array();
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
     * @return $this
     */
    public function dropCache()
    {
    }
    /**
     * @param integer $userId User id.
     * @return bool
     */
    private function checkHasAccess($userId)
    {
    }
    private static function checkEditOptionIsOn()
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