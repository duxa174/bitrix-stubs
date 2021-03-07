<?php

namespace Bitrix\Main\Rest;

class Handlers
{
    const SCOPE_USER = 'user';
    const SCOPE_USER_CONSENT = 'userconsent';
    const SCOPE_RATING = 'rating';
    const SCOPE_SMILE = 'smile';
    public static function onRestServiceBuildDescription()
    {
    }
}