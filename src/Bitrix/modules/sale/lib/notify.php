<?php

namespace Bitrix\Sale;

class Notify
{
    const EVENT_ORDER_STATUS_SEND_EMAIL = "OnOrderStatusSendEmail";
    const EVENT_ORDER_STATUS_EMAIL = "OnSaleStatusEMail";
    const EVENT_ON_ORDER_NEW_SEND_EMAIL = "OnOrderNewSendEmail";
    const EVENT_ORDER_NEW_SEND_EMAIL_EVENT_NAME = "SALE_NEW_ORDER";
    const EVENT_ON_SHIPMENT_DELIVER_SEND_EMAIL = "OnOrderDeliverSendEmail";
    const EVENT_SHIPMENT_DELIVER_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_DELIVERY";
    const EVENT_ON_CHECK_PRINT_SEND_EMAIL = "SALE_CHECK_PRINT";
    const EVENT_ON_CHECK_PRINT_ERROR_SEND_EMAIL = "SALE_CHECK_PRINT_ERROR";
    const EVENT_ON_ORDER_PAID_SEND_EMAIL = "OnOrderPaySendEmail";
    const EVENT_ON_ORDER_CANCEL_SEND_EMAIL = "OnOrderCancelSendEmail";
    const EVENT_ORDER_PAID_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_PAID";
    const EVENT_ORDER_CANCEL_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_CANCEL";
    const EVENT_ORDER_TRACKING_NUMBER_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_TRACKING_NUMBER";
    const EVENT_ORDER_STATUS_CHANGED_SEND_EMAIL_EVENT_NAME = "SALE_STATUS_CHANGED";
    const EVENT_SHIPMENT_TRACKING_NUMBER_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_TRACKING_NUMBER";
    const EVENT_DEFAULT_STATUS_CHANGED_ID = "SALE_STATUS_CHANGED_";
    const EVENT_SHIPMENT_STATUS_SEND_EMAIL = "OnSaleShipmentStatusSendEmail";
    const EVENT_SHIPMENT_STATUS_EMAIL = "OnSaleShipmentStatusEMail";
    const EVENT_ORDER_ALLOW_PAY_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_ALLOW_PAY";
    const EVENT_ON_ORDER_ALLOW_PAY_STATUS_EMAIL = "OnSaleOrderAllowPayStatusEMail";
    const EVENT_MOBILE_PUSH_ORDER_CREATED = "ORDER_CREATED";
    const EVENT_MOBILE_PUSH_ORDER_STATUS_CHANGE = "ORDER_STATUS_CHANGED";
    const EVENT_MOBILE_PUSH_ORDER_CANCELED = "ORDER_CANCELED";
    const EVENT_MOBILE_PUSH_ORDER_PAID = "ORDER_PAYED";
    const EVENT_MOBILE_PUSH_ORDER_CHECK_ERROR = "ORDER_CHECK_ERROR";
    const EVENT_MOBILE_PUSH_SHIPMENT_ALLOW_DELIVERY = "ORDER_DELIVERY_ALLOWED";
    protected static $cacheUserData = array();
    protected static $sentEventList = array();
    protected static $disableNotify = false;
    protected function __construct()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendOrderNew(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendOrderCancel(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendOrderPaid(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendOrderStatusChange(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendShipmentStatusChange(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendOrderAllowPayStatusChange(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendShipmentTrackingNumberChange(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     *
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function sendShipmentAllowDelivery(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Internals\Entity $entity
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     */
    public static function sendPrintableCheck(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Order $order
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected static function getSiteInfo(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected static function getOrderPersonalDetailLink(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Internals\Entity $entity
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function sendCheckError(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Order $order
     *
     * @return null|string
     * @throws Main\ArgumentException
     */
    protected static function getUserEmail(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     *
     * @return mixed|null|string
     * @throws Main\ArgumentException
     */
    protected static function getUserName(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     *
     * @return Result
     */
    protected static function getAllFieldsFromOrder(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    protected static function getOrderFields(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param BasketItem $basketItem
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    protected static function getBasketItemFields(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param Order $order
     *
     * @return mixed
     */
    public static function getOrderLanguageId(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Convert an array of dates from the object to a string
     *
     * @param array $fields   The array of dates
     * @return array
     */
    public static function convertDateFieldsToOldFormat(array $fields)
    {
    }
    /**
     * Convert date object to a string
     *
     * @param string $value    Field value
     * @return string
     */
    protected static function convertDateFieldToOldFormat($value)
    {
    }
    /**
     * @param $code
     * @param $event
     *
     * @return bool
     */
    private static function hasSentEvent($code, $event)
    {
    }
    /**
     * @param $code
     * @param $event
     *
     * @return bool
     */
    private static function addSentEvent($code, $event)
    {
    }
    /**
     * @param Internals\Entity $entity
     * @param $eventName
     */
    public static function callNotify(\Bitrix\Sale\Internals\Entity $entity, $eventName)
    {
    }
    /**
     * @param $value
     */
    public static function setNotifyDisable($value)
    {
    }
    /**
     * @return bool
     */
    public static function isNotifyDisabled()
    {
    }
}