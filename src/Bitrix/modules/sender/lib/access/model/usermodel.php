<?php

namespace Bitrix\Sender\Access\Model;

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage sender
 * @copyright 2001-2021 Bitrix
 */
class UserModel extends \Bitrix\Main\Access\User\UserModel
{
    private $permissions;
    /**
     * get user roles in system
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getRoles() : array
    {
    }
    /**
     * return permission if exists
     *
     * @param string $permissionId string identification
     *
     * @return int|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getPermission(string $permissionId) : ?int
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getPermissions() : array
    {
    }
}