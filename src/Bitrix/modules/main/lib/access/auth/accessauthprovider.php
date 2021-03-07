<?php

namespace Bitrix\Main\Access\Auth;

class AccessAuthProvider extends \CAuthProvider
{
    protected const PROVIDER_ID = 'access';
    public static function GetProviders()
    {
    }
    public function __construct()
    {
    }
    public function UpdateCodes($userId)
    {
    }
}