<?php

class CCatalogDiscountCoupon extends \CAllCatalogDiscountCoupon
{
    public static function Add($arFields, $bAffectDataFile = \true)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID, $bAffectDataFile = \true)
    {
    }
    public static function GetByID($ID)
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return bool|CDBResult
     */
    public static function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager
     */
    public static function CouponApply($intUserID, $strCoupon)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.5.6
     * @see CCatalogDiscountCoupon::CouponOneOrderDisable()
     */
    public static function __CouponOneOrderDisable($arCoupons)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::saveApplied
     */
    public static function CouponOneOrderDisable($intOrderID = 0)
    {
    }
    /**
     * @deprecated deprecated since catalog 15.0.4
     * @see \Bitrix\Sale\DiscountCouponsManager::isExist
     */
    public static function IsExistCoupon($strCoupon)
    {
    }
}