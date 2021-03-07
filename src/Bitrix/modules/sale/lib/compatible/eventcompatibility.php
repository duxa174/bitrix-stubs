<?php

namespace Bitrix\Sale\Compatible;

class EventCompatibility extends \Bitrix\Sale\Compatible\Internals\EntityCompatibility
{
    // Events old kernel, which will be called in a new kernel
    const EVENT_COMPATIBILITY_ON_ORDER_PAID = "OnSalePayOrder";
    const EVENT_COMPATIBILITY_ON_BEFORE_ORDER_DELETE = "OnBeforeOrderDelete";
    const EVENT_COMPATIBILITY_ON_ORDER_DELETED = "OnOrderDelete";
    const EVENT_COMPATIBILITY_ON_SHIPMENT_DELIVER = "OnSaleDeliveryOrder";
    const EVENT_COMPATIBILITY_ON_ORDER_UPDATE = "OnOrderUpdate";
    const EVENT_COMPATIBILITY_ON_BEFORE_ORDER_ADD = "OnBeforeOrderAdd";
    const EVENT_COMPATIBILITY_ON_BEFORE_ORDER_UPDATE = "OnBeforeOrderUpdate";
    const EVENT_COMPATIBILITY_ON_ORDER_SAVE = "OnOrderSave";
    const EVENT_COMPATIBILITY_ON_ORDER_ADD = "OnOrderAdd";
    const EVENT_COMPATIBILITY_ON_BEFORE_BASKET_ITEM_ADD = "OnBeforeBasketAdd";
    const EVENT_COMPATIBILITY_ON_BEFORE_BASKET_ITEM_UPDATE = "OnBeforeBasketUpdate";
    const EVENT_COMPATIBILITY_ON_BASKET_ITEM_ADD = "OnBasketAdd";
    const EVENT_COMPATIBILITY_ON_BASKET_ITEM_UPDATE = "OnBasketUpdate";
    const EVENT_COMPATIBILITY_ON_BEFORE_ORDER_CANCELED = "OnSaleBeforeCancelOrder";
    const EVENT_COMPATIBILITY_ON_ORDER_CANCELED = "OnSaleCancelOrder";
    const EVENT_COMPATIBILITY_ON_TRACKING_NUMBER_CHANGE = "OnTrackingNumberChange";
    const EVENT_COMPATIBILITY_ON_BEFORE_ORDER_STATUS_CHANGE = "OnSaleBeforeStatusOrder";
    const EVENT_COMPATIBILITY_ON_ORDER_STATUS_CHANGE = "OnSaleStatusOrder";
    const EVENT_COMPATIBILITY_ORDER_STATUS_SEND_EMAIL = "OnOrderStatusSendEmail";
    const EVENT_COMPATIBILITY_ORDER_STATUS_EMAIL = "OnSaleStatusEMail";
    const EVENT_COMPATIBILITY_MOBILE_PUSH_ORDER_STATUS_CHANGE = "ORDER_STATUS_CHANGED";
    const EVENT_COMPATIBILITY_ON_ORDER_NEW_SEND_EMAIL = "OnOrderNewSendEmail";
    const EVENT_COMPATIBILITY_ORDER_NEW_SEND_EMAIL_EVENT_NAME = "SALE_NEW_ORDER";
    const EVENT_COMPATIBILITY_ON_ORDER_DELIVER_SEND_EMAIL = "OnOrderDeliverSendEmail";
    const EVENT_COMPATIBILITY_ORDER_DELIVER_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_DELIVERY";
    const EVENT_COMPATIBILITY_ON_ORDER_PAID_SEND_EMAIL = "OnOrderPaySendEmail";
    const EVENT_COMPATIBILITY_ON_ORDER_CANCEL_SEND_EMAIL = "OnOrderCancelSendEmail";
    const EVENT_COMPATIBILITY_ORDER_CANCEL_SEND_EMAIL_EVENT_NAME = "SALE_ORDER_CANCEL";
    const EVENT_COMPATIBILITY_ON_BEFORE_BASKET_DELETE = "OnBeforeBasketDelete";
    const EVENT_COMPATIBILITY_ON_BASKET_DELETED = "OnBasketDelete";
    //	const EVENT_COMPATIBILITY_ON_BASKET_ = "OnSaleCancelOrder";
    protected static $disableMailSend = false;
    protected static $disableEvent = false;
    /**
     * @param string $event
     * @return bool
     */
    public static function getEventListUsed($event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSalePayOrder(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleOrderPaidSendMail(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onSaleOrderCancelSendEmail(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onOrderNewSendEmail(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onBeforeOrderDelete(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onOrderDelete(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     * @throws Main\ObjectNotFoundException
     */
    public static function onSaleDeliveryOrder(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onOrderSave(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onOrderSaved(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onOrderAdd(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onOrderBeforeSaved(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onSaleBeforeCancelOrder(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onSaleCancelOrder(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     * @throws Main\ObjectNotFoundException
     */
    public static function onBasketItemBeforeChange(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     */
    public static function onBasketItemChange(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     * @throws Main\ObjectNotFoundException
     */
    public static function onShipmentTrackingNumberChange(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     * @throws Main\ObjectNotFoundException
     */
    public static function onShipmentAllowDelivery(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     * @throws Main\ObjectNotFoundException
     */
    public static function onSaleStatusOrderChange(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     * @throws Main\ObjectNotFoundException
     */
    public static function onSaleOrderStatusChangeSendEmail(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param $id
     * @param $eventName
     * @param $fields
     *
     * @return bool
     */
    public static function onCallOrderNewSendEmail($id, $eventName, $fields)
    {
    }
    /**
     * @param $id
     * @param $eventName
     * @param $fields
     *
     * @return bool
     */
    public static function onCallOrderCancelSendEmail($id, $eventName, $fields)
    {
    }
    /**
     * @param Main\Event $event
     *
     * @return Main\EventResult
     * @throws Main\ObjectNotFoundException
     */
    public static function onSaleBeforeStatusOrderChange(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onBeforeBasketDelete(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onBasketDelete(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param $value
     */
    public static function setDisableMailSend($value)
    {
    }
    /**
     * @param $value
     */
    protected static function setDisableEvent($value)
    {
    }
    /**
     * @return bool
     */
    protected static function isDisableEvent()
    {
    }
    /**
     *
     */
    public static function registerEvents()
    {
    }
    /**
     *
     */
    public static function unRegisterEvents()
    {
    }
}