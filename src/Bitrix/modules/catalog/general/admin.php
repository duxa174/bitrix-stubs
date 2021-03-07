<?php

class CCatalogAdmin
{
    protected static $catalogRead = \false;
    protected static $catalogGroup = \false;
    protected static $catalogPrice = \false;
    protected static $catalogMeasure = \false;
    protected static $catalogDiscount = \false;
    protected static $catalogVat = \false;
    protected static $catalogExtra = \false;
    protected static $catalogStore = \false;
    protected static $catalogExportEdit = \false;
    protected static $catalogExportExec = \false;
    protected static $catalogImportEdit = \false;
    protected static $catalogImportExec = \false;
    public static function get_other_elements_menu($IBLOCK_TYPE_ID, $IBLOCK_ID, $arSection, &$more_url)
    {
    }
    public static function get_sections_menu($IBLOCK_TYPE_ID, $IBLOCK_ID, $DEPTH_LEVEL, $SECTION_ID, $arSectionsChain = \false)
    {
    }
    public static function OnBuildGlobalMenu(
        /** @noinspection PhpUnusedParameterInspection */
        &$aGlobalMenu,
        &$aModuleMenu
    )
    {
    }
    /**
     * @deprecated deprecated since catalog 20.0.100
     *
     * @param CAdminUiList $obList
     */
    public static function OnAdminListDisplay(&$obList)
    {
    }
    public static function OnBuildSaleMenu(
        /** @noinspection PhpUnusedParameterInspection */
        &$arGlobalMenu,
        &$arModuleMenu
    )
    {
    }
    protected static function OnBuildSaleMenuItem(&$arMenu)
    {
    }
    protected static function OnBuildSaleDiscountMenu(&$arItems)
    {
    }
    protected static function OnBuildSaleTaxMenu(&$arItems)
    {
    }
    protected static function OnBuildSaleSettingsMenu(&$arItems)
    {
    }
    protected static function OnBuildSaleStoreMenu(&$arItems)
    {
    }
    protected static function OnBuildSaleBuyersMenu(&$arItems)
    {
    }
    protected static function OnBuildSaleExportMenu($strItemID)
    {
    }
    protected static function OnBuildSaleImportMenu($strItemID)
    {
    }
}