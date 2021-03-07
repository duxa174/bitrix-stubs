<?php

namespace Bitrix\Seo\Retargeting;

/**
 * Class AdsAudience.
 * @package Bitrix\Seo\Retargeting
 */
class AdsAudience
{
    /** @var array $errors Errors. */
    protected static $errors = array();
    /** @var bool $isQueueUsed Is queue used. */
    protected static $isQueueUsed = false;
    /**
     * Return true if it can use.
     *
     * @return bool
     */
    public static function canUse()
    {
    }
    /**
     * Use queue.
     *
     * @return void
     */
    public static function useQueue()
    {
    }
    /**
     * Get service.
     *
     * @return Service
     */
    public static function getService()
    {
    }
    /**
     * Add audience.
     *
     * @param string $type Type.
     * @param integer|null $accountId Account ID.
     * @param string|null $name Name.
     * @return integer|null
     */
    public static function addAudience($type, $accountId = null, $name = null)
    {
    }
    public static function addLookalikeAudience($type, $accountId = null, $sourceAudienceId = null, $options = [])
    {
    }
    /**
     * Get audiences.
     *
     * @param string $type Type.
     * @param integer|null $accountId Account ID.
     * @return array
     */
    public static function getAudiences($type, $accountId = null)
    {
    }
    public static function getRegions($type)
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
    /**
     * Add to audience
     * @param AdsAudienceConfig $config Config.
     * @param array $contacts Contacts.
     * @return bool
     */
    public static function addToAudience(\Bitrix\Seo\Retargeting\AdsAudienceConfig $config, $contacts)
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
     * Remove auth.
     *
     * @param string $type Type.
     * @return void
     */
    public static function removeAuth($type)
    {
    }
    /**
     * Get service types.
     *
     * @return array
     */
    public static function getServiceTypes()
    {
    }
    /**
     * Get providers list
     * @param array|null $types Provider types.
     * @return array
     * @throws \Bitrix\Main\SystemException
     */
    protected static function getServiceProviders(array $types = null)
    {
    }
    /**
     * Get client profiles.
     * @param AuthAdapter $authAdapter Auth adapter.
     * @return array
     */
    protected static function getClientsProfiles(\Bitrix\Seo\Retargeting\AuthAdapter $authAdapter)
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
}