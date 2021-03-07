<?php

namespace Bitrix\Im\Model;

/**
 * Class ExternalAvatarTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> LINK_MD5 string(32) mandatory
 * <li> AVATAR_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Im
 **/
class ExternalAvatarTable extends \Bitrix\Main\Entity\DataManager
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
    /**
     * Returns validators for LINK_MD5 field.
     *
     * @return array
     */
    public static function validateLinkMd5()
    {
    }
}