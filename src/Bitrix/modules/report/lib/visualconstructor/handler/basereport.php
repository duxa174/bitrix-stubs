<?php

namespace Bitrix\Report\VisualConstructor\Handler;

/**
 * Class BaseReport
 * @property mixed category
 * @property void unit
 * @package Bitrix\Report\VisualConstructor
 */
abstract class BaseReport extends \Bitrix\Report\VisualConstructor\Handler\Base implements \Bitrix\Report\VisualConstructor\IReportData
{
    private $title;
    private $categoryKey;
    private $unitKey;
    private $weight = 0;
    private $report;
    private $calculatedData;
    private $widgetHandler;
    /**
     * BaseReport constructor.
     */
    public function __construct()
    {
    }
    /**
     * @return \Bitrix\Report\VisualConstructor\Fields\Base[]
     */
    public function getCollectedFormElements()
    {
    }
    /**
     * Collecting form elements for configuration form.
     *
     * @return void
     */
    protected function collectFormElements()
    {
    }
    /**
     * @return DropDown
     */
    public function getCalculateField()
    {
    }
    /**
     * @param DropDown $whatWillCalculateField What will calculate field.
     * @return DropDown
     */
    public function getGroupingField(\Bitrix\Report\VisualConstructor\Fields\Valuable\DropDown $whatWillCalculateField)
    {
    }
    /**
     * @return array
     */
    protected function getGroupByOptions()
    {
    }
    /**
     * @return BaseFormField[]
     */
    public function getFormElements()
    {
    }
    /**
     * @param BaseValuable $element Element for which construct name.
     * @param string $pseudoReportId pseudo report id is report not exist.
     * @return string
     */
    protected function getNameForFormElement(\Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable $element, $pseudoReportId = '')
    {
    }
    /**
     * @return string
     */
    public function getTitle()
    {
    }
    /**
     * @param string $title Title of report handler.
     * @return void
     */
    public function setTitle($title)
    {
    }
    /**
     * @return mixed
     */
    public function getWeight()
    {
    }
    /**
     * @param mixed $weight Weight value for sorting.
     * @return void
     */
    public function setWeight($weight)
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
    /**
     * @return mixed
     */
    public function getCalculatedData()
    {
    }
    /**
     * @param mixed $calculatedData Report handler calculated data.
     * @return void
     */
    public function setCalculatedData($calculatedData)
    {
    }
    /**
     * Fill report handler properties from Report entity.
     *
     * @param Report $report Report entity.
     * @return void
     */
    public function fillReport(\Bitrix\Report\VisualConstructor\Entity\Report $report)
    {
    }
    private function fillFormElementsValues()
    {
    }
    /**
     * @return string
     */
    public function getCategoryKey()
    {
    }
    /**
     * Attach report handler to category.
     *
     * @param string $categoryKey Category key.
     * @return void
     */
    protected function setCategoryKey($categoryKey)
    {
    }
    /**
     * @return string
     */
    public function getUnitKey()
    {
    }
    /**
     * @param string $unitKey Unit measurement key.
     * @return void
     */
    protected function setUnitKey($unitKey)
    {
    }
    /**
     * Field for selecting category.
     *
     * @return DropDown
     */
    private function getReportHandlerCategoryField()
    {
    }
    /**
     * Build report handler select drop down.
     * Collect all report handler sin selected category.
     *
     * @param string $categoryKey Category key.
     * @return CustomDropDown
     */
    private function getReportHandlerSelectField($categoryKey = '__')
    {
    }
    /**
     * @return array
     */
    public function getReportImplementedDataTypes()
    {
    }
    /**
     * @return BaseWidget|null
     */
    public function getWidgetHandler()
    {
    }
    /**
     * Attach report handler to widget handler.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return void
     */
    public function setWidgetHandler(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * In cloning of entity clone nested entities too.(configurations, form elements list).
     * @return void
     */
    public function __clone()
    {
    }
    /**
     *
     * @param null $groupingValue Grouping field value.
     * @return array
     */
    public function getWhatWillCalculateOptions($groupingValue = null)
    {
    }
    /**
     * In some case, need to dynamically disable some report handler
     * @return bool
     */
    public function isEnabled()
    {
    }
}