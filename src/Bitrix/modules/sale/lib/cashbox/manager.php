<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class Manager
 * @package Bitrix\Sale\Cashbox
 */
final class Manager
{
    /* ignored all errors, warnings */
    const LEVEL_TRACE_E_IGNORED = 0;
    /* trace only errors */
    const LEVEL_TRACE_E_ERROR = \Bitrix\Sale\Cashbox\Errors\Error::LEVEL_TRACE;
    /* trace only errors, warnings */
    const LEVEL_TRACE_E_WARNING = \Bitrix\Sale\Cashbox\Errors\Warning::LEVEL_TRACE;
    const DEBUG_MODE = false;
    const CACHE_ID = 'BITRIX_CASHBOX_LIST';
    const TTL = 31536000;
    const CHECK_STATUS_AGENT = '\\Bitrix\\Sale\\Cashbox\\Manager::updateChecksStatus();';
    /**
     * @param CollectableEntity $entity
     * @return array
     */
    public static function getListWithRestrictions(\Bitrix\Sale\Internals\CollectableEntity $entity)
    {
    }
    /**
     * @param array $parameters
     * @return Main\ORM\Query\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters = [])
    {
    }
    /**
     * @param $id
     * @return Cashbox|ICheckable|null
     */
    public static function getObjectById($id)
    {
    }
    /**
     * @param $cashboxList
     * @return mixed
     */
    public static function chooseCashbox($cashboxList)
    {
    }
    /**
     * @return string
     */
    public static function getConnectionLink()
    {
    }
    /**
     * @return string
     */
    private static function generateHash()
    {
    }
    /**
     * @return mixed
     */
    public static function getListFromCache()
    {
    }
    /**
     * @param $cashboxId
     * @return array
     */
    public static function getCashboxFromCache($cashboxId)
    {
    }
    /**
     * @param $cashboxId
     * @param $id
     * @return array
     */
    public static function buildZReportQuery($cashboxId, $id)
    {
    }
    /**
     * @param $cashboxIds
     * @return array
     */
    public static function buildChecksQuery($cashboxIds)
    {
    }
    /**
     * @param $cashboxId
     * @param Check $check
     * @return array
     */
    public static function buildConcreteCheckQuery($cashboxId, \Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @param array $data
     * @return \Bitrix\Main\Entity\AddResult
     */
    public static function add(array $data)
    {
    }
    /**
     * @return void
     */
    private static function addCheckStatusAgent()
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return \Bitrix\Main\Entity\UpdateResult
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * @param $primary
     * @return \Bitrix\Main\Entity\DeleteResult
     */
    public static function delete($primary)
    {
    }
    /**
     * @return bool
     */
    public static function isSupportedFFD105()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     */
    public static function updateChecksStatus()
    {
    }
    /**
     * @param $cashboxId
     * @param Main\Error $error
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     *
     * @deprecated Use \Bitrix\Sale\Cashbox\Logger instead
     */
    public static function writeToLog($cashboxId, \Bitrix\Main\Error $error)
    {
    }
}