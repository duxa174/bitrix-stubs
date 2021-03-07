<?php

namespace Bitrix\Socialnetwork\Livefeed;

class IntranetNewUser extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    public const PROVIDER_ID = 'INTRANET_NEW_USER';
    public const CONTENT_TYPE_ID = 'INTRANET_NEW_USER';
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