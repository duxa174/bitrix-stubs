<?php

namespace Bitrix\Socialnetwork\Copy\Implement;

class UserGroupHelper
{
    private $executiveUserId;
    private $moderatorsIds = [];
    public function __construct($executiveUserId, array $moderatorsIds)
    {
    }
    public function changeModerators($groupId)
    {
    }
    private function getCurrentModerators($groupId)
    {
    }
}