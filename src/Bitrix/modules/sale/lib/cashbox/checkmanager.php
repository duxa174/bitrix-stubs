<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class CheckManager
 * @package Bitrix\Sale\Cashbox
 */
final class CheckManager
{
    const EVENT_ON_GET_CUSTOM_CHECK = 'OnGetCustomCheckList';
    const EVENT_ON_CHECK_PRINT_SEND = 'OnPrintableCheckSend';
    const EVENT_ON_BEFORE_CHECK_ADD_VERIFY = 'OnBeforeCheckAddVerify';
    const EVENT_ON_CHECK_PRINT_ERROR = 'OnCheckPrintError';
    const MIN_TIME_FOR_SWITCH_CASHBOX = 240;
    /** This is time re-sending a check print in minutes */
    const CHECK_RESENDING_TIME = 4;
    const CHECK_LIMIT_RECORDS = 5;
    /**
     * @param CollectableEntity[] $entities
     * @param $type
     * @param CollectableEntity[] $relatedEntities
     * @return Result
     */
    public static function addByType(array $entities, $type, array $relatedEntities = array())
    {
    }
    /**
     * @param $checkId
     * @param array $data
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws \Exception
     */
    public static function savePrintResult($checkId, array $data)
    {
    }
    private static function addStatisticOnSuccessCheckPrint($checkId)
    {
    }
    /**
     * @param $id
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function delete($id)
    {
    }
    /**
     * @param CollectableEntity[] $entities
     * @return Result
     */
    public static function addChecks(array $entities)
    {
    }
    /**
     * @param Sale\Internals\CollectableEntity $entity
     * @throws Main\ArgumentTypeException
     * @return Sale\Order
     */
    public static function getOrder($entity)
    {
    }
    /**
     * @return array
     */
    private static function getBuildInCheckList()
    {
    }
    /**
     * @return array
     */
    private static function getUserCheckList()
    {
    }
    /**
     * @return void
     */
    public static function init()
    {
    }
    /**
     * @return array
     */
    public static function getCheckList()
    {
    }
    /**
     * @return array
     */
    public static function getCheckTypeMap()
    {
    }
    /**
     * @param string $type
     * @return null|Check
     */
    public static function createByType($type)
    {
    }
    /**
     * @param array $entities
     * @return Entity[]
     * @throws Main\NotSupportedException
     */
    public static function collateDocuments(array $entities)
    {
    }
    /**
     * @param Sale\Order $order
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    private static function isAutomaticEnabled(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param $entity
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    private static function collate($entity)
    {
    }
    /**
     * @param $entity
     * @return array
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    private static function collateWithFFD105($entity)
    {
    }
    /**
     * @param Sale\Order $order
     * @return bool
     */
    private static function canPrintCheck(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param array $cashboxIds
     * @param array $orderIds
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws Main\ObjectException
     * @throws Main\SystemException
     * @throws \Exception
     */
    public static function getPrintableChecks(array $cashboxIds, array $orderIds = array())
    {
    }
    /**
     * @param array $settings
     * @return Check|null
     */
    public static function create(array $settings)
    {
    }
    /**
     * @param CollectableEntity $entity
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function getCheckInfo(\Bitrix\Sale\Internals\CollectableEntity $entity)
    {
    }
    /**
     * @param CollectableEntity $entity
     * @return array|false
     * @throws Main\ArgumentException
     */
    public static function getLastPrintableCheckInfo(\Bitrix\Sale\Internals\CollectableEntity $entity)
    {
    }
    /**
     * @param array $filter
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function collectInfo(array $filter = array())
    {
    }
    /**
     * @param $uuid
     * @return array|false
     * @throws Main\ArgumentException
     */
    public static function getCheckInfoByExternalUuid($uuid)
    {
    }
    /**
     * @param $id
     * @return Check|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getObjectById($id)
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $checkType
     * @param $paymentId
     * @param string $registryType
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     */
    public static function getRelatedEntitiesForPayment($checkType, $paymentId, $registryType = \Bitrix\Sale\Registry::REGISTRY_TYPE_ORDER)
    {
    }
    /**
     * @param $checkType
     * @param $shipmentId
     * @param string $registryType
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     */
    public static function getRelatedEntitiesForShipment($checkType, $shipmentId, $registryType = \Bitrix\Sale\Registry::REGISTRY_TYPE_ORDER)
    {
    }
}