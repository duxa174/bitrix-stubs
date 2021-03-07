<?php

namespace Bitrix\Socialnetwork\Livefeed;

final class CalendarEvent extends \Bitrix\Socialnetwork\Livefeed\Provider
{
    public const PROVIDER_ID = 'CALENDAR';
    public const CONTENT_TYPE_ID = 'CALENDAR_EVENT';
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
    public function getLiveFeedUrl() : string
    {
    }
}