<?php

/***********************************************************************/
/***********  CSaleUserAccount  ****************************************/
/***********************************************************************/
class CAllSaleUserAccount
{
    static function DoPayOrderFromAccount($userId, $currency, $orderId, $orderSum, $arOptions, &$arErrors)
    {
    }
    //********** ADD, UPDATE, DELETE **************//
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    //********** LOCK **************//
    function Lock($userID, $payCurrency)
    {
    }
    function UnLock($userID, $payCurrency)
    {
    }
    function UnLockByID($ID)
    {
    }
    //********** ACTIONS **************//
    // Pay money from the local user account. Increase the local user account if necessary.
    // $userID - ID of the user
    // $paySum - payment sum
    // $payCurrency - currency
    // $orderID - ID of order (if known)
    // $useCC - increase the local user account from credit card if necessary (default - True)
    // Return True if the necessary sum withdraw from an account or False in other way
    function Pay($userID, $paySum, $payCurrency, $orderID = 0, $useCC = \true, $paymentId = \null)
    {
    }
    // Pay money from the local user account. If there is not enough money on the local user
    // account then withdraw the max available sum.
    // $userID - ID of the user
    // $paySum - payment sum
    // $payCurrency - currency
    // $orderID - ID of order (if known)
    // Return withdrawn sum or False
    function Withdraw($userID, $paySum, $payCurrency, $orderID = 0)
    {
    }
    // Modify sum of the current local user account.
    // $userID - ID of the user
    // $sum - payment sum
    // $currency - currency
    // $description - reason of modification
    // Return True on success or False in other way
    function UpdateAccount($userID, $sum, $currency, $description = "", $orderID = 0, $notes = "", $paymentId = \null)
    {
    }
    //********** EVENTS **************//
    public static function OnBeforeCurrencyDelete($Currency)
    {
    }
    public static function OnUserDelete($userID)
    {
    }
    public static function OnBeforeUserDelete($userID)
    {
    }
}