<?php

namespace Bitrix\Seo\Adv;

/**
 * Class AutologTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENGINE_ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> CAMPAIGN_ID int mandatory
 * <li> CAMPAIGN_XML_ID string(255) mandatory
 * <li> BANNER_ID int mandatory
 * <li> BANNER_XML_ID string(255) mandatory
 * <li> CAUSE_CODE int optional
 * <li> SUCCESS bool optional
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class AutologTable extends \Bitrix\Main\Entity\DataManager
{
    const CODE_QUANTITY_ON = 1;
    const CODE_QUANTITY_OFF = 2;
    const SUCCESS = 'Y';
    const FAILURE = 'N';
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