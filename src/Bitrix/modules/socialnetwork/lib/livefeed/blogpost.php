<?php

namespace Bitrix\Socialnetwork\Livefeed;

class BlogPost extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    public const PROVIDER_ID = 'BLOG_POST';
    public const CONTENT_TYPE_ID = 'BLOG_POST';
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
    protected function getAttachedDiskObjects($clone = false)
    {
    }
    public static function canRead($params) : bool
    {
    }
    protected function getPermissions(array $post) : string
    {
    }
    public function getLiveFeedUrl(\Bitrix\Socialnetwork\Livefeed\BlogPostService $service = null) : string
    {
    }
    public function getSuffix()
    {
    }
}
class BlogPostService
{
    public function getPathToPost()
    {
    }
}