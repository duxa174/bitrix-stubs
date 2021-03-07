<?php

namespace Bitrix\Report\VisualConstructor\RuntimeProvider;

/**
 * @method BaseReport|null getFirstResult()
 * Class ReportProvider
 * @package Bitrix\Report\VisualConstructor\RuntimeProvider
 */
class ReportProvider extends \Bitrix\Report\VisualConstructor\RuntimeProvider\Base
{
    /**
     * @return array
     */
    protected function availableFilterKeys()
    {
    }
    /**
     * @return array
     */
    protected function availableRelations()
    {
    }
    /**
     * @return \Bitrix\Report\VisualConstructor\Internal\Manager\ReportManager
     */
    protected function getManagerInstance()
    {
    }
    /**
     * @return BaseReportHandler[]
     */
    protected function getEntitiesList()
    {
    }
    /**
     * @return array
     */
    protected function getIndices()
    {
    }
    /**
     * @param BaseReport $report
     */
    protected function processWithCategory(\Bitrix\Report\VisualConstructor\Handler\BaseReport $report)
    {
    }
    /**
     * @param string $className Report handler class name.
     * @return BaseReport|null
     */
    public static function getReportHandlerByClassName($className)
    {
    }
}