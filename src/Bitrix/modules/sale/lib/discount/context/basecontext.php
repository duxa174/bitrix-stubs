<?php

namespace Bitrix\Sale\Discount\Context;

abstract class BaseContext
{
    const GUEST_USER_ID = 0;
    /** @var int */
    protected $userId;
    /** @var array */
    protected $userGroups = array();
    protected $userGroupsHash = '';
    /**
     * @return int
     */
    public function getUserId()
    {
    }
    /**
     * @return array
     */
    public function getUserGroups()
    {
    }
    public function getUserGroupsHash()
    {
    }
    protected function setUserGroups(array $userGroups)
    {
    }
}