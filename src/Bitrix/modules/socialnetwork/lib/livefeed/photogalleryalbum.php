<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class PhotogalleryAlbum extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    public const PROVIDER_ID = 'PHOTO_ALBUM';
    public const CONTENT_TYPE_ID = 'PHOTO_ALBUM';
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
    public function getPinnedTitle()
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
    public function getLiveFeedUrl()
    {
    }
}