<?php

namespace Bitrix\Sale\Internals;

/**
 * Class DeliveryPaySystemTable
 *
 * Fields:
 * <ul>
 * <li> DELIVERY_ID string(35) mandatory
 * <li> PAYSYSTEM_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class DeliveryPaySystemTable extends \Bitrix\Main\Entity\DataManager
{
    const LINK_DIRECTION_DELIVERY_PAYSYSTEM = "D";
    const LINK_DIRECTION_PAYSYSTEM_DELIVERY = "P";
    const ENTITY_TYPE_DELIVERY = "DELIVERY_ID";
    const ENTITY_TYPE_PAYSYSTEM = "PAYSYSTEM_ID";
    protected static $unLinked = null;
    protected static $entityItemsFullList = array();
    protected static $entityItemsFieldsList = array();
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function validateLinkDirection()
    {
    }
    /**
     * @param int $entityId
     * @param string $entityType self::ENTITY_TYPE_DELIVERY || self::ENTITY_TYPE_PAYSYSTEM
     * @param int[] $linkedIds Empty means all
     * @return \Bitrix\Main\Entity\Result
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function setLinks($entityId, $entityType, array $linkedIds = array(), $actualizeRestrictions = true)
    {
    }
    protected static function isValidParent($parentId, $entityType)
    {
    }
    protected static function actualizeDeliveriesRestrictionByPS()
    {
    }
    protected static function actualizePaySystemRestrictionByDelivery()
    {
    }
    protected static function insertLinks($entityId, $linkDirection, $entityType, $linkedIds)
    {
    }
    /**
     * @param int $entityId
     * @param string $entityType self::ENTITY_TYPE_DELIVERY || self::ENTITY_TYPE_PAYSYSTEM
     * @return int[]
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getLinks($entityId, $entityType, array $preparedData = array(), $considerParent = true)
    {
    }
    protected static function getActiveDeliveryData()
    {
    }
    protected static function excludeDeliveryByParent(array $dlvIds)
    {
    }
    protected static function includeDeliveryByParent(array $dlvIds)
    {
    }
    protected static function considerDeliveryParent(array $profilePsIds, $profileId, $parentId, $preparedData)
    {
    }
    protected static function getDeliveryParentId($deliveryId)
    {
    }
    protected static function getUnlinkedEnityItems($entityType, $linkDirection = null)
    {
    }
    protected static function getEntityItemsFieldsList($entityType)
    {
    }
    protected static function getEntityItemsFullList($entityType)
    {
    }
    public static function prepareData(array $entityIds, $entityType)
    {
    }
}