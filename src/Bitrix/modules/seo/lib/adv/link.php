<?php

namespace Bitrix\Seo\Adv;

/**
 * Class LinkTable
 *
 * Fields:
 * <ul>
 * <li> LINK_TYPE string(1) mandatory
 * <li> LINK_ID int mandatory
 * <li> BANNER_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class LinkTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_IBLOCK_ELEMENT = 'I';
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