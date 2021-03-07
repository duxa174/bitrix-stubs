<?php

namespace Bitrix\SocialServices\Integration\Zoom;

class Recording
{
    public const RECORDING_KIND_VIDEO = 'VIDEO';
    public const RECORDING_KIND_AUDIO = 'AUDIO';
    public const LENGTH_FORMAT_SHORT = 'short';
    public const LENGTH_FORMAT_FULL = 'full';
    public static function getRecordings($conferenceId) : \Bitrix\Main\Result
    {
    }
    public static function getRecordingKind($fileType) : ?string
    {
    }
    /**
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @return int
     */
    public static function getRecordingLength(\Bitrix\Main\Type\DateTime $startDate, \Bitrix\Main\Type\DateTime $endDate) : int
    {
    }
    public static function formatLength(int $lengthSeconds, $format = self::LENGTH_FORMAT_SHORT) : string
    {
    }
    protected static function getNumericSuffix($number) : int
    {
    }
    public static function onRecordingStopped(int $conferenceId, array $recordingsData) : \Bitrix\Main\Result
    {
    }
    public static function delete(int $conferenceId) : \Bitrix\Main\Result
    {
    }
}