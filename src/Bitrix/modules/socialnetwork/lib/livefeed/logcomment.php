<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class LogComment extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    const PROVIDER_ID = 'SONET_COMMENT';
    const CONTENT_TYPE_ID = 'LOG_COMMENT';
    protected $logEventId = null;
    protected $logEntityType = null;
    protected $logEntityId = null;
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
    public function getLiveFeedUrl()
    {
    }
    public static function canRead($params)
    {
    }
    protected function getPermissions(array $post)
    {
    }
    public function getSuffix()
    {
    }
    public function add($params = array())
    {
    }
}