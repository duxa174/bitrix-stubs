<?php

namespace Bitrix\Forum\Comments;

class Entity
{
    const ENTITY_TYPE = 'default';
    const MODULE_ID = 'forum';
    const XML_ID_PREFIX = 'TOPIC_';
    /** @var array */
    protected $entity;
    /** @var array */
    protected $forum;
    /** @var array  */
    protected static $permissions = array();
    /** @var bool */
    private $editOwn = false;
    protected static $pathToUser = '/company/personal/user/#user_id#/';
    protected static $pathToGroup = '/workgroups/group/#group_id#/';
    /** @var array */
    protected static $entities;
    /**
     * @param array $entity
     * @param array $storage
     */
    public function __construct(array $entity, array $storage)
    {
    }
    public function getId()
    {
    }
    public function getType()
    {
    }
    public function getXmlId()
    {
    }
    /**
     * @return array
     */
    public function getFullId()
    {
    }
    public static function className()
    {
    }
    public static function getModule()
    {
    }
    public static function getEntityType()
    {
    }
    public static function getXmlIdPrefix()
    {
    }
    /**
     * @param integer $userId User id.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * @param integer $userId User id.
     * @return bool
     */
    public function canAdd($userId)
    {
    }
    /**
     * @param integer $userId User id.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
    /**
     * @param integer $userId User id.
     * @return bool
     */
    public function canEditOwn($userId)
    {
    }
    /**
     * @param integer $userId User id.
     * @return bool
     */
    public function canModerate($userId)
    {
    }
    /**
    * @param integer $userId User id.
    * @param string $permission A < E < I < M < Q < U < Y
    	// A - NO ACCESS		E - READ			I - ANSWER
    	// M - NEW TOPIC		Q - MODERATE	U - EDIT			Y - FULL_ACCESS.
    * @return $this
    */
    public function setPermission($userId, $permission)
    {
    }
    /**
     * @param bool $permission
     * @return $this
     */
    public function setEditOwn($permission)
    {
    }
    /**
     * @param integer $userId User id.
     * @return $this
     */
    public function getPermission($userId)
    {
    }
    /**
     * @param string $type Type entity.
     * @return array|null
     */
    public static function getEntityByType($type = "")
    {
    }
    /**
     * @param string $xmlId Type entity.
     * @return array|null
     */
    public static function getEntityByXmlId($xmlId = "")
    {
    }
    private static function getEntities()
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