<?php

namespace Bitrix\Highloadblock;

class HighloadBlockRightsTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for ACCESS_CODE field.
     *
     * @return array
     */
    public static function validateAccessCode()
    {
    }
    /**
     * Get all available operations for hl block (for current user).
     * @param int|array $hlId Hl block (id or array of id).
     * @return array
     */
    public static function getOperationsName($hlId)
    {
    }
}