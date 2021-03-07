<?php

namespace Bitrix\Socialservices\Controller;

class AuthFlow extends \Bitrix\Main\Engine\Controller
{
    private const APPLE_OAUTH_URL = 'https://appleid.apple.com/auth/authorize';
    public function configureActions() : array
    {
    }
    public function signInAppleAction() : void
    {
    }
}