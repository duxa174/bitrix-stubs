<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

/**
 * Class CatalogSectionTabHandler
 * Work with iblock section / catalog category edit page.
 * @package Bitrix\Sale\TradingPlatform\Ebay
 */
class CatalogSectionTabHandler extends \Bitrix\Sale\TradingPlatform\TabHandler
{
    public $name = "Ebay";
    public $description = "Ebay section mappings";
    protected static $ebayCategoriesVariations = array();
    protected static $ebayRequiredVariations = array();
    public function Action($arArgs)
    {
    }
    protected function saveCategoryPropsMap($iblockId, $ebayCategoryId, array $ebayCatVar, array $bitrixCatProps)
    {
    }
    protected function saveCategoryMap($bitrixCategoryId, $iblockId, array $ebayCategoriesIds, $params = array())
    {
    }
    public function Check($arArgs)
    {
    }
    public function ShowTabSection($divName, $arArgs, $bVarsFromForm)
    {
    }
}