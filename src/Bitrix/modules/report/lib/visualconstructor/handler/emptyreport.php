<?php

namespace Bitrix\Report\VisualConstructor\Handler;

/**
 * Class EmptyReport
 * @package Bitrix\Report\VisualConstructor\Handler
 */
class EmptyReport extends \Bitrix\Report\VisualConstructor\Handler\BaseReport implements \Bitrix\Report\VisualConstructor\IReportMultipleBiGroupedData, \Bitrix\Report\VisualConstructor\IReportMultipleGroupedData, \Bitrix\Report\VisualConstructor\IReportMultipleData, \Bitrix\Report\VisualConstructor\IReportSingleData
{
    /**
     * BaseReport constructor.
     */
    public function __construct()
    {
    }
    /**
     * Collecting form elements for configuration form.
     *
     * @return void
     */
    public function collectFormElements()
    {
    }
    /**
     * Array format for return this method:<br>
     * array(
     *      'items' => array(
     *           array(
     *              'firstGroupId' => 1,
     *              'secondGroupId' => 2,
     *              'title' => 'Some Title',
     *              'value' => 1,
     *              'targetUrl' => 'http://url.domain?params=param'
     *          ),
     *          array(
     *              'firstGroupId' => 1,
     *              'secondGroupId' => 2,
     *              'title' => 'Some Title',
     *              'value' => 2,
     *              'targetUrl' => 'http://url.domain?params=param'
     *          )
     *      ),
     *      'config' => array(
     *          'firstGroupLabelsMap' => array(
     *              '1' => array(
     *                  'name' => 'Monday',
     *                  'params' => array()
     *              ),
     *              '2' => array(
     *                  'name' => 'Second Day of week',
     *                  'params' => array()
     *              ),
     *          ),
     *          'secondGroupLabelsMap' => array(
     *              '01.01.1970' => array(
     *                  'name' => 'Start of our internet evolution',
     *                  'params' => array()
     *              ),
     *              '15' => array(
     *                  'name' => 'Just a simple integer',
     *                  'params' => array()
     *              ),
     *          ),
     *          'reportTitle' => 'Some title for this report'
     *      )
     * )
     * @return array
     */
    public function getMultipleBiGroupedData()
    {
    }
    /**
     * @return mixed
     */
    public function getMultipleBiGroupedDemoData()
    {
    }
    /**
     * array with format
     * array(
     *     'items' => array(
     *            array(
     *                'label' => 'Some Title',
     *                'value' => 5,
     *                'targetUrl' => 'http://url.domain?params=param'
     *          )
     *     )
     * )
     * @return array
     */
    public function getMultipleData()
    {
    }
    /**
     * @return array
     */
    public function getMultipleDemoData()
    {
    }
    /**
     * Array format for return this method:<br>
     * array(
     *      'items' => array(
     *           array(
     *              'groupBy' => 01.01.1970 or 15 etc.
     *              'title' => 'Some Title',
     *              'value' => 1,
     *              'targetUrl' => 'http://url.domain?params=param'
     *          ),
     *          array(
     *              'groupBy' => 01.01.1970 or 15 etc.
     *              'title' => 'Some Title',
     *              'value' => 2,
     *              'targetUrl' => 'http://url.domain?params=param'
     *          )
     *      ),
     *      'config' => array(
     *          'groupsLabelMap' => array(
     *              '01.01.1970' => 'Start of our internet evolution'
     *              '15' =>  'Just a simple integer'
     *          ),
     *          'reportTitle' => 'Some title for this report'
     *      )
     * )
     * @return array
     */
    public function getMultipleGroupedData()
    {
    }
    /**
     * @return array
     */
    public function getMultipleGroupedDemoData()
    {
    }
    /**
     * @return array
     */
    public function getSingleDemoData()
    {
    }
    /**
     * @return array
     */
    public function getSingleData()
    {
    }
    /**
     * Called every time when calculate some report result before passing some concrete handler, such us getMultipleData or getSingleData.
     * Here you can get result of configuration fields of report, if report in widget you can get configurations of widget.
     *
     * @return mixed
     */
    public function prepare()
    {
    }
}