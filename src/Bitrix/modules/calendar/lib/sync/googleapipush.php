<?php

namespace Bitrix\Calendar\Sync;

final class GoogleApiPush
{
    const RENEW_LIMIT = 3;
    const CREATE_LIMIT = 2;
    const PROCESS_LIMIT = 4;
    const CLEAR_LIMIT = 6;
    const CHECK_LIMIT = 10;
    const CHECK_INTERVAL_CHANNEL = 14400;
    //60*60*4
    const RENEW_INTERVAL_CHANNEL = 14400;
    //60*60*4
    /**
     * Checks connection and ability to create push channel
     * Recommended agent interval = 4h
     */
    public static function renewWatchChannels()
    {
    }
    public static function checkSectionsPush($localSections, $userId, $connectionId)
    {
    }
    /**
     * Creates and renew watch channels for connections
     * Recommended interval = 1 hour, for push enable - recommended interval 3 minutes
     *
     * @param int $start
     * @return string
     */
    public static function createWatchChannels($start = 0)
    {
    }
    public static function stopChannel($row = array(), $ownerId = 0)
    {
    }
    /**
     * @param string $lastResult
     * @return bool
     */
    public static function isConnectionError(string $lastResult = null) : bool
    {
    }
    /**
     * @param string $error
     * @return bool
     */
    public static function isWrongChannel(string $error = null) : bool
    {
    }
    /**
     * Stop all push channels agent
     * Recommended interval - 60 sec. Response from google not required
     *
     * @return null|string
     */
    public static function clearPushChannels()
    {
    }
    /**
     * @param $channelId
     * @param $resourceId
     * @return bool
     */
    public static function receivePushSignal($channelId, $resourceId)
    {
    }
    /**
     * Synchronize sections and connections on push signal receive
     * Recommended agent interval = 3 minutes
     *
     * @return string
     */
    public static function processPush()
    {
    }
    public static function checkPushChannel(int $lastIdConnection = 0)
    {
    }
    /**
     * @param array $connectionIds
     * @param array $connections
     */
    private static function checkPushConnectionChannel(array $connectionIds, array $connections) : void
    {
    }
    /**
     * @param array $connectionIds
     * @param array $connections
     */
    private static function checkPushSectionChannel(array $connectionIds, array $connections) : void
    {
    }
    private static function deletePushChannel(array $row)
    {
    }
    /**
     * @param $gApiCalendarId
     * @return bool
     */
    private static function isVirtualCalendar(string $gApiCalendarId = null) : bool
    {
    }
}