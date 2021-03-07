<?php

namespace Bitrix\B24Connector;

/**
 * Class Helper.
 * Different useful staff.
 * @package Bitrix\B24Connector
 */
class Helper
{
    /**
     * Builds admin menu
     * @param array $aGlobalMenu
     * @param array $aModuleMenu
     * @return array|bool Global menu item.
     */
    public static function onBuildGlobalMenu(&$aGlobalMenu, &$aModuleMenu)
    {
    }
    /**
     * Insert JS on public pages
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function onBeforeProlog()
    {
    }
}