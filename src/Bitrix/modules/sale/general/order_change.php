<?php

class CAllSaleOrderChange
{
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public function GetByID($ID)
    {
    }
    public function Delete($ID)
    {
    }
    /**
     * @param $id
     *
     * @return bool|CDBResult
     */
    public function deleteByOrderId($id)
    {
    }
    /**
     * Delete records from history which older then count days
     *
     * @param $days
     * @param null $limit
     *
     * @return bool
     */
    public static function deleteOld($days, $limit = \null)
    {
    }
    /*
     * Adds record to the order change history
     * Wrapper around CSaleOrderChange::Add method
     *
     * @param int $orderId - order ID
     * @param string $type - operation type (@see CSaleOrderChangeFormat for full list of supported operations)
     * @param array $data - array of information relevant for the record type (will be used in the record description)
     * @param null|string $entityName -
     * @return bool
     */
    public static function AddRecord($orderId, $type, $data = array(), $entityName = \null, $entityId = \null)
    {
    }
    /*
     * Automatically adds records to the order changes list based on changes in the fields of the Update method.
     * By default changes in the CSaleOrder::Update and CSaleBasket::Update fields are supported.
     *
     * @see CSaleOrderChangeFormat - list of possible types of operations which will be used in analyzing incoming fields
     *
     * @param int $orderId - order ID
     * @param array $OldFields - old fields with values (retrieved by entity GetById method)
     * @param array $NewFields - new array of fields and their values
     * @param array $arDeleteFields - array of fields to be ignored
     * @param string $entityName - name of the entity (empty for order, "BASKET" for basket items etc). Used in filtering operations when creating records automatically
     * @param $entity - entity
     * @return bool
     */
    public static function AddRecordsByFields($orderId, array $arOldFields, array $arNewFields, $arDeleteFields = array(), $entityName = "", $entityId = \null, $entity = \null, array $data = array())
    {
    }
    /*
     * Creates an array of the order change record based on the necessary fields (DATA_FIELDS) if field is found among TRIGGER_FIELDS (@CSaleOrderChangeFormat)
     *
     * @param string $field - field name (if TRIGGER_FIELDS of any operation contains this field, a record about such operation will be created)
     * @param array $arFields - any other fields which should be used for creating a record
     * @param string $entity - name of the entity (empty for order, "BASKET" for basket items etc). Used in filtering operations when creating records automatically
     * @return array with keys: TYPE - operation type @see CSaleOrderChangeFormat, DATA - array of the relevant parameters based on the DATA_FIELDS
     */
    public static function MakeRecordFromField($field, $arFields, $entityName = "", $entity = \null)
    {
    }
    /*
     * Returns full description of the order change record based on the formatting function and data
     * saved for this record. Only works if specified type is found among existing types.
     *
     * Function is used in the order history in the detailed order view.
     *
     * @param string $type - one of the operation types (@see CSaleOrderChangeFormat)
     * @param string $data - serialized data saved in the database for the record of this type
     * @return array with keys: NAME - record name, INFO - full description (string)
     */
    public function GetRecordDescription($type, $data)
    {
    }
}
class CSaleOrderChangeFormat
{
    public static $operationTypes = array("ORDER_DEDUCTED" => array("TRIGGER_FIELDS" => array("DEDUCTED"), "FUNCTION" => "FormatOrderDeducted", "DATA_FIELDS" => array("DEDUCTED", "REASON_UNDO_DEDUCTED"), "ENTITY" => 'ORDER'), "ORDER_MARKED" => array("TRIGGER_FIELDS" => array("MARKED"), "FUNCTION" => "FormatOrderMarked", "DATA_FIELDS" => array("REASON_MARKED", "MARKED"), "ENTITY" => 'ORDER'), "ORDER_RESERVED" => array("TRIGGER_FIELDS" => array("RESERVED"), "FUNCTION" => "FormatOrderReserved", "DATA_FIELDS" => array("RESERVED"), "ENTITY" => 'SHIPMENT'), "ORDER_CANCELED" => array("TRIGGER_FIELDS" => array("CANCELED"), "FUNCTION" => "FormatOrderCanceled", "DATA_FIELDS" => array("CANCELED", "REASON_CANCELED"), "ENTITY" => 'ORDER'), "ORDER_COMMENTED" => array("TRIGGER_FIELDS" => array("COMMENTS"), "FUNCTION" => "FormatOrderCommented", "DATA_FIELDS" => array("COMMENTS", 'OLD_COMMENTS'), "ENTITY" => 'ORDER'), "ORDER_STATUS_CHANGED" => array("TRIGGER_FIELDS" => array("STATUS_ID"), "FUNCTION" => "FormatOrderStatusChanged", "DATA_FIELDS" => array("STATUS_ID"), "ENTITY" => 'ORDER'), "ORDER_DELIVERY_ALLOWED" => array("TRIGGER_FIELDS" => array("ALLOW_DELIVERY"), "FUNCTION" => "FormatOrderDeliveryAllowed", "DATA_FIELDS" => array("ALLOW_DELIVERY"), "ENTITY" => 'SHIPMENT'), "ORDER_DELIVERY_DOC_CHANGED" => array("TRIGGER_FIELDS" => array("DELIVERY_DOC_NUM"), "FUNCTION" => "FormatOrderDeliveryDocChanged", "DATA_FIELDS" => array("DELIVERY_DOC_NUM", "DELIVERY_DOC_DATE"), "ENTITY" => 'SHIPMENT'), "ORDER_PAYMENT_SYSTEM_CHANGED" => array("TRIGGER_FIELDS" => array("PAY_SYSTEM_ID"), "FUNCTION" => "FormatOrderPaymentSystemChanged", "DATA_FIELDS" => array("PAY_SYSTEM_ID"), "ENTITY" => 'PAYMENT'), "ORDER_PAYMENT_VOUCHER_CHANGED" => array("TRIGGER_FIELDS" => array("PAY_VOUCHER_NUM"), "FUNCTION" => "FormatOrderPaymentVoucherChanged", "DATA_FIELDS" => array("PAY_VOUCHER_NUM", "PAY_VOUCHER_DATE"), "ENTITY" => 'PAYMENT'), "ORDER_DELIVERY_SYSTEM_CHANGED" => array("TRIGGER_FIELDS" => array("DELIVERY_ID"), "FUNCTION" => "FormatOrderDeliverySystemChanged", "DATA_FIELDS" => array("DELIVERY_ID", "DELIVERY_NAME"), "ENTITY" => 'SHIPMENT'), "ORDER_PERSON_TYPE_CHANGED" => array("TRIGGER_FIELDS" => array("PERSON_TYPE_ID"), "FUNCTION" => "FormatOrderPersonTypeChanged", "DATA_FIELDS" => array("PERSON_TYPE_ID"), "ENTITY" => 'ORDER'), "ORDER_PAYED" => array("TRIGGER_FIELDS" => array("PAYED"), "FUNCTION" => "FormatOrderPayed", "DATA_FIELDS" => array("PAYED"), "ENTITY" => 'PAYMENT'), "ORDER_TRACKING_NUMBER_CHANGED" => array("TRIGGER_FIELDS" => array("TRACKING_NUMBER"), "FUNCTION" => "FormatOrderTrackingNumberChanged", "DATA_FIELDS" => array("TRACKING_NUMBER"), "ENTITY" => 'SHIPMENT'), "ORDER_USER_DESCRIPTION_CHANGED" => array("TRIGGER_FIELDS" => array("USER_DESCRIPTION"), "FUNCTION" => "FormatOrderUserDescriptionChanged", "DATA_FIELDS" => array("USER_DESCRIPTION", "OLD_USER_DESCRIPTION"), "ENTITY" => 'ORDER'), "ORDER_PRICE_DELIVERY_CHANGED" => array("TRIGGER_FIELDS" => array("PRICE_DELIVERY"), "FUNCTION" => "FormatOrderPriceDeliveryChanged", "DATA_FIELDS" => array("PRICE_DELIVERY", "CURRENCY"), "ENTITY" => 'SHIPMENT'), "ORDER_PRICE_CHANGED" => array("TRIGGER_FIELDS" => array("PRICE"), "FUNCTION" => "FormatOrderPriceChanged", "DATA_FIELDS" => array("PRICE", "OLD_PRICE", "CURRENCY"), "ENTITY" => 'ORDER'), "ORDER_1C_IMPORT" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrder1CImport", "DATA_FIELDS" => array(), "ENTITY" => 'ORDER'), "ORDER_ADDED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderAdded", "DATA_FIELDS" => array(), "ENTITY" => 'ORDER'), "ORDER_UPDATED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderUpdated", "DATA_FIELDS" => array(), "ENTITY" => 'ORDER'), "ORDER_RESPONSIBLE_CHANGE" => array("TRIGGER_FIELDS" => array("RESPONSIBLE_ID"), "FUNCTION" => "FormatOrderChange", "DATA_FIELDS" => array("RESPONSIBLE_ID", "RESPONSIBLE_NAME", "OLD_RESPONSIBLE_ID", "OLD_RESPONSIBLE_NAME"), "DATA_METHOD" => array("RESPONSIBLE_NAME" => array('CSaleOrderChangeFormat::getOrderResponsibleName', array("RESPONSIBLE_ID")), "OLD_RESPONSIBLE_NAME" => array('CSaleOrderChangeFormat::getOrderResponsibleName', array("OLD_RESPONSIBLE_ID"))), "ENTITY" => 'ORDER'), "BASKET_ADDED" => array("ENTITY" => "BASKET", "TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatBasketAdded", "DATA_FIELDS" => array("PRODUCT_ID", "NAME", "QUANTITY", "SET_PARENT_ID")), "BASKET_REMOVED" => array("ENTITY" => "BASKET", "TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatBasketRemoved", "DATA_FIELDS" => array("PRODUCT_ID", "NAME")), "BASKET_QUANTITY_CHANGED" => array("ENTITY" => "BASKET", "TRIGGER_FIELDS" => array("QUANTITY"), "FUNCTION" => "FormatBasketQuantityChanged", "DATA_FIELDS" => array("PRODUCT_ID", "NAME", "QUANTITY")), "BASKET_PRICE_CHANGED" => array("ENTITY" => "BASKET", "TRIGGER_FIELDS" => array("PRICE"), "FUNCTION" => "FormatBasketPriceChanged", "DATA_FIELDS" => array("PRODUCT_ID", "NAME", "PRICE", "CURRENCY")), "BASKET_SAVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderChange", "DATA_FIELDS" => array(), "ENTITY" => 'BASKET'), "ORDER_DELIVERY_REQUEST_SENT" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderDeliveryRequestSent", "DATA_FIELDS" => array()), "PAYMENT_ADDED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatPaymentAdded", "DATA_FIELDS" => array("PAY_SYSTEM_NAME", "SUM"), "ENTITY" => 'PAYMENT'), "PAYMENT_REMOVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatPaymentRemoved", "DATA_FIELDS" => array("PAY_SYSTEM_ID", "PAY_SYSTEM_NAME"), "ENTITY" => "PAYMENT"), "PAYMENT_PAID" => array("TRIGGER_FIELDS" => array("PAID"), "FUNCTION" => "FormatPaymentPaid", "DATA_FIELDS" => array("PAID", "ID", "PAY_SYSTEM_NAME"), "ENTITY" => 'PAYMENT'), "PAYMENT_SYSTEM_CHANGED" => array("TRIGGER_FIELDS" => array("PAY_SYSTEM_ID"), "FUNCTION" => "FormatPaymentSystemChanged", "DATA_FIELDS" => array("PAY_SYSTEM_ID"), "ENTITY" => 'PAYMENT'), "PAYMENT_VOUCHER_CHANGED" => array("TRIGGER_FIELDS" => array("PAY_VOUCHER_NUM"), "FUNCTION" => "FormatPaymentVoucherChanged", "DATA_FIELDS" => array("PAY_VOUCHER_NUM", "PAY_VOUCHER_DATE"), "ENTITY" => 'PAYMENT'), "PAYMENT_PRICE_CHANGED" => array("TRIGGER_FIELDS" => array("PRICE"), "FUNCTION" => "FormatPaymentPriceChanged", "DATA_FIELDS" => array("PRICE", "CURRENCY"), "ENTITY" => 'PAYMENT'), "PAYMENT_SAVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderChange", "DATA_FIELDS" => array(), "ENTITY" => 'PAYMENT'), "SHIPMENT_ADDED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatShipmentAdded", "DATA_FIELDS" => array('DELIVERY_NAME'), "ENTITY" => 'SHIPMENT'), "SHIPMENT_REMOVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatShipmentRemoved", "DATA_FIELDS" => array("ID", "DELIVERY_NAME"), "ENTITY" => "SHIPMENT"), "SHIPMENT_ITEM_BASKET_ADDED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatShipmentItemBasketAdded", "DATA_FIELDS" => array("PRODUCT_ID", "NAME", "QUANTITY"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_ITEM_BASKET_REMOVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatShipmentItemBasketRemoved", "DATA_FIELDS" => array("PRODUCT_ID", "NAME", "QUANTITY"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_DELIVERY_ALLOWED" => array("TRIGGER_FIELDS" => array("ALLOW_DELIVERY"), "FUNCTION" => "FormatShipmentDeliveryAllowed", "DATA_FIELDS" => array("ALLOW_DELIVERY"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_SHIPPED" => array("TRIGGER_FIELDS" => array("DEDUCTED"), "FUNCTION" => "FormatShipmentDeducted", "DATA_FIELDS" => array("DELIVERY_NAME", "DEDUCTED"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_MARKED" => array("TRIGGER_FIELDS" => array("MARKED"), "FUNCTION" => "FormatShipmentMarked", "DATA_FIELDS" => array("REASON_MARKED", "MARKED"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_RESERVED" => array("TRIGGER_FIELDS" => array("RESERVED"), "FUNCTION" => "FormatShipmentReserved", "DATA_FIELDS" => array("RESERVED"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_CANCELED" => array("TRIGGER_FIELDS" => array("CANCELED"), "FUNCTION" => "FormatShipmentCanceled", "DATA_FIELDS" => array("CANCELED", "REASON_CANCELED"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_STATUS_CHANGED" => array("TRIGGER_FIELDS" => array("STATUS_ID"), "FUNCTION" => "FormatShipmentStatusChanged", "DATA_FIELDS" => array("STATUS_ID"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_DELIVERY_DOC_CHANGED" => array("TRIGGER_FIELDS" => array("DELIVERY_DOC_NUM"), "FUNCTION" => "FormatShipmentDeliveryDocChanged", "DATA_FIELDS" => array("DELIVERY_DOC_NUM", "DELIVERY_DOC_DATE"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_TRACKING_NUMBER_CHANGED" => array("TRIGGER_FIELDS" => array("TRACKING_NUMBER"), "FUNCTION" => "FormatShipmentTrackingNumberChanged", "DATA_FIELDS" => array("TRACKING_NUMBER"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_PRICE_DELIVERY_CHANGED" => array("TRIGGER_FIELDS" => array("PRICE_DELIVERY"), "FUNCTION" => "FormatShipmentPriceDeliveryChanged", "DATA_FIELDS" => array("PRICE_DELIVERY", "CURRENCY"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_AMOUNT_CHANGED" => array("TRIGGER_FIELDS" => array("QUANTITY"), "FUNCTION" => "FormatShipmentQuantityChanged", "DATA_FIELDS" => array("QUANTITY"), "ENTITY" => 'SHIPMENT_ITEM_STORE'), "SHIPMENT_QUANTITY_CHANGED" => array("TRIGGER_FIELDS" => array("QUANTITY"), "FUNCTION" => "FormatShipmentQuantityChanged", "DATA_FIELDS" => array("QUANTITY", "ORDER_DELIVERY_ID", "NAME", "PRODUCT_ID"), "ENTITY" => 'SHIPMENT_ITEM'), "SHIPMENT_RESPONSIBLE_CHANGE" => array("TRIGGER_FIELDS" => array("RESPONSIBLE_ID"), "FUNCTION" => "FormatOrderChange", "DATA_FIELDS" => array("RESPONSIBLE_ID", "RESPONSIBLE_NAME", "OLD_RESPONSIBLE_ID", "OLD_RESPONSIBLE_NAME"), "DATA_METHOD" => array("RESPONSIBLE_NAME" => array('CSaleOrderChangeFormat::getOrderResponsibleName', array("RESPONSIBLE_ID")), "OLD_RESPONSIBLE_NAME" => array('CSaleOrderChangeFormat::getOrderResponsibleName', array("OLD_RESPONSIBLE_ID"))), "ENTITY" => 'SHIPMENT'), "SHIPMENT_SAVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderChange", "DATA_FIELDS" => array(), "ENTITY" => 'SHIPMENT'), "ORDER_UPDATE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("PERSON_TYPE_ID", "CANCELED", "STATUS_ID", "MARKED", "PRICE", "SUM_PAID", "USER_ID", "EXTERNAL_ORDER"), "ENTITY" => "ORDER"), "BASKET_ITEM_UPDATE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("QUANTITY", "PRICE", "PRODUCT_ID", "DISCOUNT_VALUE", "VAT_RATE", "OLD_QUANTITY", "OLD_PRICE", "OLD_PRODUCT_ID", "OLD_DISCOUNT_VALUE", "OLD_VAT_RATE"), "ENTITY" => "BASKET"), "BASKET_ITEM_DELETE_BUNDLE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => "BASKET"), "BASKET_ITEM_DELETED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => "BASKET"), "PAYMENT_ADD" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("PAID", "PAY_SYSTEM_ID", "PAY_SYSTEM_NAME", "SUM", "IS_RETURN", "ACCOUNT_NUMBER", "EXTERNAL_PAYMENT"), "ENTITY" => "PAYMENT"), "PAYMENT_UPDATE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("PAID", "PAY_SYSTEM_ID", "PAY_SYSTEM_NAME", "SUM", "IS_RETURN", "ACCOUNT_NUMBER", "EXTERNAL_PAYMENT", "OLD_PAID", "OLD_PAY_SYSTEM_ID", "OLD_PAY_SYSTEM_NAME", "OLD_SUM", "OLD_IS_RETURN", "OLD_ACCOUNT_NUMBER", "OLD_EXTERNAL_PAYMENT"), "ENTITY" => "PAYMENT"), "SHIPMENT_ADD" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("DELIVERY_LOCATION", "PRICE_DELIVERY", "CUSTOM_PRICE_DELIVERY", "ALLOW_DELIVERY", "DEDUCTED", "RESERVED", "DELIVERY_NAME", "DELIVERY_ID", "CANCELED", "MARKED", "SYSTEM", "COMPANY_ID", "DISCOUNT_PRICE", "BASE_PRICE_DELIVERY", "EXTERNAL_DELIVERY", "OLD_DELIVERY_LOCATION", "OLD_PRICE_DELIVERY", "OLD_CUSTOM_PRICE_DELIVERY", "OLD_ALLOW_DELIVERY", "OLD_DEDUCTED", "OLD_RESERVED", "OLD_DELIVERY_NAME", "OLD_DELIVERY_ID", "OLD_CANCELED", "OLD_MARKED", "OLD_SYSTEM", "OLD_COMPANY_ID", "OLD_DISCOUNT_PRICE", "OLD_BASE_PRICE_DELIVERY", "OLD_EXTERNAL_DELIVERY"), "ENTITY" => "SHIPMENT"), "SHIPMENT_UPDATE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("DELIVERY_NAME", "DELIVERY_ID", "OLD_DELIVERY_NAME", "OLD_DELIVERY_ID"), "ENTITY" => "SHIPMENT"), "SHIPMENT_ITEM_ADD" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("QUANTITY", "RESERVED_QUANTITY", "BASKET_ID", "BASKET_ITEM_NAME", "BASKET_ITEM_PRODUCT_ID", "ORDER_DELIVERY_ID"), "ENTITY" => "SHIPMENT_ITEM"), "SHIPMENT_ITEM_UPDATE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("BASKET_ID", "BASKET_ITEM_NAME", "BASKET_ITEM_PRODUCT_ID", "ORDER_DELIVERY_ID", "QUANTITY", "RESERVED_QUANTITY", "OLD_QUANTITY", "OLD_RESERVED_QUANTITY"), "ENTITY" => "SHIPMENT_ITEM"), "TAX_ADD" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => "TAX"), "TAX_UPDATE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => "TAX"), "TAX_DELETED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => "TAX"), "TAX_DUPLICATE_DELETED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => "TAX"), "TAX_SAVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderChange", "DATA_FIELDS" => array(), "ENTITY" => 'TAX'), "PROPERTY_ADD" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("NAME", "VALUE", "CODE"), "ENTITY" => "PROPERTY"), "PROPERTY_UPDATE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("NAME", "VALUE", "CODE", "OLD_NAME", "OLD_VALUE", "OLD_CODE"), "ENTITY" => "PROPERTY"), "PROPERTY_REMOVE" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array("NAME", "CODE", "VALUE"), "ENTITY" => "PROPERTY"), "PROPERTY_SAVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatOrderChange", "DATA_FIELDS" => array(), "ENTITY" => 'PROPERTY'), "DISCOUNT_SAVED" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => "DISCOUNT"), "ORDER_UPDATE_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'ORDER'), "BASKET_ITEM_ADD_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'BASKET_ITEM'), "BASKET_ITEM_UPDATE_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'BASKET_ITEM'), "SHIPMENT_ADD_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_UPDATE_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'SHIPMENT'), "SHIPMENT_ITEM_ADD_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'SHIPMENT_ITEM'), "SHIPMENT_ITEM_UPDATE_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'SHIPMENT_ITEM'), "SHIPMENT_ITEM_STORE_ADD_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'SHIPMENT_ITEM_STORE'), "SHIPMENT_ITEM_STORE_UPDATE_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'SHIPMENT_ITEM_STORE'), "SHIPMENT_ITEM_BASKET_ITEM_EMPTY_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'SHIPMENT_ITEM'), "MARKER_SUCCESS" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatMarkerSuccess", "DATA_FIELDS" => array("ENTITY_ID", "MESSAGE"), "ENTITY" => 'SHIPMENT'), "ORDER_SYNCHRONIZATION_IMPORT" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => 'ORDER'), "ORDER_SYNCHRONIZATION_EXPORT" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatLog", "DATA_FIELDS" => array(), "ENTITY" => 'ORDER'), "ORDER_SYNCHRONIZATION_EXPORT_ERROR" => array("TRIGGER_FIELDS" => array(), "FUNCTION" => "FormatErrorLog", "DATA_FIELDS" => array("ERROR"), "ENTITY" => 'BASKET_ITEM'));
    public static function FormatBasketAdded($data)
    {
    }
    public static function FormatBasketRemoved($data)
    {
    }
    public static function FormatOrderMarked($data)
    {
    }
    public static function FormatOrderReserved($data)
    {
    }
    public static function FormatOrderDeducted($data)
    {
    }
    public static function FormatOrderCanceled($data)
    {
    }
    public static function FormatOrderCommented($data)
    {
    }
    public static function FormatOrderStatusChanged($data)
    {
    }
    public static function FormatOrderDeliveryAllowed($data)
    {
    }
    public static function FormatOrderDeliveryDocChanged($data)
    {
    }
    public static function FormatOrderPaymentSystemChanged($data)
    {
    }
    public static function FormatOrderDeliverySystemChanged($data)
    {
    }
    public static function FormatOrderPersonTypeChanged($data)
    {
    }
    public static function FormatOrderPaymentVoucherChanged($data)
    {
    }
    public static function FormatOrderPayed($data)
    {
    }
    public static function FormatOrderTrackingNumberChanged($data)
    {
    }
    public static function FormatOrderUserDescriptionChanged($data)
    {
    }
    public static function FormatOrderPriceDeliveryChanged($data)
    {
    }
    public static function FormatOrderPriceChanged($data)
    {
    }
    public static function FormatBasketQuantityChanged($data)
    {
    }
    public static function FormatOrder1CImport($data)
    {
    }
    public static function FormatOrderAdded($data)
    {
    }
    public static function FormatOrderUpdated($data)
    {
    }
    public static function FormatBasketPriceChanged($data)
    {
    }
    public static function FormatOrderDeliveryRequestSent($data)
    {
    }
    public static function FormatPaymentPaid($data)
    {
    }
    public static function FormatShipmentDeliveryAllowed($data)
    {
    }
    public static function FormatShipmentAdded($data)
    {
    }
    public static function FormatShipmentMarked($data)
    {
    }
    public static function FormatShipmentItemBasketAdded($data)
    {
    }
    public static function FormatShipmentItemBasketRemoved($data)
    {
    }
    public static function FormatShipmentRemoved($data)
    {
    }
    public static function FormatShipmentCanceled($data)
    {
    }
    public static function FormatPaymentAdded($data)
    {
    }
    public static function FormatPaymentRemoved($data)
    {
    }
    public static function FormatShipmentDeducted($data)
    {
    }
    public static function FormatShipmentReserved($data)
    {
    }
    public static function FormatPaymentSystemChanged($data)
    {
    }
    public static function FormatShipmentPriceDeliveryChanged($data)
    {
    }
    public static function FormatPaymentVoucherChanged($arData)
    {
    }
    public static function FormatPaymentPriceChanged($data)
    {
    }
    public static function FormatShipmentTrackingNumberChanged($arData)
    {
    }
    public static function FormatShipmentDeliveryDocChanged($arData)
    {
    }
    public static function FormatShipmentStatusChanged($arData)
    {
    }
    public static function FormatShipmentQuantityChanged($data)
    {
    }
    /**
     * @param $data
     * @param $type
     * @param null $entity
     *
     * @return array
     */
    public static function FormatLog($data, $type, $entity = \null)
    {
    }
    /**
     * @param $data
     * @param $type
     * @param null $entity
     *
     * @return array
     */
    public static function FormatOrderChange($data, $type, $entity = \null)
    {
    }
    /**
     * @param $data
     * @param $type
     * @param null $entity
     *
     * @return array
     */
    public static function FormatErrorLog($data, $type, $entity = \null)
    {
    }
    /**
     * @internal
     * @param $id
     *
     * @return bool|mixed|string
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getOrderResponsibleName($id = \null)
    {
    }
    /**
     * @param $text
     * @param $data
     *
     * @return mixed
     */
    private static function doProcessLogMessage($text, $data)
    {
    }
    public static function FormatMarkerSuccess($data)
    {
    }
}