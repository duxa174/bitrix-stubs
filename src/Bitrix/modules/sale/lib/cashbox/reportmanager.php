<?php

namespace Bitrix\Sale\Cashbox;

final class ReportManager
{
    /** This is time re-sending a check print in minutes */
    const MIN_TIME_RESENDING_REPORT = 300;
    const MAX_TIME_RESENDING_REPORT = 43200;
    /**
     * @param $cashboxId
     * @return int
     */
    public static function addZReport($cashboxId)
    {
    }
    /**
     * @param $cashboxId
     * @return array|false
     */
    public static function getLastZReport($cashboxId)
    {
    }
    /**
     * @param $cashboxId
     * @return int
     */
    public static function getPrintableZReport($cashboxId)
    {
    }
    /**
     * @param $reportId
     * @param $data
     * @return Result
     */
    public static function saveZReportPrintResult($reportId, $data)
    {
    }
}