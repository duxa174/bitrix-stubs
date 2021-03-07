<?php

namespace Bitrix\Sale\Archive;

/**
 * Class manages of orders's archiving, restoring entries from database
 *
 * @package Bitrix\Sale\Archive
 */
class Manager
{
    const SALE_ARCHIVE_VERSION = 2;
    /**
     * @return array
     */
    public static function getOrderFieldNames()
    {
    }
    /**
     * @return array
     */
    public static function getBasketFieldNames()
    {
    }
    /**
     * Archive orders by filter
     *
     * @param array $filter			Filter the selection.
     * @param int $limit		Limit the selection orders.
     * @param int $timeExecution		Limits the maximum execution time.
     *
     * @return Sale\Result $result
     *
     * @throws \Exception
     */
    public static function archiveOrders($filter = array(), $limit = null, $timeExecution = null)
    {
    }
    /**
     * Archive orders that are selected by module's settings.
     * 
     * Used in agents.
     * 
     * @param int $limit		Limit the selection orders.
     * @param int $timeExecution		Limits the maximum execution time.
     *
     * @return Sale\Result
     *
     * @throws Main\SystemException
     */
    public static function archiveByOptions($limit = null, $timeExecution = null)
    {
    }
    /**
     * Used in agents. Manage execution of agent.
     *
     * @param int $limit		Limit the selection orders.
     * @param int $maxTime		Maximum execution time of agent.
     *
     * @return string
     *
     * @throws Main\ArgumentNullException
     */
    public static function archiveOnAgent($limit, $maxTime = null)
    {
    }
    /**
     * @param array $parameters
     *
     * @return Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Get entry of order from archive by entry's id.
     *
     * @param int $id
     *
     * @return Main\DB\Result
     */
    public static function getById($id)
    {
    }
    /**
     * Get entries of basket items from archive.
     * 
     * @param array $parameters
     *
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getBasketList(array $parameters = array())
    {
    }
    /**
     * Get entry of basket item from archive by id.
     * 
     * @param int $id
     *
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getBasketItemById($id)
    {
    }
    /**
     * Delete archived order with archived basket items.
     * 
     * @param int $id
     *
     * @return Main\Entity\DeleteResult
     * @throws \Exception
     */
    public static function delete($id)
    {
    }
    /**
     * Return Archive\Order object restored from archive
     *
     * @param int $id		Entity's id.
     *
     * @return Sale\Order
     * @throws Main\ObjectNotFoundException
     * @throws Main\ArgumentNullException
     */
    public static function returnArchivedOrder($id)
    {
    }
}