<?php

namespace Bitrix\Socialnetwork;

class UserToGroupTable extends \Bitrix\Main\Entity\DataManager
{
    const ROLE_OWNER = SONET_ROLES_OWNER;
    const ROLE_MODERATOR = SONET_ROLES_MODERATOR;
    const ROLE_USER = SONET_ROLES_USER;
    const ROLE_BAN = SONET_ROLES_BAN;
    const ROLE_REQUEST = SONET_ROLES_REQUEST;
    const INITIATED_BY_USER = SONET_INITIATED_BY_USER;
    const INITIATED_BY_GROUP = SONET_INITIATED_BY_GROUP;
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns set of all possible roles of a user in a workgroup
     *
     * @return array
     */
    public static function getRolesAll()
    {
    }
    /**
     * Returns set of membership roles of a user in a workgroup
     *
     * @return array
     */
    public static function getRolesMember()
    {
    }
    /**
     * Returns set of all INITIATED_BY values
     *
     * @return array
     */
    public static function getInitiatedByAll()
    {
    }
    /**
     * Returns entity map definition
     */
    public static function getMap()
    {
    }
    /**
     * Adds row to entity table
     *
     * @param array $data
     *
     * @return Entity\AddResult Contains ID of inserted row
     *
     * @throws \Exception
     */
    public static function add(array $data)
    {
    }
    /**
     * Updates row in entity table by primary key
     *
     * @param mixed $primary
     * @param array $data
     *
     * @return Entity\UpdateResult
     *
     * @throws \Exception
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * Deletes row in entity table by primary key
     *
     * @param mixed $primary
     *
     * @return Entity\DeleteResult
     *
     * @throws \Exception
     */
    public static function delete($primary)
    {
    }
}