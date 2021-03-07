<?php

namespace Bitrix\Sale\Location;

class DefaultSiteTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    /**
     * $locationCodeList format: array(array('LOCATION_CODE' => int, 'SORT' => int))
     */
    public static function addMultipleForOwner($siteId, $locationCodeList = array())
    {
    }
    /**
     * $locationCodeList format
     */
    public static function updateMultipleForOwner($siteId, $locationCodeList = array(), $behaviour = array('REMOVE_ABSENT' => true))
    {
    }
    private static function checkSiteId($siteId)
    {
    }
    public static function getMap()
    {
    }
}