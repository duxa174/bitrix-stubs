<?php

namespace Bitrix\Forum\Comments;

abstract class BaseObject
{
    const ERROR_PARAMS_FORUM_ID = 'params0001';
    const ERROR_PARAMS_TOPIC_ID = 'params0002';
    const ERROR_PARAMS_ENTITY_ID = 'params0003';
    private static $topics = array();
    private static $users = array();
    /* @var \Bitrix\Forum\Comments\User */
    protected $user;
    /* @var \Bitrix\Forum\Comments\Entity */
    protected $entity;
    /** @var array */
    protected $forum;
    /** @var array */
    protected $topic;
    /** @var  ErrorCollection */
    protected $errorCollection;
    public function __construct($forumId, $entity, $userId = null)
    {
    }
    protected function setEntity(array $id)
    {
    }
    /**
     * Returns entity which manage all rights. For example forum topic or task
     * @return Entity
     */
    public function getEntity()
    {
    }
    protected function setTopic()
    {
    }
    protected function createTopic()
    {
    }
    /**
     * Returns forum topic
     * @return array
     */
    public function getTopic()
    {
    }
    /**
     * @return bool
     */
    public function hasErrors()
    {
    }
    /**
     * @return array
     */
    public function getErrors()
    {
    }
    protected static function checkForumId(&$forumId)
    {
    }
    protected function setForum($id)
    {
    }
    /**
     * Returns forum
     * @return array
     */
    public function getForum()
    {
    }
    /**
     * Redefines forum params
     *
     * @param array $params Array(key=>value, key2=>value2) of fields to redefine forum fields.
     * @return $this
     */
    public function setForumFields(array $params)
    {
    }
    /**
     * @param $userId
     * @return User
     */
    protected function setUser($userId)
    {
    }
    /**
     * @return User
     */
    public function getUser()
    {
    }
    /**
     * @return \CMain
     */
    public function getApplication()
    {
    }
    private static function getUserFromForum($userId)
    {
    }
    protected function getUserName($userId)
    {
    }
}