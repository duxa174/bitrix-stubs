<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent;

/**
 * Class Circle
 * @package Bitrix\Report\VisualConstructor\Views\JsComponent
 */
class Circle extends \Bitrix\Report\VisualConstructor\Views\JsComponent\Base
{
    const VIEW_KEY = 'circle';
    /**
     * Circle constructor.
     */
    public function __construct()
    {
    }
    /**
     * Handle all data prepared for this view.
     *
     * @param array $dataFromReport Calculated data from report handler.
     * @return array
     */
    public function handlerFinallyBeforePassToView($dataFromReport)
    {
    }
}