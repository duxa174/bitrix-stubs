<?php

namespace Bitrix\Sender\Integration\Seo\Ads;

/**
 * Class MessageBase
 * @package Bitrix\Sender\Integration\Seo\Ads
 */
abstract class MessageBase implements \Bitrix\Sender\Message\iBase, \Bitrix\Sender\Message\iAds
{
    const CODE = self::CODE_UNDEFINED;
    const CODE_ADS_VK = 'ads_vk';
    const CODE_ADS_FB = 'ads_fb';
    const CODE_ADS_YA = 'ads_ya';
    const CODE_ADS_GA = 'ads_ga';
    const CODE_ADS_LOOKALIKE_FB = 'ads_lookalike_fb';
    const CODE_ADS_LOOKALIKE_VK = 'ads_lookalike_vk';
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /**
     * MessageBase constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get name.
     * @return string
     */
    public function getName()
    {
    }
    public function getCode()
    {
    }
    public function getSupportedTransports()
    {
    }
    protected function getAdsType()
    {
    }
    protected function setConfigurationOptions()
    {
    }
    /**
     * Load configuration.
     *
     * @param integer|null $id ID.
     *
     * @return Message\Configuration
     */
    public function loadConfiguration($id = null)
    {
    }
    /**
     * Save configuration.
     *
     * @param Message\Configuration $configuration Configuration.
     * @return Result
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * Remove configuration.
     *
     * @param integer $id ID.
     * @return bool
     */
    public function removeConfiguration($id)
    {
    }
    /**
     * Copy configuration.
     *
     * @param integer|string|null $id ID.
     * @return Result|null
     */
    public function copyConfiguration($id)
    {
    }
}