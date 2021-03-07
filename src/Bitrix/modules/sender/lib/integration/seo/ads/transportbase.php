<?php

namespace Bitrix\Sender\Integration\Seo\Ads;

/**
 * Class TransportBase
 * @package Bitrix\Sender\Integration\Seo\Ads;
 */
class TransportBase implements \Bitrix\Sender\Transport\iBase
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
    /** @var Retargeting\AdsAudienceConfig $adsConfig Ads config. */
    protected $adsConfig;
    /**
     * Transport constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    protected function getAdsType()
    {
    }
    /**
     * Get supported recipient types.
     *
     * @return integer[]
     */
    public function getSupportedRecipientTypes()
    {
    }
    /**
     * Get configuration.
     *
     * @return string
     */
    public function loadConfiguration()
    {
    }
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    public function start()
    {
    }
    public function send(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    public function end()
    {
    }
}