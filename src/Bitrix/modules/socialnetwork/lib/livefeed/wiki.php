<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class Wiki extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    public const PROVIDER_ID = 'WIKI';
    public const CONTENT_TYPE_ID = 'WIKI';
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
    public function getPinnedTitle() : string
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