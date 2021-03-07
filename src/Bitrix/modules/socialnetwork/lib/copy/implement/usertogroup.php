<?php

namespace Bitrix\Socialnetwork\Copy\Implement;

class UserToGroup extends \Bitrix\Main\Copy\CopyImplementer
{
    const GROUP_USER_COPY_ERROR = "GROUP_USER_COPY_ERROR";
    /**
     * @var UserGroupHelper|null
     */
    private $userGroupHelper = null;
    /**
     * Record helper object to update the list of moderators when copying.
     *
     * @param UserGroupHelper $userGroupHelper Helper object.
     */
    public function setUserGroupHelper(\Bitrix\Socialnetwork\Copy\Implement\UserGroupHelper $userGroupHelper)
    {
    }
    /**
     * Adds entity.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool Added entity id or false.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns entity fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    /**
     * Preparing data before creating a new entity.
     *
     * @param Container $container
     * @param array $fields List entity fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $entityId Entity id.
     * @param int $copiedEntityId Copied entity id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId)
    {
    }
}