<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class LogEvent extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    public const PROVIDER_ID = 'SONET_LOG';
    public const CONTENT_TYPE_ID = 'LOG_ENTRY';
    public static function getId() : string
    {
    }
    public function getEventId()
    {
    }
    public function getType()
    {
    }
    public static function canRead($params) : bool
    {
    }
    protected function getPermissions(array $post) : string
    {
    }
    public function getCommentProvider()
    {
    }
    public function initSourceFields()
    {
    }
    public function getPinnedTitle() : string
    {
    }
    public function getPinnedDescription()
    {
    }
    public function getLiveFeedUrl() : string
    {
    }
    public function getSuffix()
    {
    }
}