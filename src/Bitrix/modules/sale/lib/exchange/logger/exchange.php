<?php

namespace Bitrix\Sale\Exchange\Logger;

class Exchange
{
    protected $providerType = null;
    /**
     * Exchange constructor.
     * @param $providerType
     * @throws ArgumentException
     */
    public function __construct($providerType)
    {
    }
    /**
     * @param array $params
     * @return \Bitrix\Main\ORM\Data\AddResult
     * @throws \Exception
     */
    public function add(array $params)
    {
    }
    /**
     * @param $params
     * @return \Bitrix\Main\ORM\Query\Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getList(array $params)
    {
    }
    /**
     * @param $timeUpdate
     * @param $entityTypeId
     * @param $direction
     * @return array
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getEffectedRows($timeUpdate, $entityTypeId, $direction)
    {
    }
    public function isEffected($list, array $logs)
    {
    }
    /**
     * Clears old logging data
     */
    public function deleteOldRecords($direction, $interval)
    {
    }
}