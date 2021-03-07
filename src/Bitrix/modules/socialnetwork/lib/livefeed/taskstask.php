<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class TasksTask extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    const PROVIDER_ID = 'TASK';
    const CONTENT_TYPE_ID = 'TASK';
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
    public function getLiveFeedUrl() : string
    {
    }
}