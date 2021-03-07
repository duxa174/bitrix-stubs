<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Class Journal
 * Work with statistic of exports: time of start end finish of export, count of processed items
 *
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class Journal
{
    private $exportId;
    private $type;
    /**
     * Journal constructor.
     * @param $exportId - int, ID of export profile
     * @param $type - string, type of current journal. May be ALBUMS or PRODUCTS.
     */
    public function __construct($exportId, $type)
    {
    }
    public static function getCurrentProcess($exportId)
    {
    }
    public static function getProgressMessage($exportId, $type)
    {
    }
    public static function getProgressFinishMessage($ok = true)
    {
    }
    public static function getTooMuchTimeExportMessage()
    {
    }
    public static function getCriticalErrorsMessage($exportId, $txt)
    {
    }
    public static function saveProcessParams($exportId, $type = false, $position = false, $execCount = false)
    {
    }
    /**
     * Remove process STOP flag
     * @param $exportId
     * @return bool
     */
    public static function clearStopProcessParams($exportId)
    {
    }
    /**
     * set flag STOP in params - preserve repeated process run
     * @param $exportId
     * @return bool
     */
    public static function stopProcessParams($exportId)
    {
    }
    public static function checkStopProcessFlag($exportId)
    {
    }
    /**
     * Return journal for current export ID
     *
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     */
    private function getJournal()
    {
    }
    /**
     * Increase number of processed items for current type of export.
     *
     * @param $count
     * @return bool
     * @throws \Exception
     */
    public function addItemsCount($count)
    {
    }
    /**
     * Init log for current export type and set starting time.
     *
     * @return bool
     * @throws \Exception
     */
    public function start()
    {
    }
    /**
     * Close log for current type by set finish time
     *
     * @return bool
     * @throws \Exception
     */
    public function end()
    {
    }
    private static function getStatistic($type, $exportId)
    {
    }
    /**
     * Get formatted string of statistic to selected type and export ID
     *
     * @param $type
     * @param $exportId
     * @return bool|string
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getStatisticText($type, $exportId)
    {
    }
    /**
     * Check if export was aborted by user or if journal still not start process
     * Return journal with modify values
     *
     * @param $type
     * @param $exportId
     * @param $journal
     * @return mixed
     * @throws \Exception
     */
    private static function getCheckedEndingJournal($type, $exportId, $journal)
    {
    }
}