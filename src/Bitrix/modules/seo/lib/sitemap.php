<?php

namespace Bitrix\Seo;

// Table with settings
class SitemapTable extends \Bitrix\Main\Entity\DataManager
{
    const SETTINGS_DEFAULT_FILE_MASK = '*.php,*.html';
    const ACTIVE = 'Y';
    const INACTIVE = 'N';
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    protected static function compileMask($mask)
    {
    }
    /**
     * Gets settings from admin page and returns filtered version
     * @param $arSettings
     * @return array
     */
    public static function prepareSettings($arSettings)
    {
    }
}