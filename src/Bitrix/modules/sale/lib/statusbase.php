<?php

namespace Bitrix\Sale;

/**
 * Class StatusBase
 * @package Bitrix\Sale
 */
abstract class StatusBase
{
    const TYPE = '';
    /**
     * @param array $parameters
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $userId
     *
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function getUserGroups($userId)
    {
    }
    /**
     * @param $groupId
     * @param $fromStatus
     * @param array $operations
     * @return bool
     * @throws Main\NotImplementedException
     * @throws SystemException
     */
    public static function canGroupDoOperations($groupId, $fromStatus, array $operations)
    {
    }
    /**
     * Get statuses that user can switch to.
     *
     * @param $userId
     * @param $fromStatus
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function getAllowedUserStatuses($userId, $fromStatus)
    {
    }
    /**
     * @param $groupId
     * @param $fromStatus
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected static function getAllowedGroupStatuses($groupId, $fromStatus)
    {
    }
    /**
     * @param $names
     * @return array
     */
    private static function convertNamesToOperations($names)
    {
    }
    /**
     * Get all statuses for current class type.
     *
     * @return mixed
     * @throws Main\NotImplementedException
     */
    public static function getAllStatuses()
    {
    }
    /**
     * Get all statuses names for current class type.
     *
     * @param null $lang
     * @return mixed
     * @throws Main\NotImplementedException
     */
    public static function getAllStatusesNames($lang = null)
    {
    }
    /**
     * Get statuses user can do operations within
     *
     * @param $userId
     * @param array $operations
     * @return array|mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function getStatusesUserCanDoOperations($userId, array $operations)
    {
    }
    /**
     * @param $groupId
     * @param array $operations
     * @return array|mixed
     * @throws Main\NotImplementedException
     */
    public static function getStatusesGroupCanDoOperations($groupId, array $operations)
    {
    }
    /**
     * @param $groupId
     * @param array $operations
     * @return array
     * @throws Main\NotImplementedException
     */
    private static function getStatusesByGroupId(array $groupId, array $operations = array())
    {
    }
    /**
     * @throws Main\NotImplementedException
     */
    public static function getInitialStatus()
    {
    }
    /**
     * @throws Main\NotImplementedException
     */
    public static function getFinalStatus()
    {
    }
    /**
     * @param array $data
     * @throws Main\ArgumentException
     * @throws SystemException
     * @throws \Exception
     */
    public static function install(array $data)
    {
    }
}