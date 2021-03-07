<?php

class CAllCatalogDiscountCoupon
{
    const TYPE_ONE_TIME = 'Y';
    const TYPE_ONE_ORDER = 'O';
    const TYPE_NO_LIMIT = 'N';
    protected static $arOneOrderCoupons = array();
    protected static $existCouponsManager = \null;
    /**
     * @deprecated deprecated since catalog 15.0.7
     * @see \Bitrix\Catalog\DiscountCouponTable::getCouponTypes
     *
     * @param bool $boolFull			Get full description.
     * @return array
     */
    public static function GetCoupontTypes($boolFull = \false)
    {
    }
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.7
     * @see \Bitrix\Catalog\DiscountCouponTable::deleteByDiscount()
     *
     * @param int $ID
     * @param bool $bAffectDataFile
     * @return bool
     */
    public static function DeleteByDiscountID($ID, $bAffectDataFile = \true)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::add
     *
     * @param string $coupon			Coupon code.
     * @return bool
     */
    public static function SetCoupon($coupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::get
     */
    public static function GetCoupons()
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::delete
     *
     * @param string $strCoupon			Coupon code.
     * @return bool
     */
    public static function EraseCoupon($strCoupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::clear
     */
    public static function ClearCoupon()
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::add
     *
     * @param int $intUserID				User id.
     * @param string $strCoupon			Coupon code.
     * @return bool
     */
    public static function SetCouponByManage($intUserID, $strCoupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::get
     *
     * @param int $intUserID			User id.
     * @return bool|array
     */
    public static function GetCouponsByManage($intUserID)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::delete
     *
     * @param int $intUserID				User id.
     * @param string $strCoupon			Coupon code.
     * @return bool
     */
    public static function EraseCouponByManage($intUserID, $strCoupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::clear
     *
     * @param int $intUserID				User id.
     * @return bool
     */
    public static function ClearCouponsByManage($intUserID)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager
     *
     * @param int $intUserID				User id.
     * @param array $arCoupons			Coupon code list.
     * @param array $arModules			Modules list.
     * @return bool
     */
    public static function OnSetCouponList($intUserID, $arCoupons, $arModules)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager
     *
     * @param int $intUserID				User id.
     * @param array $arCoupons			Coupon code list.
     * @param array $arModules			Modules list.
     * @return bool
     */
    public static function OnClearCouponList($intUserID, $arCoupons, $arModules)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager
     * @param int $intUserID				User id.
     * @param array $arModules			Modules list.
     * @return bool
     */
    public static function OnDeleteCouponList($intUserID, $arModules)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::isExist
     *
     * @param string $strCoupon			Coupon code.
     * @return bool
     */
    public static function IsExistCoupon($strCoupon)
    {
    }
    protected static function initCouponManager()
    {
    }
}