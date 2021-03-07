<?php

namespace Bitrix\Sale;

/**
 * Class Configuration
 * @package Bitrix\Sale
 */
class Configuration
{
    const RESERVE_ON_CREATE = 'O';
    const RESERVE_ON_PAY = 'R';
    const RESERVE_ON_FULL_PAY = 'P';
    const RESERVE_ON_ALLOW_DELIVERY = 'D';
    const RESERVE_ON_SHIP = 'S';
    const ALLOW_DELIVERY_ON_PAY = 'R';
    const ALLOW_DELIVERY_ON_FULL_PAY = 'P';
    const STATUS_ON_PAY = 'R';
    const STATUS_ON_FULL_PAY = 'P';
    /**
     * Returns reservation condition list.
     *
     * @param bool $extendedMode			Format mode.
     * @return array
     */
    public static function getReservationConditionList($extendedMode = false)
    {
    }
    /**
     * Returns current reservation condition.
     *
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getProductReservationCondition()
    {
    }
    /**
     * Returns current clear reserve period.
     *
     * @return int
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getProductReserveClearPeriod()
    {
    }
    /**
     * Check is current reservation with shipment.
     *
     * @return bool
     */
    public static function isReservationDependsOnShipment()
    {
    }
    /**
     * Returns true, if current condition - delivery.
     *
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function needShipOnAllowDelivery()
    {
    }
    /**
     * Returns flag allow delivery on pay.
     *
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function needAllowDeliveryOnPay()
    {
    }
    /**
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getAllowDeliveryOnPayCondition()
    {
    }
    /**
     * @param bool $extendedMode
     *
     * @return array
     */
    public static function getAllowDeliveryAfterPaidConditionList($extendedMode = false)
    {
    }
    /**
     * @return mixed
     */
    public static function getStatusPaidCondition()
    {
    }
    /**
     * @return mixed
     */
    public static function getStatusAllowDeliveryCondition()
    {
    }
    /**
     * Returns flag enable use stores.
     *
     * @return bool
     */
    public static function useStoreControl()
    {
    }
    /**
     * Returns flag use reservations.
     *
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function isEnabledReservation()
    {
    }
    /**
     * Tells if allowed to calculate discount on basket separately.
     * @return bool
     */
    public static function isAllowedSeparatelyDiscountCalculation()
    {
    }
}