<?php

namespace Bitrix\Rest\APAuth;

/**
 * Class PermissionTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PASSWORD_ID int mandatory
 * <li> PERM string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class PermissionTable extends \Bitrix\Main\Entity\DataManager
{
    protected static $deniedPermission = array('rating', 'entity', 'placement', 'landing_cloud', \CRestUtil::GLOBAL_SCOPE);
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    public static function onPasswordDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function deleteByPasswordId($passwordId)
    {
    }
    public static function cleanPermissionList(array $permissionList)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}