<?php

namespace Bitrix\Forum;

/**
 * Class MessageTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> FORUM_ID int
 * <li> TOPIC_ID int
 * <li> MESSAGE_ID int
 * <li> FILE_ID int mandatory
 * <li> USER_ID int
 * <li> TIMESTAMP_X datetime mandatory
 * <li> HITS int
 * </ul>
 *
 * @package Bitrix\Forum
 **/
class FileTable extends \Bitrix\Main\Entity\DataManager
{
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
}
class File
{
    public static function checkFiles(\Bitrix\Forum\Forum $forum, &$files, $params = ["TOPIC_ID" => 0, "MESSAGE_ID" => 0, "USER_ID" => 0])
    {
    }
    public static function saveFiles(&$files, $params, $uploadDir = "forum/upload")
    {
    }
}