<?php

/**
 * Class CCatalogMenu
 */
class CCatalogMenu extends \CAdminMenu
{
    /**
     * @var string
     */
    protected static $urlCurrent = '';
    /**
     * @param $level
     * @return mixed
     */
    private function _get_menu_item_width($level)
    {
    }
    /**
     * @param $level
     * @return mixed
     */
    private function _get_menu_item_padding($level)
    {
    }
    /**
     * @param $aMenu
     * @param int $level
     * @param string $urlCurrent
     * @return string
     */
    public function Show($aMenu, $level = 0, $urlCurrent = '')
    {
    }
    /**
     * @param $menu_id
     * @param string $urlBack
     * @param string $mode
     */
    public function ShowSubmenu($menu_id, $urlBack, $mode = "menu")
    {
    }
    /**
     * @param $aMenu
     * @param $menu_id
     * @param $mode
     * @param int $urlBack
     * @param int $level
     * @return bool
     */
    public function _ShowSubmenu(&$aMenu, $menu_id, $mode, $urlBack, $level = 0)
    {
    }
    /**
     * @param $submenu
     * @param $urlCurrent
     * @return mixed
     */
    public static function fReplaceUrl($submenu, $urlCurrent)
    {
    }
}