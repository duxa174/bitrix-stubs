<?php

namespace Bitrix\Sender\Integration\Seo\Ads;

/**
 * Class Service
 * @package Bitrix\Sender\Integration\Seo\Ads
 */
class Service
{
    /**
     * Can use.
     *
     * @return bool
     */
    public static function canUse()
    {
    }
    /**
     * Service can be used, but is not available because of plan.
     *
     * @return bool
     */
    public static function isAvailable()
    {
    }
    /**
     * Get type map.
     *
     * @return array
     */
    public static function getTypeMap()
    {
    }
    /**
     * Get ads provider.
     *
     * @param string $adsType Ads type.
     * @return array
     */
    public static function getAdsProvider($adsType, $clientId = null)
    {
    }
    /**
     * Send.
     *
     * @param \stdClass $config Config.
     * @param array $contacts.
     * @return bool
     */
    public static function send(\stdClass $config, array $contacts)
    {
    }
}