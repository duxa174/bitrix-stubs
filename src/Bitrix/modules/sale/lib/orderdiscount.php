<?php

namespace Bitrix\Sale;

class OrderDiscount extends \Bitrix\Sale\OrderDiscountBase
{
    /**
     * Delete all data by order.
     *
     * @param int $order			Order id.
     * @return void
     */
    public static function deleteByOrder($order)
    {
    }
    /**
     * Return parent entity type.
     * @internal
     *
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * Validate coupon.
     *
     * @param array $fields		Coupon data.
     * @return Result
     */
    protected static function validateCoupon(array $fields)
    {
    }
    /* discounts */
    /**
     * Discount getList.
     *
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getDiscountIterator(array $parameters)
    {
    }
    /* discounts end */
    /* coupons */
    /**
     * Check coupon type.
     *
     * @param int $type		Coupon type.
     * @return bool
     */
    protected static function isValidCouponTypeInternal($type)
    {
    }
    /* coupons end */
    /* order discounts */
    /**
     * Order discount getList.
     *
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getOrderDiscountIterator(array $parameters)
    {
    }
    /**
     * Low-level method add new discount for order.
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addOrderDiscountInternal(array $fields)
    {
    }
    /**
     * Returns the list of missing discount fields.
     *
     * @param array $fields		Discount fields.
     * @return array
     */
    protected static function checkRequiredOrderDiscountFields(array $fields)
    {
    }
    /**
     * Clear raw order discount data.
     *
     * @param array $rawFields	Discount information.
     * @return array|null
     */
    protected static function normalizeOrderDiscountFieldsInternal(array $rawFields)
    {
    }
    /**
     * Calculate order discount hash.
     *
     * @param array $fields		Discount information.
     * @return string|null
     */
    protected static function calculateOrderDiscountHashInternal(array $fields)
    {
    }
    /* order discounts end */
    /* order coupons */
    /**
     * Order coupons getList.
     *
     * @param array $parameters \Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    public static function getOrderCouponIterator(array $parameters)
    {
    }
    /**
     * Low-level method add new coupon for order.
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addOrderCouponInternal(array $fields)
    {
    }
    /* order coupons end */
    /* order discount modules */
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getOrderDiscountModuleIterator(array $parameters)
    {
    }
    /**
     * Low-level method save order discount modules.
     *
     * @param int $orderDiscountId
     * @param array $modules
     * @return bool
     */
    protected static function saveOrderDiscountModulesInternal($orderDiscountId, array $modules)
    {
    }
    /* discount results */
    /**
     * Converts the discount result entity identifier to the database table format.
     *
     * @param string $entity
     * @return null|int
     */
    protected static function getResultEntityInternal($entity)
    {
    }
    /**
     * Converts the discount result entity identifier from the database table format.
     *
     * @param int $entity
     * @return null|string
     */
    protected static function getResultEntityFromInternal($entity)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getResultIterator(array $parameters)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getResultDescriptionIterator(array $parameters)
    {
    }
    /**
     * Low-level method returns result table name.
     *
     * @return string|null
     */
    protected static function getResultTableNameInternal()
    {
    }
    /**
     * Low-level method returns result description table name.
     *
     * @return string|null
     */
    protected static function getResultDescriptionTableNameInternal()
    {
    }
    /**
     * Low-level method returns only those fields that are in the result table.
     *
     * @param array $fields
     * @return array|null
     */
    protected static function checkResultTableWhiteList(array $fields)
    {
    }
    /**
     * Low-level method returns only those fields that are in the result description table.
     *
     * @param array $fields
     * @return array|null
     */
    protected static function checkResultDescriptionTableWhiteList(array $fields)
    {
    }
    /**
     * Low-level method add new result discount for order.
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addResultInternal(array $fields)
    {
    }
    /**
     * Low-level method add new result description for order.
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addResultDescriptionInternal(array $fields)
    {
    }
    /**
     * Low-level method update result discount for order.
     *
     * @param int $id			Primary key.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateResultInternal($id, array $fields)
    {
    }
    /**
     * Low-level method update result description for order.
     *
     * @param int $id			Primary key.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateResultDescriptionInternal($id, array $fields)
    {
    }
    /* discount results end */
    /* round result */
    /**
     * Converts the rounded entity identifier to the database table format.
     *
     * @param string $entity
     * @return null|int
     */
    protected static function getRoundEntityInternal($entity)
    {
    }
    /**
     * Converts the rounded entity identifier from the database table format.
     *
     * @param int $entity
     * @return null|string
     */
    protected static function getRoundEntityFromInternal($entity)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getRoundResultIterator(array $parameters)
    {
    }
    /**
     * Low-level method add new round result for order.
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addRoundResultInternal(array $fields)
    {
    }
    /**
     * Low-level method update round result for order.
     *
     * @param int $id			Tablet row id.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateRoundResultInternal($id, array $fields)
    {
    }
    /**
     * Low-level method returns round result table name.
     *
     * @return string|null
     */
    protected static function getRoundTableNameInternal()
    {
    }
    /* round result end */
    /* data storage */
    /**
     * Low-level method for convert storage types to internal format.
     *
     * @param string $storageType	Abstract storage type.
     * @return int|null
     */
    protected static function getStorageTypeInternal($storageType)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getStoredDataIterator(array $parameters)
    {
    }
    /**
     * Low-level method add stored data for order.
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addStoredDataInternal(array $fields)
    {
    }
    /**
     * Low-level method update stored data for order.
     *
     * @param int $id			Tablet row id.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateStoredDataInternal($id, array $fields)
    {
    }
    /**
     * Low-level method returns the order stored data table name.
     *
     * @return string|null
     */
    protected static function getStoredDataTableInternal()
    {
    }
    /* data storage end */
}