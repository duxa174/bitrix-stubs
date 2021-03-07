<?php

namespace Bitrix\Seo\Analytics;

class Service implements \Bitrix\Seo\Retargeting\IService, \Bitrix\Seo\Retargeting\IMultiClientService
{
    const GROUP = 'analytics';
    const TYPE_FACEBOOK = 'facebook';
    const TYPE_INSTAGRAM = 'instagram';
    const TYPE_VKONTAKTE = 'vkontakte';
    const TYPE_GOOGLE = 'google';
    const TYPE_YANDEX = 'yandex';
    /** @var array $errors Errors. */
    protected static $errors = [];
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
     * Return true if it can use.
     *
     * @return bool
     */
    public static function canUse()
    {
    }
    /**
     * Can use multiple clients.
     *
     * @return bool
     */
    public static function canUseMultipleClients()
    {
    }
    /**
     * @param string $type
     * @return string
     */
    public static function getEngineCode($type)
    {
    }
    /**
     * Get account.
     *
     * @param string $type Type.
     * @return Account
     */
    public static function getAccount($type)
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
     * @return Retargeting\AuthAdapter
     */
    public static function getAuthAdapter($type)
    {
    }
    /**
     * Get providers.
     *
     * @param array|null $types Types.
     * @return array
     */
    public static function getProviders(array $types = null)
    {
    }
    protected static function getServiceProviders(array $types = null)
    {
    }
    /**
     * Get accounts.
     *
     * @param string $type Type.
     * @return array
     */
    public static function getAccounts($type)
    {
    }
    /**
     * Remove auth.
     *
     * @param string $type Type.
     * @return void
     */
    public static function removeAuth($type)
    {
    }
    /**
     * Get errors.
     *
     * @return array
     */
    public static function getErrors()
    {
    }
    /**
     * Reset errors.
     *
     * @return void
     */
    public static function resetErrors()
    {
    }
    /**
     * Return true if it has errors.
     *
     * @return bool
     */
    public static function hasErrors()
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
     * @return $this
     */
    public function setClientId($clientId)
    {
    }
    /**
     * Get client profiles.
     * @param Retargeting\AuthAdapter $authAdapter Auth adapter.
     * @return array
     */
    public static function getClientsProfiles(\Bitrix\Seo\Retargeting\AuthAdapter $authAdapter)
    {
    }
}