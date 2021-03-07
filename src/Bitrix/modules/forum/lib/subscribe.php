<?php

namespace Bitrix\Forum;

/**
 * Class SubscribeTable
 *
 * Fields:
 * <ul>
 * <li> ID int not null auto_increment,
 * <li> USER_ID int(10) not null,
 * <li> FORUM_ID int(10) not null,
 * <li> TOPIC_ID int(10) null,
 * <li> START_DATE datetime not null,
 * <li> LAST_SEND int(10) null,
 * <li> NEW_TOPIC_ONLY char(50) not null default 'N',
 * <li> SITE_ID char(2) not null default 'ru',
 * <li> SOCNET_GROUP_ID int NULL,
 * <li> primary key (ID),
 * <li> unique UX_FORUM_SUBSCRIBE_USER(USER_ID, FORUM_ID, TOPIC_ID, SOCNET_GROUP_ID)
 * </ul>
 *
 * @package Bitrix\Forum
 */
class SubscribeTable extends \Bitrix\Main\Entity\DataManager
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