<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Class CatalogSectionTabHandler
 * Work with iblock section / catalog category edit page.
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class CatalogSectionTabHandler extends \Bitrix\Sale\TradingPlatform\TabHandler
{
    protected static $vkCategoriesVariations = array();
    protected static $vkRequiredVariations = array();
    protected $section = array();
    /**
     * CatalogSectionTabHandler constructor.
     */
    public function __construct()
    {
    }
    /**
     * Save POST data
     *
     * @param $arArgs
     * @return bool
     */
    public function action($arArgs)
    {
    }
    /**
     * Check POST values
     *
     * @param $arArgs
     * @return bool
     * @throws SystemException
     */
    public function check($arArgs)
    {
    }
    /**
     * Format HTML for showing. Return HTML string.
     *
     * @param $divName
     * @param $arArgs
     * @param $bVarsFromForm
     * @return string
     */
    public function showTabSection($divName, $arArgs, $bVarsFromForm)
    {
    }
    /**
     * Load values from post if page was be refreshed
     *
     * @param $settings array of settings
     * @param $exportId
     * @return mixed
     */
    private function compareSettingsWithPost($settings, $exportId)
    {
    }
    private static function setUnactiveExport($exportId)
    {
    }
}