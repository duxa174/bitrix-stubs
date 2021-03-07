<?php

namespace Bitrix\Main\Numerator\Model;

/**
 * Class NumeratorSequenceTable
 * @package Bitrix\Main\Numerator\Model
 */
class NumeratorSequenceTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\SystemException
     */
    public static function getMap()
    {
    }
    /**
     * @param $numeratorId
     * @param $numberHash
     * @param $fields
     * @param null $whereNextNumber
     * @return bool|int
     * @throws SqlQueryException
     */
    public static function updateSettings($numeratorId, $numberHash, $fields, $whereNextNumber = null)
    {
    }
    /**
     * @param $id
     * @return \Bitrix\Main\Entity\DeleteResult
     * @throws \Exception
     */
    public static function deleteByNumeratorId($id)
    {
    }
    /**
     * @param $numeratorId
     * @param $numberHash
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getSettings($numeratorId, $numberHash)
    {
    }
    /**
     * @param $numeratorId
     * @param $numberHash
     * @param $defaultNumber
     * @param $lastInvocationTime
     * @return array
     * @throws SqlQueryException
     */
    public static function setSettings($numeratorId, $numberHash, $defaultNumber, $lastInvocationTime)
    {
    }
}