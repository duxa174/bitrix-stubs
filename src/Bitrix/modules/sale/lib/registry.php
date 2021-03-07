<?php

namespace Bitrix\Sale;

/**
 * Class Registry
 * @package Bitrix\Sale
 */
final class Registry
{
    const EVENT_ON_INIT_REGISTRY_LIST = 'OnInitRegistryList';
    const REGISTRY_TYPE_ORDER = 'ORDER';
    const REGISTRY_TYPE_ARCHIVE_ORDER = 'ARCHIVE_ORDER';
    const ENTITY_SHIPMENT = 'SHIPMENT';
    const ENTITY_ORDER = 'ORDER';
    const ENTITY_PAYMENT = 'PAYMENT';
    const ENTITY_PAYMENT_COLLECTION = 'PAYMENT_COLLECTION';
    const ENTITY_SHIPMENT_COLLECTION = 'SHIPMENT_COLLECTION';
    const ENTITY_PROPERTY_VALUE = 'PROPERTY_VALUE';
    const ENTITY_BUNDLE_COLLECTION = 'BUNDLE_COLLECTION';
    const ENTITY_BASKET = 'BASKET';
    const ENTITY_TAX = 'TAX';
    const ENTITY_BASKET_ITEM = 'BASKET_ITEM';
    const ENTITY_BASKET_PROPERTIES_COLLECTION = 'BASKET_PROPERTIES_COLLECTION';
    const ENTITY_BASKET_PROPERTY_ITEM = 'BASKET_PROPERTY_ITEM';
    const ENTITY_SHIPMENT_ITEM = 'SHIPMENT_ITEM';
    const ENTITY_SHIPMENT_ITEM_COLLECTION = 'SHIPMENT_ITEM_COLLECTION';
    const ENTITY_SHIPMENT_ITEM_STORE = 'SHIPMENT_ITEM_STORE';
    const ENTITY_SHIPMENT_ITEM_STORE_COLLECTION = 'SHIPMENT_ITEM_STORE_COLLECTION';
    const ENTITY_PROPERTY_VALUE_COLLECTION = 'PROPERTY_VALUE_COLLECTION';
    const ENTITY_OPTIONS = 'CONFIG_OPTION';
    const ENTITY_DISCOUNT = 'DISCOUNT';
    const ENTITY_DISCOUNT_COUPON = 'DISCOUNT_COUPON';
    const ENTITY_ORDER_DISCOUNT = 'ORDER_DISCOUNT';
    const ENTITY_PERSON_TYPE = 'PERSON_TYPE';
    const ENTITY_ORDER_STATUS = 'ORDER_STATUS';
    const ENTITY_DELIVERY_STATUS = 'DELIVERY_STATUS';
    const ENTITY_ENTITY_MARKER = 'ENTITY_MARKER';
    const ENTITY_ORDER_HISTORY = 'ORDER_HISTORY';
    const ENTITY_PROPERTY = 'PROPERTIES';
    const ENTITY_NOTIFY = 'NOTIFY';
    const ENTITY_TRADE_BINDING_COLLECTION = 'TRADE_BINDING_COLLECTION';
    const ENTITY_TRADE_BINDING_ENTITY = 'TRADE_BINDING_ENTITY';
    private static $registryMap = array();
    private static $registryObjects = array();
    private $type = '';
    /**
     * @return void
     */
    private static function initRegistry()
    {
    }
    /**
     * @return string
     */
    public function getType()
    {
    }
    /**
     * @param $type
     * @return Registry
     * @throws Main\ArgumentException
     */
    public static function getInstance($type)
    {
    }
    /**
     * @param $code
     * @param $registryItem
     * @return void
     */
    public static function setRegistry($code, $registryItem)
    {
    }
    /**
     * Registry constructor.
     * @param $type
     */
    private function __construct($type)
    {
    }
    /**
     * @param $code
     * @param $className
     */
    public function set($code, $className)
    {
    }
    /**
     * @param $code
     * @return mixed
     * @throws Main\SystemException
     */
    public function get($code)
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getOrderClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getPaymentClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getShipmentClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getShipmentItemCollectionClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getShipmentItemClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getShipmentItemStoreClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getShipmentItemStoreCollectionClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getBasketItemClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getShipmentCollectionClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getPaymentCollectionClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getPropertyValueCollectionClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getPropertyValueClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getBasketClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getBundleCollectionClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getDiscountClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getDiscountCouponClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getOrderDiscountClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getTaxClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getBasketPropertiesCollectionClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getBasketPropertyItemClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getPersonTypeClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getOrderStatusClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getDeliveryStatusClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getEntityMarkerClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getOrderHistoryClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getNotifyClassName()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    public function getPropertyClassName()
    {
    }
}