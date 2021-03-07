<?php

namespace Bitrix\Report\VisualConstructor\Controller;

/**
 * Class Configuration
 * @package Bitrix\Report\VisualConstructor\Controller
 */
class Configuration extends \Bitrix\Report\VisualConstructor\Controller\Base
{
    /**
     * Build pseudo report configuration block, and render it in component.
     *
     * @see report/install/components/bitrix/report.visualconstructor.widget.pseudoconfig/templates/.default/template.php.
     * @param array $params Parameters from form.
     * @return Component|bool
     */
    public function buildPseudoReportConfigurationAction($params)
    {
    }
    /**
     * Return array of available what will calculate options.
     *
     * @param array $params Parameters from form.
     * @return array|bool
     */
    public function loadWhatWillCalculateByGroupAction($params)
    {
    }
}