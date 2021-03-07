<?php

namespace Bitrix\Sender\Integration\Seo\Ads;

/**
 * Class MessageLookalike
 * @package Bitrix\Sender\Integration\Seo\Ads
 */
abstract class MessageLookalike extends \Bitrix\Sender\Integration\Seo\Ads\MessageBase implements \Bitrix\Sender\Message\iLookalikeAds, \Bitrix\Sender\Message\iBeforeAfter
{
    public function onBeforeStart() : \Bitrix\Main\Result
    {
    }
    public function onAfterEnd() : \Bitrix\Main\Result
    {
    }
    public abstract function getLookalikeOptions();
}