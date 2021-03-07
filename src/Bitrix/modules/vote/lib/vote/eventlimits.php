<?php

namespace Bitrix\Vote\Vote;

class EventLimits
{
    const BY_SESSION = 1;
    const BY_COOKIE = 2;
    const BY_IP = 4;
    const BY_USER_AUTH = 8;
    const BY_USER_DATE_REGISTER = 16;
    const BY_USER_ID = 32;
    /**
     * Gets types list
     * @return array
     */
    public static function getList()
    {
    }
}