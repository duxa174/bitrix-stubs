<?php

namespace Bitrix\Report\VisualConstructor\Handler;

/**
 * Report handler class where instance of class oparate with values of other reports in context of one widget.
 *
 * @package Bitrix\Report\VisualConstructor\Handler
 */
class Formula extends \Bitrix\Report\VisualConstructor\Handler\BaseReport implements \Bitrix\Report\VisualConstructor\IReportSingleData
{
    /**
     * BaseReport constructor.
     */
    public function __construct()
    {
    }
    /**
     * Prepare/calculate data for report.
     * @return mixed
     */
    public function prepare()
    {
    }
    /**
     * array with format
     * array(
     *     'title' => 'Some Title',
     *     'value' => 0,
     *     'targetUrl' => 'http://url.domain?params=param'
     * )
     * @return array
     */
    public function getSingleData()
    {
    }
    /**
     * @return array
     */
    public function getSingleDemoData()
    {
    }
}