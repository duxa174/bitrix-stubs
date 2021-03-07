<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class ForumPost extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    const PROVIDER_ID = 'FORUM_POST';
    const CONTENT_TYPE_ID = 'FORUM_POST';
    public static function getId()
    {
    }
    public function getEventId()
    {
    }
    public function getType()
    {
    }
    public function initSourceFields()
    {
    }
    protected function getAttachedDiskObjects($clone = false)
    {
    }
    public static function canRead($params)
    {
    }
    protected function getPermissions(array $post)
    {
    }
    public function getLiveFeedUrl()
    {
    }
    public function getSuffix()
    {
    }
    public function add($params = array())
    {
    }
    private static function getForumId($params = array())
    {
    }
    private function getCommentEventId()
    {
    }
    private function getModuleId()
    {
    }
    private function getFeedParams()
    {
    }
    public function getAdditionalData($params = array())
    {
    }
}