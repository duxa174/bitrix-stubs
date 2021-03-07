<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Feed;

/**
 * Class ResultsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> FILENAME string(255) mandatory
 * <li> FEED_TYPE string(255) mandatory
 * <li> UPLOAD_TIME datetime mandatory
 * <li> PROCESSING_REQUEST_ID string(50) optional
 * <li> PROCESSING_RESULT string(100) optional
 * <li> RESULTS string optional
 * </ul>
 *
 * @package Bitrix\Sale\TradingPlatform\Ebay\Feed
 **/
class ResultsTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function validateProcessingIsSuccess()
    {
    }
    public static function validateFilename()
    {
    }
    public static function validateFeedType()
    {
    }
    public static function validateProcessingRequestId()
    {
    }
    public static function validateProcessingResult()
    {
    }
}