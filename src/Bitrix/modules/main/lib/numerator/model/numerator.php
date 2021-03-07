<?php

namespace Bitrix\Main\Numerator\Model;

/**
 * Class NumeratorTable
 * @package Bitrix\Main\Numerator\Model
 */
class NumeratorTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     * @throws SystemException
     */
    public static function getMap()
    {
    }
    /**
     * @return int|null
     */
    private static function getCurrentUserId()
    {
    }
    /**
     * @param $type
     * @param $sort
     * @return array
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function getNumeratorList($type, $sort)
    {
    }
    /**
     * @param $numeratorId
     * @param $numeratorFields
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function saveNumerator($numeratorId, $numeratorFields)
    {
    }
    /**
     * @param $numeratorId
     * @return array|false
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws SystemException
     */
    public static function loadSettings($numeratorId)
    {
    }
}