<?php

namespace Bitrix\Seo\Adv;

/**
 * Class OrderTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENGINE_ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> REQUEST_URI string(100) mandatory
 * <li> REQUEST_DATA string optional
 * <li> RESPONSE_TIME double mandatory
 * <li> RESPONSE_STATUS int optional
 * <li> RESPONSE_DATA string optional
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class OrderTable extends \Bitrix\Main\Entity\DataManager
{
    const PROCESSED = 'Y';
    const NOT_PROCESSED = 'N';
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}