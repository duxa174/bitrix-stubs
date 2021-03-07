<?php

namespace Bitrix\Vote\Attachment;

final class BlogPostConnector extends \Bitrix\Vote\Attachment\Connector
{
    private $canRead = null;
    private $canEdit = null;
    private static $permissions = array();
    private static $posts = array();
    private static function getPostData($entityId)
    {
    }
    private function getPermission($userId)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    public function checkFields(&$data)
    {
    }
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