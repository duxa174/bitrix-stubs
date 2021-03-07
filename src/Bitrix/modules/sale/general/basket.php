<?php

class CAllSaleBasket
{
    const TYPE_SET = 1;
    protected static $currencySiteList = array();
    protected static $currencyList = array();
    /**
     * Checks if the basket item has product provider class implementing IBXSaleProductProvider interface
     *
     * @param array $arBasketItem - array of basket item fields
     * @return mixed
     */
    public static function GetProductProvider($arBasketItem)
    {
    }
    /**
     * Removes old product subscription
     *
     * @param string $LID - site for cleaning
     * @return bool
     */
    function ClearProductSubscribe($LID)
    {
    }
    /**
     * Sends product subscription letter
     *
     * @param integer $ID - code product
     * @param string $MODULE - module product
     * @return bool
     */
    public static function ProductSubscribe($ID, $MODULE)
    {
    }
    public static function DoGetUserShoppingCart($siteId, $userId, $shoppingCart, &$arErrors, $arCoupons = array(), $orderId = 0, $enableCustomCurrency = \false)
    {
    }
    /**
     * Changes product quantity in the catalog.
     * Used in the DoSaveOrderBasket to actualize basket items quantity
     * after some operations with the order are made in the order_new form
     *
     * Depending on the state of the order (reserved/deducted)
     * and the state of the product (reserved/deducted) calls appropriate provider methods
     *
     * If the quantity is 0 and CHECK_QUANTITY is N, this method is used only to call OrderProduct method to actualize coupon data
     *
     * @param array $arBasketItem - basket item data array
     * @param int $deltaQuantity - quantity to be changed. Can be zero, in this case CHECK_QUANTITY should be N
     * @param bool $isOrderReserved - order reservation flag
     * @param bool $isOrderDeducted - order deduction flag
     * @param array $arStoreBarcodeOrderFormData - array of barcode and stores from order_new form to be used for deduction
     * @param array $arAdditionalParams - user id, site id, check_quantity flag
     * @return bool
     */
    public static function DoChangeProductQuantity($arBasketItem, $deltaQuantity, $isOrderReserved = \false, $isOrderDeducted = \false, $arStoreBarcodeOrderFormData = array(), $arAdditionalParams = array())
    {
    }
    /**
     * Updates information about basket products after changes have been made in the order_new form
     * (saves newly added basket items, changes their quantity, saves barcodes etc)
     *
     * @param int $orderId - order ID
     * @param string $siteId - site ID
     * @param bool $userId - user ID
     * @param array $arShoppingCart - array of basket items
     * @param array $arErrors
     * @param array $arCoupons
     * @param array $arStoreBarcodeOrderFormData - array of stores and barcodes for deduction (from order_new form)
     * @param bool $bSaveBarcodes - flat to save given barcode data. Used if the order is already deducted or at least has saved other barcodes
     * @return bool
     */
    public static function DoSaveOrderBasket($orderId, $siteId, $userId, &$arShoppingCart, &$arErrors, $arCoupons = array(), $arStoreBarcodeOrderFormData = array(), $bSaveBarcodes = \false)
    {
    }
    //************** ADD, UPDATE, DELETE ********************//
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function _Update($ID, &$arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    //************** BASKET USER ********************//
    function Init($bVar = \false, $bSkipFUserInit = \false)
    {
    }
    public static function GetBasketUserID($bSkipFUserInit = \false)
    {
    }
    //************** SELECT ********************//
    function GetByID($ID)
    {
    }
    //************** CALLBACK FUNCTIONS ********************//
    static function ExecuteCallbackFunction($callbackFunc = "", $module = "", $productID = 0)
    {
    }
    public function ReReadPrice($callbackFunc = "", $module = "", $productID = 0, $quantity = 0, $renewal = "N", $productProvider = "")
    {
    }
    function OnOrderProduct($callbackFunc = "", $module = "", $productID = 0, $quantity = 0, $productProvider = "")
    {
    }
    public function UpdatePrice($ID, $callbackFunc = '', $module = '', $productID = 0, $quantity = 0, $renewal = 'N', $productProvider = '', $notes = '')
    {
    }
    /**
     * @deprecated deprecated since sale 14.0.6
     * @see CSaleBasket::DoSaveOrderBasket
     *
     * @param int $orderID
     * @param int $fuserID
     * @param mixed|string $strLang
     * @param bool $arDiscounts
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function OrderBasket($orderID, $fuserID = 0, $strLang = \SITE_ID, $arDiscounts = \False)
    {
    }
    function OrderPayment($orderID, $bPaid, $recurringID = 0)
    {
    }
    function OrderDelivery($orderID, $bPaid, $recurringID = 0)
    {
    }
    function OrderCanceled($orderID, $bCancel)
    {
    }
    /**
     * Method is called to reserve all products in the order basket
     *
     * @param int $orderID
     * @param bool $bUndoReservation
     * @return mixed array
     */
    function OrderReservation($orderID, $bUndoReservation = \false)
    {
    }
    /**
     * Method is called to reserve one product in the basket
     * (it's a wrapper around product provider ReserveProduct method to use for the single product)
     *
     * @param int $basketID
     * @param float $deltaQuantity - quantity to reserve
     * @param bool $isOrderDeducted
     * @return mixed array
     */
    function ReserveBasketProduct($basketID, $deltaQuantity, $isOrderDeducted = \false)
    {
    }
    /**
     * Method is called to deduct one product in the basket
     * (it's a wrapper around product provider DeductProduct method to use for the single product)
     *
     * @param int $basketID
     * @param float $deltaQuantity - quantity to reserve
     * @param array $arStoreBarcodeData
     * @return mixed array
     */
    function DeductBasketProduct($basketID, $deltaQuantity, $arStoreBarcodeData = array())
    {
    }
    /**
     * Method is called to deduct all products of the order or undo deduction
     *
     * @param int $orderID
     * @param bool $bUndoDeduction
     * @param int $recurringID
     * @param bool $bAutoDeduction
     * @param array $arStoreBarcodeOrderFormData
     * @return mixed array
     */
    function OrderDeduction($orderID, $bUndoDeduction = \false, $recurringID = 0, $bAutoDeduction = \true, $arStoreBarcodeOrderFormData = array())
    {
    }
    function TransferBasket($FROM_FUSER_ID, $TO_FUSER_ID)
    {
    }
    public static function UpdateBasketPrices($fuserID, $siteID, array $options = array())
    {
    }
    /**
     * @internal
     * @param $fuserID
     * @param $siteID
     * @param array $options
     *
     * @return Sale\Result
     */
    public static function refreshFUserBasket($fuserID, $siteID, array $options = array())
    {
    }
    /**
     * @param array $newProperties
     * @param array $oldProperties
     * @return bool|null
     */
    public static function compareBasketProps($newProperties, $oldProperties)
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getRoundFields()
    {
    }
}
class CAllSaleUser
{
    /**
     * Creates new anonymous user with e-mail 'anonymous_some_number@example.com' and returns his ID
     * Used mainly in CRM
     *
     * @return int - new user ID or ID of already existing anonymous user, 0 if error
     */
    public static function GetAnonymousUserID()
    {
    }
    public static function DoAutoRegisterUser($autoEmail, $payerName, $siteId, &$arErrors, $arOtherFields = \null)
    {
    }
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function GetID($bSkipFUserInit = \false)
    {
    }
    function Update($ID, $allowUpdate = \true)
    {
    }
    function _Update($ID, $arFields)
    {
    }
    function GetList($arFilter)
    {
    }
    function Delete($ID)
    {
    }
    function OnUserLogin($new_user_id, array $params = array())
    {
    }
    public static function UpdateSessionSaleUserID()
    {
    }
    public static function getFUserCode()
    {
    }
    function OnUserLogout($userID)
    {
    }
    function DeleteOldAgent($nDays, $speed = 0)
    {
    }
    function OnUserDelete($userID)
    {
    }
}