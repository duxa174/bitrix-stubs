<?php

namespace Bitrix\Mail\Helper\OAuth;

class LiveId extends \Bitrix\Mail\Helper\OAuth
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
class LiveIdInterface extends \CLiveIdOAuthInterface
{
    public function setCode($code)
    {
    }
    public function setToken($access_token)
    {
    }
    public function getStorageTokens()
    {
    }
    public function getTokenData()
    {
    }
    public function getCurrentUser()
    {
    }
}