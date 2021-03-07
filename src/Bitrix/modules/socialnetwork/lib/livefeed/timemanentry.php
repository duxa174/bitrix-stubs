<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class TimemanEntry extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    const PROVIDER_ID = 'TIMEMAN_ENTRY';
    const CONTENT_TYPE_ID = 'TIMEMAN_ENTRY';
    public static function getId() : string
    {
    }
    public function getEventId()
    {
    }
    public function getType()
    {
    }
    public function getCommentProvider()
    {
    }
    public function initSourceFields()
    {
    }
    public function getPinnedDescription()
    {
    }
    public static function canRead($params) : bool
    {
    }
    protected function getPermissions(array $post) : string
    {
    }
    public function getLiveFeedUrl() : string
    {
    }
}