<?php

class ReportAnalyticsBase extends \CBitrixComponent
{
    public function executeComponent()
    {
    }
    private function showError($message)
    {
    }
    /**
     * @param string $firstBoardBatch
     * @return null
     * @throws \Bitrix\Main\SystemException
     */
    private function getCurrentAnalyticBoardKey($firstBoardBatch = "")
    {
    }
    private function getLeftMenuItems()
    {
    }
    private function getLeftMenuItemsCollection()
    {
    }
    /**
     * @return \Bitrix\Report\VisualConstructor\AnalyticBoard[]
     */
    private function getAnalyticsBoardsList($boardBatchKey = "")
    {
    }
    /**
     * @param $key
     * @return \Bitrix\Report\VisualConstructor\AnalyticBoard | null
     */
    private function getAnalyticBoardByKey($key)
    {
    }
    /**
     * @return \Bitrix\Report\VisualConstructor\AnalyticBoardBatch[]
     */
    private function getAnalyticsBoardsBatchList()
    {
    }
}