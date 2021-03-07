<?php

namespace Bitrix\Sale\Exchange;

class EntityCollisionType
{
    const GROUP_E_ERROR = 1;
    const GROUP_E_WARNING = 2;
    const Undefined = 0;
    const OrderIsPayed = 1;
    const OrderIsShipped = 2;
    const OrderFinalStatus = 3;
    const ShipmentIsShipped = 4;
    const ShipmentBasketItemNotFound = 5;
    const ShipmentBasketItemQuantityError = 6;
    const ShipmentBasketItemsModify = 7;
    const OrderShipmentItemsModify = 8;
    const ShipmentBasketItemsModifyError = 9;
    const OrderShipmentItemsModifyError = 10;
    const PaymentIsPayed = 11;
    const OrderShipmentDeleted = 12;
    const OrderShipmentDeletedError = 13;
    const OrderPaymentDeleted = 14;
    const OrderPaymentDeletedError = 15;
    const OrderBasketItemTaxValueError = 16;
    const OrderSynchronizeBasketItemsModify = 17;
    const OrderPayedByStatusError = 18;
    const OrderBasketItemTypeError = 19;
    const PaymentCashBoxCheckNotFound = 20;
    const OrderSynchronizeBasketItemsModifyError = 21;
    const BeforeUpdatePaymentDeletedError = 22;
    const BeforeUpdateShipmentDeletedError = 23;
    const OrderShippedByStatusError = 24;
    const OrderBasketItemsCurrencyModify = 25;
    const First = 1;
    const Last = 25;
    const OrderIsPayedName = 'ORDER_IS_PAYED';
    const OrderIsShippedName = 'ORDER_IS_SHIPPED';
    const OrderFinalStatusName = 'ORDER_FINAL_STATUS';
    const ShipmentIsShippedName = 'SHIPMENT_IS_SHIPPED';
    const ShipmentBasketItemNotFoundName = 'SHIPMENT_BASKET_ITEM_NOT_FOUND';
    const ShipmentBasketItemQuantityErrorName = 'SHIPMENT_BASKET_ITEM_QUANTITY_ERROR';
    const ShipmentBasketItemsModifyName = 'SHIPMENT_BASKET_ITEMS_MODIFY';
    const OrderShipmentItemsModifyName = 'ORDER_SHIPMENT_ITEMS_MODIFY';
    const ShipmentBasketItemsModifyErrorName = 'SHIPMENT_BASKET_ITEMS_MODIFY_ERROR';
    const OrderShipmentItemsModifyErrorName = 'ORDER_SHIPMENT_ITEMS_MODIFY_ERROR';
    const PaymentIsPayedName = 'PAYMENT_IS_PAYED';
    const OrderShipmentDeletedName = 'ORDER_SHIPMENT_DELETED';
    const OrderShipmentDeletedErrorName = 'ORDER_SHIPMENT_DELETED_ERROR';
    const OrderPaymentDeletedName = 'ORDER_PAYMENT_DELETED';
    const OrderPaymentDeletedErrorName = 'ORDER_PAYMENT_DELETED_ERROR';
    const OrderBasketItemTaxValueErrorName = 'ORDER_BASKET_ITEM_TAX_VALUE_ERROR';
    const OrderSynchronizeBasketItemsModifyName = 'ORDER_SYNCHRONIZE_BASKET_ITEMS_MODIFY';
    const OrderPayedByStatusErrorName = 'ORDER_PAYED_BY_STATUS_ERROR';
    const OrderBasketItemTypeErrorName = 'ORDER_BASKET_ITEM_TYPE_ERROR';
    const PaymentCashBoxCheckNotFoundName = 'PAYMENT_CASH_BOX_CHECK_NOT_FOUND';
    const OrderSynchronizeBasketItemsModifyErrorName = 'ORDER_SYNCHRONIZE_BASKET_ITEMS_MODIFY_ERROR';
    const BeforeUpdatePaymentDeletedErrorName = 'BEFORE_UPDATE_PAYMENT_DELETED_ERROR';
    const BeforeUpdateShipmentDeletedErrorName = 'BEFORE_UPDATE_SHIPMENT_DELETED_ERROR';
    const OrderShippedByStatusErrorName = 'ORDER_SHIPPED_BY_STATUS_ERROR';
    const OrderBasketItemsCurrencyModifyName = 'ORDER_BASKET_ITEMS_CURRENCY_MODIFY';
    private static $ALL_DESCRIPTIONS = array();
    private static $ALL_ERROR_GROUPS = array();
    /**
     * @param $typeId
     * @return bool
     */
    public static function isDefined($typeId)
    {
    }
    /**
     * @param string $name
     * @return int
     */
    public static function resolveID($name)
    {
    }
    /**
     * @param int $typeId
     * @return string
     */
    public static function resolveName($typeId)
    {
    }
    /**
     * @return array
     */
    public static function getAllDescriptions()
    {
    }
    /**
     * @param int $typeId
     * @return string
     */
    public static function getDescription($typeId)
    {
    }
    /**
     * @param array $types
     * @return array
     */
    public static function getDescriptions($types)
    {
    }
    /**
     * @return array
     */
    protected static function getAllErrorGroups()
    {
    }
    /**
     * @param $typeId
     * @return mixed|int
     */
    public static function getErrorGroup($typeId)
    {
    }
}