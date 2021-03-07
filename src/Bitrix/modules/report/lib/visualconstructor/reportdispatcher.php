<?php

namespace Bitrix\Report\VisualConstructor;

/**
 * Class ReportDispatcher
 * @package Bitrix\Report\VisualConstructor
 */
class ReportDispatcher implements \Bitrix\Report\VisualConstructor\Internal\Error\IErrorable
{
    private $view;
    private $report;
    private $errors = array();
    /**
     * @return mixed|null|string
     */
    public function getReportCompatibleData()
    {
    }
    /**
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * @return View
     */
    public function getView()
    {
    }
    /**
     * @param View $view View controller entity.
     * @return void
     */
    public function setView(\Bitrix\Report\VisualConstructor\View $view)
    {
    }
    /**
     * @return Report
     */
    public function getReport()
    {
    }
    /**
     * @param Report $report Report entity.
     * @return void
     */
    public function setReport($report)
    {
    }
}