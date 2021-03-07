<?php

namespace Bitrix\Vote\Base;

class BaseObject
{
    /** @var int */
    protected $id;
    /** @var  ErrorCollection */
    protected $errorCollection;
    protected static $userGroups = [];
    protected static $objectStorage = [];
    public function __construct($id)
    {
    }
    /**
     * exists only for child class
     * @return void
     */
    public function init()
    {
    }
    /**
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * @inheritdoc
     * Returns an error with the necessary code.
     * @param string|int $code The code of the error.
     * @return Error|null
     */
    public function getErrorByCode($code)
    {
    }
    /**
     * @param int $userId User ID.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * @param int $userId User ID.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
    /**
     * @return \CUser
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
    /**
     * @param integer $userId User ID.
     * @return array
     */
    public static function loadUserGroups($userId)
    {
    }
    /**
     * @param integer $id Entity ID.
     * @param bool $shouldBeNewIfIdIsNull
     * @return BaseObject
     */
    public static function loadFromId($id, $shouldBeNewIfIdIsNull = false)
    {
    }
    /**
     * Debug function
     */
    public static function shutdown()
    {
    }
}