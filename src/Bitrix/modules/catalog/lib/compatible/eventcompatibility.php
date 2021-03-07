<?php

namespace Bitrix\Catalog\Compatible;

final class EventCompatibility
{
    /* Events old kernel, which will be called in a new kernel */
    /* class \CProduct */
    const ENTITY_PRODUCT = 'Product';
    const EVENT_ON_BEFORE_PRODUCT_ADD = 'OnBeforeProductAdd';
    const EVENT_ON_PRODUCT_ADD = 'OnProductAdd';
    const EVENT_ON_BEFORE_PRODUCT_UPDATE = 'OnBeforeProductUpdate';
    const EVENT_ON_PRODUCT_UPDATE = 'OnProductUpdate';
    /* class \CPrice */
    const ENTITY_PRICE = 'Price';
    const EVENT_ON_BEFORE_PRICE_ADD = 'OnBeforePriceAdd';
    const EVENT_ON_PRICE_ADD = 'OnPriceAdd';
    const EVENT_ON_BEFORE_PRICE_UPDATE = 'OnBeforePriceUpdate';
    const EVENT_ON_PRICE_UPDATE = 'OnPriceUpdate';
    const EVENT_ON_BEFORE_PRICE_DELETE = 'OnBeforePriceDelete';
    const EVENT_ON_PRICE_DELETE = 'OnPriceDelete';
    private static $allowEvents = 0;
    private static $handlerList = array();
    private static $whiteList = array(self::ENTITY_PRODUCT => array('ID' => true, 'QUANTITY' => true, 'QUANTITY_TRACE' => true, 'WEIGHT' => true, 'PRICE_TYPE' => true, 'RECUR_SCHEME_LENGTH' => true, 'RECUR_SCHEME_TYPE' => true, 'TRIAL_PRICE_ID' => true, 'WITHOUT_ORDER' => true, 'SELECT_BEST_PRICE' => true, 'VAT_ID' => true, 'VAT_INCLUDED' => true, 'CAN_BUY_ZERO' => true, 'NEGATIVE_AMOUNT_TRACE' => true, 'TMP_ID' => true, 'PURCHASING_PRICE' => true, 'PURCHASING_CURRENCY' => true, 'BARCODE_MULTI' => true, 'QUANTITY_RESERVED' => true, 'SUBSCRIBE' => true, 'WIDTH' => true, 'LENGTH' => true, 'HEIGHT' => true, 'MEASURE' => true, 'TYPE' => true, 'AVAILABLE' => true, 'BUNDLE' => true, 'PRICE_MODE' => true), self::ENTITY_PRICE => array('PRODUCT_ID' => true, 'CATALOG_GROUP_ID' => true, 'PRICE' => true, 'CURRENCY' => true, 'QUANTITY_FROM' => true, 'QUANTITY_TO' => true, 'PRICE_SCALE' => true, 'EXTRA_ID' => true, 'TMP_ID' => true, 'MEASURE_RATIO_ID' => true));
    public static function execAgent()
    {
    }
    public static function registerEvents()
    {
    }
    public static function unRegisterEvents()
    {
    }
    public static function handlerProductOnBeforeAdd(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerProductOnAfterAdd(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerProductOnBeforeUpdate(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerProductOnAfterUpdate(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerPriceOnBeforeAdd(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerPriceOnAfterAdd(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerPriceOnBeforeUpdate(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerPriceOnAfterUpdate(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerPriceOnBeforeDelete(\Bitrix\Catalog\Model\Event $event)
    {
    }
    public static function handlerPriceOnAfterDelete(\Bitrix\Catalog\Model\Event $event)
    {
    }
    /**
     * Enable old kernel events.
     *
     * @return void
     */
    private static function enableEvents()
    {
    }
    /**
     * Disable old kernel events.
     *
     * @return void
     */
    private static function disableEvents()
    {
    }
    /**
     * Return is allow old kernel events.
     *
     * @return bool
     */
    private static function allowedEvents()
    {
    }
    private static function getHandlerList($module, $event)
    {
    }
    private static function handlerOnBeforeAdd(\Bitrix\Catalog\Model\Event $event, $entity, $eventName)
    {
    }
    private static function handlerOnAfterModify(\Bitrix\Catalog\Model\Event $event, $eventName)
    {
    }
    private static function handlerOnBeforeUpdate(\Bitrix\Catalog\Model\Event $event, $entity, $eventName)
    {
    }
    private static function handlerOnBeforeDelete(\Bitrix\Catalog\Model\Event $event, $eventName)
    {
    }
    private static function handlerOnAfterDelete(\Bitrix\Catalog\Model\Event $event, $eventName)
    {
    }
    private static function handlerPriceOnAfterModify(\Bitrix\Catalog\Model\Event $event, $eventName)
    {
    }
    private static function setHandlerError(\Bitrix\Catalog\Model\EventResult $result, $eventName)
    {
    }
    private static function fillResultData(\Bitrix\Catalog\Model\EventResult $result, $entity, array $fields, array $externalFields, array $handlerFields)
    {
    }
}