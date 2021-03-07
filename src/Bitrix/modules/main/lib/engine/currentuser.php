<?php

namespace Bitrix\Main\Engine;

final class CurrentUser
{
    /** @var CUser */
    private $cuser;
    /**
     * CurrentUser constructor.
     * In future when we create User in D7 we can make refactoring and make public the constructor.
     */
    protected function __construct()
    {
    }
    /**
     * Returns the fully qualified name of this class.
     * @return string
     */
    public static function className()
    {
    }
    /**
     * Returns current user by global $USER.
     * @return static
     */
    public static function get()
    {
    }
    /**
     * @return null
     */
    public function getId()
    {
    }
    /**
     * @return mixed
     */
    public function getLogin()
    {
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
    }
    /**
     * @return mixed
     */
    public function getFullName()
    {
    }
    /**
     * @return mixed
     */
    public function getFirstName()
    {
    }
    /**
     * @return mixed
     */
    public function getLastName()
    {
    }
    /**
     * @return mixed
     */
    public function getSecondName()
    {
    }
    /**
     * @return array
     */
    public function getUserGroups()
    {
    }
    /**
     * @return string
     */
    public function getFormattedName()
    {
    }
    /**
     * @param string $operationName
     * @return boolean
     */
    public function canDoOperation($operationName)
    {
    }
    /**
     * @return boolean
     */
    public function isAdmin()
    {
    }
}