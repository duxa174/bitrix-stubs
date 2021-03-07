<?php

namespace Bitrix\Mail\Helper\OAuth;

class Yandex extends \Bitrix\Mail\Helper\OAuth
{
    protected function __construct()
    {
    }
    protected function check()
    {
    }
    protected function mapUserData(array $userData)
    {
    }
    public static function getServiceName()
    {
    }
    public function getControllerUrl()
    {
    }
}
class YandexInterface extends \CYandexOAuthInterface
{
    public function getStorageTokens()
    {
    }
    public function getTokenData()
    {
    }
    public function getNewAccessToken($refreshToken = false, $userId = 0, $save = false)
    {
    }
}