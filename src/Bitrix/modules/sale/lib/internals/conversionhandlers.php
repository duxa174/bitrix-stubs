<?php

namespace Bitrix\Sale\Internals;

/** @internal */
final class ConversionHandlers
{
    public static function onGetCounterTypes()
    {
    }
    public static function onGetRateTypes()
    {
    }
    public static function onGenerateInitialData(\Bitrix\Main\Type\Date $from, \Bitrix\Main\Type\Date $to)
    {
    }
    // Cart Counters
    // Events can be stacked!!!
    // 1) OnBeforeBasketAdd -> OnBasketAdd
    // 2) OnBeforeBasketAdd -> OnBeforeBasketUpdate -> OnBasketUpdate -> OnBasketAdd
    // 3) and other variations with mixed arguments as well, sick!!!
    public static function onSaleBasketItemSaved(\Bitrix\Main\Event $event)
    {
    }
    static $onBeforeBasketAddQuantity = 0;
    public static function onBeforeBasketAdd(
        /*array*/
        $fields
    )
    {
    }
    public static function onBasketAdd(
        $id,
        /*array*/
        $fields
    )
    {
    }
    //static private $onBeforeBasketUpdate = 0;
    public static function onBeforeBasketUpdate(
        $id,
        /*array*/
        $fields = null
    )
    {
    }
    public static function onBasketUpdate(
        $id,
        /*array*/
        $fields
    )
    {
    }
    //static private $onBeforeBasketDeleteSum = 0;
    //static private $onBeforeBasketDeleteCurrency; // TODO same to all other
    public static function onBeforeBasketDelete($id)
    {
    }
    public static function onBasketDelete($id)
    {
    }
    // Order Counters
    public static function onSaleOrderSaved(\Bitrix\Main\Event $event)
    {
    }
    public static function onOrderAdd($id, array $fields)
    {
    }
    // Payment Counters
    public static function onSaleOrderPaid(\Bitrix\Main\Event $event)
    {
    }
    public static function onSalePayOrder($id, $paid)
    {
    }
}