<?php

class CAllSaleOrder
{
    /**
     * @param $siteId
     * @param $userId
     * @param $arShoppingCart
     * @param $personTypeId
     * @param $arOrderPropsValues
     * @param $deliveryId
     * @param $paySystemId
     * @param $arOptions
     * @param $arErrors
     * @param $arWarnings
     * @return array|null
     */
    static function DoCalculateOrder($siteId, $userId, $arShoppingCart, $personTypeId, $arOrderPropsValues, $deliveryId, $paySystemId, $arOptions, &$arErrors, &$arWarnings)
    {
    }
    /**
     * @param $siteId
     * @param null $userId
     * @param $shoppingCart
     * @param array $options
     *
     * @return array
     */
    static function makeOrderArray($siteId, $userId = \null, array $shoppingCart, array $options = array())
    {
    }
    /**
     * calculate the cost according to the order basket
     * @param array $arBasketItems
     * @return array|bool
     */
    public static function CalculateOrderPrices($arBasketItems)
    {
    }
    // $direct == true => ID => CODE
    // $direct == false => CODE => ID
    public static function TranslateLocationPropertyValues($personTypeId, &$orderProps, $direct = \true)
    {
    }
    /**
     *
     *
     */
    public static function DoSaveOrder(&$arOrder, $arAdditionalFields, $orderId, &$arErrors, $arCoupons = array(), $arStoreBarcodeOrderFormData = array(), $bSaveBarcodes = \false)
    {
    }
    //*************** USER PERMISSIONS *********************/
    /**
     * @param int $ID
     * @param bool|array $arUserGroups
     * @param int $userID
     * @return bool
     */
    function CanUserViewOrder($ID, $arUserGroups = \false, $userID = 0)
    {
    }
    /**
     * @param int $ID
     * @param bool|array $arUserGroups
     * @param bool $siteID
     * @return bool
     */
    static function CanUserUpdateOrder($ID, $arUserGroups = \false, $siteID = \false)
    {
    }
    /**
     * @param int $ID
     * @param bool|array $arUserGroups
     * @param int $userID
     * @return bool
     */
    static function CanUserCancelOrder($ID, $arUserGroups = \false, $userID = 0)
    {
    }
    /**
     * @param int $ID
     * @param bool|array $arUserGroups
     * @param int $userID
     * @return bool
     */
    function CanUserMarkOrder($ID, $arUserGroups = \false, $userID = 0)
    {
    }
    /**
     * @param int $ID
     * @param string $flag
     * @param bool|array $arUserGroups
     * @return bool
     */
    function CanUserChangeOrderFlag($ID, $flag, $arUserGroups = \false)
    {
    }
    /**
     * @param int $ID
     * @param string $statusID
     * @param bool|array $arUserGroups
     * @return bool
     */
    function CanUserChangeOrderStatus($ID, $statusID, $arUserGroups = \false)
    {
    }
    /**
     * @param int $ID
     * @param bool|array $arUserGroups
     * @param int $userID
     * @return bool
     */
    static function CanUserDeleteOrder($ID, $arUserGroups = \false, $userID = 0)
    {
    }
    //*************** ADD, UPDATE, DELETE *********************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function _Delete($ID)
    {
    }
    function Delete($ID)
    {
    }
    //*************** COMMON UTILS *********************/
    public static function GetFilterOperation($key)
    {
    }
    public static function PrepareSql(&$arFields, $arOrder, &$arFilter, $arGroupBy, $arSelectFields, $obUserFieldsSql = \false, $callback = \false, $arOptions = array())
    {
    }
    //*************** SELECT *********************/
    public static function GetByID($ID)
    {
    }
    //*************** EVENTS *********************/
    public static function OnBeforeCurrencyDelete($currency)
    {
    }
    function OnBeforeUserDelete($userID)
    {
    }
    //*************** ACTIONS *********************/
    function PayOrder($ID, $val, $bWithdraw = \True, $bPay = \True, $recurringID = 0, $arAdditionalFields = array())
    {
    }
    function DeliverOrder($ID, $val, $recurringID = 0, $arAdditionalFields = array())
    {
    }
    function DeductOrder($ID, $val, $description = "", $bAutoDeduction = \true, $arStoreBarcodeOrderFormData = array(), $recurringID = 0)
    {
    }
    function ReserveOrder($ID, $val)
    {
    }
    function CancelOrder($ID, $val, $description = "")
    {
    }
    function StatusOrder($ID, $val)
    {
    }
    function CommentsOrder($ID, $val)
    {
    }
    function Lock($ID)
    {
    }
    function UnLock($ID)
    {
    }
    function IsLocked($ID, &$lockedBY, &$dateLock)
    {
    }
    function RemindPayment()
    {
    }
    /**
     * @deprecated
     *
     * Use \Bitrix\Main\Numerator\Numerator::previewNextNumber instead
     *
     * Generates next account number according to the scheme selected in the module options
     *
     * @param int $orderID - order ID
     * @param string $templateType - account number template type code
     * @param string $param - account number template param
     * @return mixed - generated number or false
     */
    public static function GetNextAccountNumber($orderID, $templateType, $param)
    {
    }
    function __SaleOrderCount($arFilter, $strCurrency = '')
    {
    }
    /**
     * @deprecated Use CSaleOrderChange::GetList instead
     * The function selects order history
     *
     * @param array $arOrder - array to sort
     * @param array $arFilter - array to filter
     * @param array|false $arGroupBy - array to group records
     * @param array|false $arNavStartParams - array to parameters
     * @param array $arSelectFields - array to selectes fields
     * @return object $dbRes - object result
     */
    public function GetHistoryList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function SetMark($ID, $comment = "", $userID = 0)
    {
    }
    public static function UnsetMark($ID, $userID = 0)
    {
    }
    /**
     * Sets order account number
     * Use OnBeforeOrderAccountNumberSet event to generate custom account number.
     * Account number value must be unique! By default order ID is used if generated value is incorrect
     *
     * @param int $ID - order ID
     * @return bool - true if account number is set successfully
     */
    public static function SetAccountNumber($ID)
    {
    }
    /**
     * @param $id
     *
     * @return Sale\Result|bool|int
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function setAccountNumberById($id)
    {
    }
    /**
     * The agent function. Moves reserved quantity back to the quantity field for each product
     * for orders which were placed earlier than specific date
     *
     * @return string
     */
    public static function ClearProductReservedQuantity()
    {
    }
    /**
     * Function processes "COMPLETE_ORDERS" key in $arFilter for CSaleOrder::GetList() method
     *
     * @param mixed[]|string $values - next key value in the filter
     * @param string $key - key name
     * @param string $op - key operation modificator
     * @param string $opNegative - key condition is negative or not
     * @param mixed[] $field - field array of the key
     * @param mixed[] $fields - array of all fields
     * @param mixed[] $filter - filter array of the key
     * @return string|false
     */
    protected static function ProcessCompleteOrdersParam($values, $key, $op, $opNegative, $field, $fields, $filter)
    {
    }
    // returns reference of all properties of TYPE = LOCATION
    public static function getLocationPropertyInfo()
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getRoundFields()
    {
    }
    /**
     * @internal
     * @param array $list
     * @param $perm
     * @param bool $userGroups
     * @param bool $userId
     *
     * @return array
     * @throws \Bitrix\Main\SystemException
     */
    public static function checkUserPermissionOrderList(array $list, $perm, $userGroups = \false, $userId = \false)
    {
    }
}