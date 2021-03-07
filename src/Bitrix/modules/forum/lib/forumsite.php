<?php

namespace Bitrix\Forum;

/**
 * Class ForumSiteTable
 *
 * Fields:
 * <ul>
 * <li> FORUM_ID int mandatory
 * <li> SITE_ID char(2) mandatory
 * <li> PATH2FORUM_MESSAGE string(250)
 * <li> FORUM reference to {@link \Bitrix\Forum\ForumTable}
 * <li> SITE reference to {@link \Bitrix\Main\SiteTable}
 * </ul>
 *
 * @package Bitrix\Forum
 */
class ForumSiteTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
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
}