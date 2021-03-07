<?php

class CCatalogActionCtrlBasketProductFields extends \CCatalogCondCtrlIBlockFields
{
    public static function GetControlDescr()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    /**
     * @param bool|string $strControlID
     * @return bool|array
     */
    public static function GetControls($strControlID = \false)
    {
    }
    /**
     * @return string|array
     */
    public static function GetControlID()
    {
    }
}
class CCatalogActionCtrlBasketProductProps extends \CCatalogCondCtrlIBlockProps
{
    public static function GetControlDescr()
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
}
class CCatalogGifterProduct extends \CGlobalCondCtrlAtoms
{
    public static function GetShowIn($params)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
    public static function GenerateApplyCallableFilter($controlId, array $gifts, $type)
    {
    }
    public static function getRatio($productId)
    {
    }
    public static function ProvideGiftData(array $actionData)
    {
    }
    protected static function GetProductIdsBySection($sectionId)
    {
    }
    public static function ExtendProductIds(array $giftedProductIds)
    {
    }
    /**
     * @return string
     */
    private static function getAdminSection()
    {
    }
}