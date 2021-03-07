<?php

namespace Bitrix\SocialServices\Integration\Zoom;

class Conference
{
    public const MEETING_SCHEDULED_TYPE = 2;
    public const ACTIVITY_ENTITY_TYPE = 'activity';
    public const ZOOM_AUDIO_ONLY = 'audio_only';
    public static function isAvailable() : bool
    {
    }
    public static function create($userId, $data) : \Bitrix\Main\Result
    {
    }
    public static function update(int $userId, array $updateParams) : \Bitrix\Main\Result
    {
    }
    public static function delete(int $conferenceId) : \Bitrix\Main\Result
    {
    }
    private static function prepareConferenceParams(array $data) : \Bitrix\Main\Result
    {
    }
    public static function getInfo($conferenceId) : \Bitrix\Main\Result
    {
    }
    public static function setJoin(int $conferenceId) : \Bitrix\Main\Result
    {
    }
    public static function setEnd(int $conferenceId) : \Bitrix\Main\Result
    {
    }
    public static function bindActivity(array $conferenceData, int $activityId) : \Bitrix\Main\Result
    {
    }
    /**
     * @param int $conferenceId
     * @param $recordingsData
     * @param $downloadToken
     * @return Result
     * @throws \Bitrix\Main\LoaderException
     */
    public static function saveRecordings(int $conferenceId, array $recordingsData, $downloadToken) : \Bitrix\Main\Result
    {
    }
}