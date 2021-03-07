<?php

namespace Bitrix\Sale\Integration\Report;

class EventHandler
{
    const BATCH_INTERNET_SHOP = 'sale_internet_shop';
    const REPORT_KEY = 'sale_report_board_';
    const REPORT_VIEW_URL = '/shop/settings/sale_report_view.php';
    /**
     * @return AnalyticBoardBatch[]
     */
    public static function onAnalyticPageBatchCollect()
    {
    }
    /**
     * @return AnalyticBoard[]
     */
    public static function onAnalyticPageCollect()
    {
    }
    public static function getCurrentUserId()
    {
    }
}