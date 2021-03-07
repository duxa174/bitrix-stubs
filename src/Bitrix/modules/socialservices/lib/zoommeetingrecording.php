<?php

namespace Bitrix\Socialservices;

/**
 * Class ZoomMeetingRecordingsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> MEETING_ID int mandatory
 * <li> AUDIO string(500) optional
 * <li> VIDEO string(500) optional
 * <li> CHAT string(500) optional
 * <li> DOWNLOAD_TOKEN string optional
 * <li> RECORDINGS_PASSWORD string(32) optional
 * </ul>
 *
 * @package Bitrix\Socialservices
 **/
class ZoomMeetingRecordingTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName() : string
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     * @throws Main\SystemException
     */
    public static function getMap() : array
    {
    }
}