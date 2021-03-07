<?php

namespace Bitrix\Sale;

class OrderHistory
{
    protected static $pool = array();
    protected static $poolFields = array();
    const SALE_ORDER_HISTORY_UPDATE = 'UPDATE';
    const SALE_ORDER_HISTORY_RECORD_TYPE_ACTION = 'ACTION';
    const SALE_ORDER_HISTORY_RECORD_TYPE_FIELD = 'FIELD';
    const SALE_ORDER_HISTORY_RECORD_TYPE_DEBUG = 'DEBUG';
    const FIELD_TYPE_NAME = 'NAME';
    const FIELD_TYPE_TYPE = 'TYPE';
    const SALE_ORDER_HISTORY_LOG_LEVEL_0 = 0;
    const SALE_ORDER_HISTORY_LOG_LEVEL_1 = 1;
    const SALE_ORDER_HISTORY_ACTION_LOG_LEVEL_0 = 0;
    const SALE_ORDER_HISTORY_ACTION_LOG_LEVEL_1 = 1;
    protected function __construct()
    {
    }
    /**
     * @param string $entityName
     * @param int $orderId
     * @param string $field
     * @param null|string $oldValue
     * @param null|string $value
     * @param int $id
     * @param $entity
     * @param array $fields
     */
    public static function addField($entityName, $orderId, $field, $oldValue = null, $value = null, $id = null, $entity = null, array $fields = array())
    {
    }
    /**
     * @param $entityName
     * @param $orderId
     * @param $type
     * @param null $id
     * @param null $entity
     * @param array $fields
     * @param null $level
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function addAction($entityName, $orderId, $type, $id = null, $entity = null, array $fields = array(), $level = null)
    {
    }
    /**
     * @param $entityName
     * @param $orderId
     * @param null|int $id
     * @return bool
     */
    public static function collectEntityFields($entityName, $orderId, $id = null)
    {
    }
    /**
     * @param $entity
     * @param $orderId
     * @return bool|array
     */
    protected static function getPoolByEntity($entity, $orderId)
    {
    }
    /**
     * @param $entityName
     * @param $type
     * @param Entity $entity
     * @param array $data
     * @return array
     */
    protected static function prepareDataForAdd($entityName, $type, $entity = null, array $data = array())
    {
    }
    /**
     * @param $entityName
     * @param $orderId
     * @param $type
     * @param null $id
     * @param null|Entity $entity
     * @param array $data
     */
    protected static function addRecord($entityName, $orderId, $type, $id = null, $entity = null, array $data = array())
    {
    }
    /**
     * @param $fields
     * @return Main\Entity\AddResult
     * @throws \Exception
     */
    protected static function addInternal($fields)
    {
    }
    /**
     * @param $entityName
     * @param $type
     *
     * @return bool
     */
    protected static function getOperationType($entityName, $type)
    {
    }
    /**
     * @param $value
     * @return bool
     */
    private static function isDate($value)
    {
    }
    /**
     * @param $value
     * @return string
     */
    private static function convertDateField($value)
    {
    }
    /**
     * @param $id
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    public static function deleteByOrderId($id)
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected static function getList(array $parameters = array())
    {
    }
    /**
     * @param $primary
     * @return Main\Entity\DeleteResult
     * @throws \Exception
     */
    protected static function deleteInternal($primary)
    {
    }
    /**
     * @param $entityName
     * @param $orderId
     * @param $type
     * @param null $id
     * @param null $entity
     * @param array $fields
     * @param null $level
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function addLog($entityName, $orderId, $type, $id = null, $entity = null, array $fields = array(), $level = null)
    {
    }
    /**
     * @param $level
     *
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function checkLogLevel($level)
    {
    }
    /**
     * @param $level
     *
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function checkActionLogLevel($level)
    {
    }
    /**
     * @param $days
     * @param null $limit
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    protected static function deleteOldInternal($days, $limit = null)
    {
    }
    /**
     * Delete old records on an agent
     *
     * @param $days
     * @param null $hitLimit
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    public static function deleteOldAgent($days, $hitLimit = null)
    {
    }
    /**
     * @return array
     */
    public static function getManagerLogItems()
    {
    }
}