<?php

namespace Bitrix\Report\VisualConstructor\Helper;

/**
 * Class Dashboard
 * @package Bitrix\Report\VisualConstructor\Helper
 */
class Dashboard
{
    /**
     * Try find dashboard with key for this user, if not exist create it from copy of default board and return.
     *
     * @param string $boardKey Board key.
     * @return DashboardEntity
     */
    public static function getDashboardByKeyForCurrentUser($boardKey)
    {
    }
    /**
     * Add this widget to end of all boards with key $boardKey.
     * will create new row and place there $widget.
     * @param string $boardKey Board key.
     * @param WidgetEntity $widget Widget entity.
     * @return array
     */
    public static function addWidgetToDashboardsWithKey($boardKey, \Bitrix\Report\VisualConstructor\Entity\Widget $widget)
    {
    }
    /**
     * This method is for service.
     * Find all default dashboards in product.
     * Check if version change, then remove dashboard with all nested entities, and isnert new.
     *
     * @param string $boardKey Board key.
     * @throws SystemException
     * @return void
     */
    public static function renewDefaultDashboard($boardKey)
    {
    }
    /**
     * @param string $board Key Board key.
     * @return bool
     */
    public static function getBoardModeIsDemo($boardKey)
    {
    }
    public static function setBoardModeIsDemo($boardKey, $mode)
    {
    }
    public static function updateBoardCustomDefaultMode($boardKey, $demo = false)
    {
    }
    private static function setBoardCustomDefaultModeIsDemo($boardKey, $demo = false)
    {
    }
    private static function checkBoardCustomDefaultModeIsExist($boardKey)
    {
    }
    private static function getBoardCustomDefaultModeIsDemo($boardKey)
    {
    }
}