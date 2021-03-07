<?php

namespace Bitrix\Socialservices\Integration\Zoom;

class DownloadAgent
{
    protected const MAX_ATTEMPTS = 3;
    public static function scheduleDownload(int $activityId, int $recordingId, $siteId = SITE_ID)
    {
    }
    public static function run($activityId, $recordingId, $siteId = SITE_ID, $attempt = 0)
    {
    }
    public static function attach($activityId, array $recordingFields, $siteId = SITE_ID)
    {
    }
    public static function download(string $recordingUrl, string $downloadToken, string $fileName) : \Bitrix\Main\Result
    {
    }
}