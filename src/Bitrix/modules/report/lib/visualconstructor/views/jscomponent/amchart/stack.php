<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

/**
 * Class Stack
 * @package Bitrix\Report\VisualConstructor\Views\AmChart
 */
class Stack extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\Column
{
    const VIEW_KEY = 'stack';
    /**
     * Stack view type constructor. set label and miniature src
     */
    public function __construct()
    {
    }
    /**
     * Return list of compatible view type keys, to this view types can switch without reform configurations.
     *
     * @return array
     */
    public function getCompatibleViewTypes()
    {
    }
    /**
     * Handle all data prepared for this view.
     *
     * @param array $dataFromReport Parameters prepared in report handlers.
     * @return array
     */
    public function handlerFinallyBeforePassToView($dataFromReport)
    {
    }
}