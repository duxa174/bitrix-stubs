<?php

namespace Bitrix\Sale\Delivery\Pecom;

/**
 * Class Adapter
 * @package Bitrix\Sale\Delivery\Pecom
 */
class Adapter
{
    public static function preparePreregistrationReqData($arOrder, $profileId, $arConfig)
    {
    }
    protected static function getUpperCityId($locationId)
    {
    }
    protected static function mapLocation2($internalLocationId)
    {
    }
    /**
     * Returns Pecom .location id
     * @param $locationId - Bitrix location id
     * @param bool $cleanCache
     * @return array - Pecom location(s) id
     */
    public static function mapLocation($locationId, $cleanCache = false)
    {
    }
    public static function getAllPecomCities($cleanCache = false)
    {
    }
    public static function getCityNameFromLocationId($locationId)
    {
    }
    public static function getFilialAndCity($cityId)
    {
    }
    public static function prepareSubscribeReqData($arCargoCodes, $email = "", $phone = "")
    {
    }
}