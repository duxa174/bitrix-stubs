<?php

namespace Bitrix\Sale\Delivery;

/**
 * Class Helper
 * @package Bitrix\Sale\Delivery
 */
class Helper
{
    /**
     * Return currencies list.
     *
     * @return array Currencies list.
     * @throws SystemException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getCurrenciesList()
    {
    }
    /**
     * Return tree groups.
     *
     * @param array $flatGroups				Group list.
     * @return array
     */
    protected static function createTreeFromGroups($flatGroups)
    {
    }
    /**
     * Return html for choose group control.
     *
     * @param int|string $selectedGroupId			Selected group.
     * @param string $name							Group name.
     * @param string $addParams						Additional params for select tag.
     * @param bool $anyGroup						Allowed select any group.
     * @return string
     */
    public static function getGroupChooseControl($selectedGroupId, $name, $addParams = "", $anyGroup = false)
    {
    }
    /**
     * @return string Default site id.
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function getDefaultSiteId()
    {
    }
    /**
     * Clean additional delivery cache
     */
    public static function additionalHandlerCacheClean()
    {
    }
}