<?php

namespace Bitrix\Main;

class UserAuthActionTable extends \Bitrix\Main\Entity\DataManager
{
    const PRIORITY_HIGH = 100;
    const PRIORITY_LOW = 200;
    const ACTION_LOGOUT = 'logout';
    const ACTION_UPDATE = 'update';
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @param array $filter
     */
    public static function deleteByFilter(array $filter)
    {
    }
    /**
     * @param int $userId
     * @param string|null $applicationId AppPassword application id
     * @return ORM\Data\AddResult
     * @throws ObjectException
     */
    public static function addLogoutAction($userId, $applicationId = null)
    {
    }
    /**
     * @param int $userId
     * @param Type\DateTime|null $date
     * @return ORM\Data\AddResult
     */
    public static function addUpdateAction($userId, \Bitrix\Main\Type\DateTime $date = null)
    {
    }
}