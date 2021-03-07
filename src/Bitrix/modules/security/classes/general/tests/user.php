<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage security
 * @copyright 2001-2013 Bitrix
 */
/**
 * Class CSecurityUserTest
 * @since 14.0.3
 */
class CSecurityUserTest extends \CSecurityBaseTest
{
    protected $internalName = 'UsersTest';
    /** @var CSecurityTemporaryStorage */
    protected $sessionData = \null;
    protected $maximumExecutionTime = 0.0;
    protected $savedMaxExecutionTime = 0.0;
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    /**
     * @param array $params
     * @return array
     */
    public function check(array $params = array())
    {
    }
    protected function checkOtp()
    {
    }
    /**
     * @param array $weakUsers
     * @return string
     */
    protected static function formatRecommendation(array $weakUsers)
    {
    }
    /**
     * @param int $id
     * @return array
     */
    protected static function getUserPassword($id)
    {
    }
    /**
     * @param int $id
     * @return int
     */
    protected static function getNextUserId($id)
    {
    }
    /**
     * @param int[] $ids
     * @return array
     */
    protected static function getUsersLogins(array $ids)
    {
    }
    /**
     * @param string $salt
     * @param string $hash
     * @param string $password
     * @return bool
     */
    protected static function isUserPassword($salt, $hash, $password)
    {
    }
    protected static function getPasswordDictionary()
    {
    }
    /**
     * @param int $limit
     * @param int $minId
     * @return CDBResult
     */
    protected static function getAdminUserList($limit = 0, $minId = 0)
    {
    }
    /**
     * @return bool
     */
    protected function isTimeOut()
    {
    }
}