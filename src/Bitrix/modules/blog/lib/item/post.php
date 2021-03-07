<?php

namespace Bitrix\Blog\Item;

class Post
{
    private $perm;
    private $permByOpenGroup;
    private $fields;
    public function __construct()
    {
    }
    public static function getById($postId = 0, $params = array())
    {
    }
    public function setFields($fields = array())
    {
    }
    public function getFields()
    {
    }
    public function setId($id = 0)
    {
    }
    public function getId()
    {
    }
    public function getSonetPerms($params = array())
    {
    }
    /**
     * Detect tags in data array.
     * @param array $fields Data array.
     * @return array
     */
    public function detectTags()
    {
    }
    public function getTags()
    {
    }
    /**
     * Returns log entry Id of a blog post
     * @return int|boolean
     */
    public function getLogId(array $params = [])
    {
    }
    /**
     * Deactivates log entry of a blog post
     * @param int $postId
     * @return boolean
     */
    public function deactivateLogEntry()
    {
    }
    /**
     * Activates log entry of a blog post
     * @param int $postId
     * @return boolean
     */
    public function activateLogEntry()
    {
    }
}