<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed;

/**
 * Class Manager
 * Create FEED object for export
 *
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed
 */
class Manager
{
    const DEFAULT_PROCESS_TYPE = 'ALL';
    const FIRST_PROCESS_TYPE = 'ALBUMS';
    const SECOND_PROCESS_TYPE = 'PRODUCTS';
    const DEFAULT_START_POSITION = '';
    const DEFAULT_EXEC_COUNT = 1;
    const MAX_EXEC_COUNT = 3;
    public static function runProcess($exportId, $processType)
    {
    }
    /**
     * Created params for feed. Return FEED object
     *
     * @param $feedType
     * @param $exportId
     * @param int $timeLimit
     * @param $startPosition - position of first element to export
     * @return Feed
     * @throws SystemException
     */
    private static function createFeed($feedType, $exportId, $timeLimit = 0, $startPosition = '')
    {
    }
    /**
     * Convert export type if type ALL (return ALBUMS type)
     * @param $type
     * @return string of type
     */
    public static function prepareType($type)
    {
    }
}