<?php

namespace Bitrix\Seo\Retargeting;

class Service implements \Bitrix\Seo\Retargeting\IService, \Bitrix\Seo\Retargeting\IMultiClientService
{
    const GROUP = 'retargeting';
    const TYPE_FACEBOOK = 'facebook';
    const TYPE_VKONTAKTE = 'vkontakte';
    const TYPE_MYCOM = 'mycom';
    const TYPE_YANDEX = 'yandex';
    const TYPE_GOOGLE = 'google';
    protected $clientId;
    /**
     * Get instance.
     *
     * @return static
     */
    public static function getInstance()
    {
    }
    /**
     * @param string $type Engine type.
     * @return string
     */
    public static function getEngineCode($type)
    {
    }
    /**
     * @param string $type Engine type.
     * @return Audience
     */
    public static function getAudience($type)
    {
    }
    /**
     * @param string $type Engine type.
     * @return Account
     */
    public static function getAccount($type)
    {
    }
    /**
     * Can use multiple clients
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function canUseMultipleClients()
    {
    }
    /**
     * @return array
     */
    public static function getTypes()
    {
    }
    /**
     * Get auth adapter.
     *
     * @param string $type Type.
     * @return AuthAdapter
     */
    public static function getAuthAdapter($type)
    {
    }
    /**
     * Get client id
     * @return string
     */
    public function getClientId()
    {
    }
    /**
     * Set client id.
     * @param string $clientId Client id.
     * @return void
     */
    public function setClientId($clientId)
    {
    }
}