<?php

namespace Bitrix\Landing\Hook\Page;

class ThemeFonts extends \Bitrix\Landing\Hook\Page
{
    protected const BASE_HTML_SIZE = '14px';
    /**
     * Map of the field.
     * @return array
     */
    protected function getMap() : array
    {
    }
    protected static function getSelectOptions() : ?array
    {
    }
    protected static function getDefaultValues() : array
    {
    }
    /**
     * Enable or not the hook.
     * @return boolean
     */
    public function enabled() : bool
    {
    }
    /**
     * Exec hook.
     * @return void
     */
    public function exec() : void
    {
    }
    /**
     * Set fonts for ALL text in body, add style string
     * @param string $font
     */
    protected function setBaseFont(string $font) : void
    {
    }
    /**
     * Set fonts for headers, add style string
     * @param string $font
     */
    protected function setHFont(string $font) : void
    {
    }
    /**
     * Set base font size for ALL text in body, add style string
     * @param float $size
     */
    protected function setSize(float $size) : void
    {
    }
    /**
     * Replace THEME_CODE_TYPO hook to THEMEFONTS hooks.
     * @param int $lid Landing id.
     * @param int $siteId Site id.
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function migrateFromTypoThemes(int $lid, int $siteId) : void
    {
    }
}