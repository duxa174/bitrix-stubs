<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class Bitrix24NewUser extends \Bitrix\Socialnetwork\Livefeed\IntranetNewUser
{
    const PROVIDER_ID = 'BITRIX24_NEW_USER';
    const CONTENT_TYPE_ID = 'BITRIX24_NEW_USER';
    public function getEventId()
    {
    }
    public function initSourceFields()
    {
    }
}