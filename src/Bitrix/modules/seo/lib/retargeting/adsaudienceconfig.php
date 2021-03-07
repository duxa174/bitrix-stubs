<?php

namespace Bitrix\Seo\Retargeting;

/**
 * Class AdsAudienceConfig.
 * @package Bitrix\Seo\Retargeting
 */
class AdsAudienceConfig
{
    /** @var  string $clientId Client ID. */
    public $clientId;
    /** @var  string $accountId Account ID. */
    public $accountId;
    /** @var  string $audienceId Audience ID. */
    public $audienceId;
    /** @var string|null $contactType Contact type.  */
    public $contactType = null;
    public $type = null;
    public $autoRemoveDayNumber = null;
    public $parentId = null;
    /**
     * AdsAudienceConfig constructor.
     *
     * @param \stdClass|null $config Config.
     */
    public function __construct(\stdClass $config = null)
    {
    }
}