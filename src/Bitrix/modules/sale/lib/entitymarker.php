<?php

namespace Bitrix\Sale;

class EntityMarker
{
    const ENTITY_MARKED_TYPE_AUTO = 'AUTO';
    const ENTITY_MARKED_TYPE_MANUAL = 'MANUAL';
    const ENTITY_TYPE_ORDER = 'ORDER';
    const ENTITY_TYPE_BASKET_ITEM = 'BASKET_ITEM';
    const ENTITY_TYPE_SHIPMENT = 'SHIPMENT';
    const ENTITY_TYPE_PAYMENT = 'PAYMENT';
    const ENTITY_TYPE_PROPERTY_VALUE = 'PROPERTY_VALUE';
    const ENTITY_SUCCESS_CODE_FAIL = 'N';
    const ENTITY_SUCCESS_CODE_DONE = 'Y';
    /** @var array $pool */
    protected static $pool = array();
    /**
     * @param OrderBase $order
     * @param Internals\Entity $entity
     * @param Result $result
     */
    public static function addMarker(\Bitrix\Sale\OrderBase $order, \Bitrix\Sale\Internals\Entity $entity, \Bitrix\Sale\Result $result)
    {
    }
    /**
     * @param $id
     * @param array $values
     * @param Order $order
     * @param Internals\Entity $entity
     *
     * @return Result
     */
    public static function updateMarker($id, array $values, \Bitrix\Sale\Order $order, \Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param OrderBase $order
     * @param $entityType
     * @param array $values
     *
     * @return bool
     */
    protected static function addItem(\Bitrix\Sale\OrderBase $order, $entityType, array $values)
    {
    }
    /**
     * @param $id
     * @param $values
     * @param Order $order
     * @param $entityType
     *
     * @return Result
     */
    protected static function updateItem($id, $values, \Bitrix\Sale\Order $order, $entityType)
    {
    }
    /**
     * @param int $orderCode
     * @param Internals\Entity|null $entity
     *
     * @return array|null
     */
    public static function getMarker($orderCode, \Bitrix\Sale\Internals\Entity $entity = null)
    {
    }
    /**
     * @return array
     */
    protected static function getEntityTypeList()
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return null|string
     */
    protected static function getEntityType(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param null|Order $order
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws \Exception
     */
    public static function saveMarkers(\Bitrix\Sale\Order $order = null)
    {
    }
    protected static function resetMarkers($orderCode = null)
    {
    }
    /**
     * @param Order $order
     * @param $markerId
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function tryFixErrorsByOrder(\Bitrix\Sale\Order $order, $markerId = null)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function tryFixErrors()
    {
    }
    public static function loadFromDb(array $filter)
    {
    }
    /**
     * @param Order $order
     * @param string $entityType
     * @param int $entityId
     *
     * @return Internals\Entity
     * @throws Main\ArgumentNullException
     */
    public static function getEntity(\Bitrix\Sale\Order $order, $entityType, $entityId)
    {
    }
    /**
     * @param array $parameters
     *
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $id
     *
     * @return Main\Entity\DeleteResult
     * @throws Main\ArgumentNullException
     * @throws \Exception
     */
    public static function delete($id)
    {
    }
    protected static function addInternal(array $data)
    {
    }
    protected static function updateInternal($primary, array $data)
    {
    }
    /**
     * @param Order $order
     * @param int $id
     * @param string $entityType
     * @param int $entityId
     * @param string $code
     *
     * @return string|null
     */
    public static function getPoolItemSuccess(\Bitrix\Sale\Order $order, $id, $entityType, $entityId, $code)
    {
    }
    public static function hasErrors(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param null|OrderBase $order
     *
     * @return Result
     */
    public static function getPoolAsResult(\Bitrix\Sale\OrderBase $order = null)
    {
    }
    private static function getFieldsDuplicateCheck()
    {
    }
    /**
     * @param $id
     *
     * @return bool
     */
    public static function deleteByOrderId($id)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return bool
     */
    public static function deleteByEntity(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    public static function deleteByFilter(array $values)
    {
    }
    /**
     * @param Order $order
     *
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public static function refreshMarkers(\Bitrix\Sale\Order $order)
    {
    }
}