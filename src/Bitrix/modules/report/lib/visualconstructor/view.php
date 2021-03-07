<?php

namespace Bitrix\Report\VisualConstructor;

/**
 * Class View
 * @package Bitrix\Report\VisualConstructor
 */
abstract class View
{
    const VIEW_KEY = '';
    const MAX_RENDER_REPORT_COUNT = 0;
    const DEFAULT_EMPTY_REPORT_COUNT = 1;
    const USE_IN_VISUAL_CONSTRUCTOR = true;
    private $label;
    private $logoUri;
    private $previewImageUri;
    private $compatibleDataType;
    private $height;
    private $jsClassName;
    private $draggable = true;
    private $horizontalResizable = true;
    /**
     * @return mixed
     */
    public function getHeight()
    {
    }
    /**
     * Setter for height.
     * Can be 'auto'
     *
     * @param mixed $height Height of widget with header 55px.
     * @return void
     */
    public function setHeight($height)
    {
    }
    /**
     * @return string
     */
    public function getKey()
    {
    }
    /**
     * @return string
     */
    public function getLabel()
    {
    }
    /**
     * Setter for label.
     *
     * @param string $label Label text.
     * @return void
     */
    public function setLabel($label)
    {
    }
    /**
     * @return string
     */
    public function getLogoUri()
    {
    }
    /**
     * Setter for miniature src.
     *
     * @param string $logoUri Path to miniature image.
     * @return void
     */
    public function setLogoUri($logoUri)
    {
    }
    /**
     * @return string
     */
    public function getCompatibleDataType()
    {
    }
    /**
     * Set compatible data type.
     *
     * @param string $compatibleDataType Data type which compatible with view type.
     * @return void
     */
    public function setCompatibleDataType($compatibleDataType)
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
     * @param array $dataFromReport Calculated data from report handler.
     * @return array
     */
    public abstract function handlerFinallyBeforePassToView($dataFromReport);
    /**
     * Use if need to construct widget entity by view type.
     *
     * @param string $boardId Board id.
     * @return BaseWidget
     */
    public final function buildWidgetHandlerForBoard($boardId)
    {
    }
    /**
     * When building new widget, add default Report handlers to widget.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return BaseWidget
     */
    public function addDefaultReportHandlersToWidgetHandler(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * Find report handler by class name and build Report handler in context of widget handler and view type.
     *
     * @param string $reportHandlerClassName Report handler class name.
     * @param BaseWidget $widgetHandler Widget handler.
     * @return null
     */
    public function getReportHandler($reportHandlerClassName, \Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * Method to modify widget configuration form in context of view.
     *
     * @param WidgetForm $form Form Entity.
     * @return WidgetForm $form
     */
    public function prepareWidgetFormBeforeRender(\Bitrix\Report\VisualConstructor\WidgetForm $form)
    {
    }
    /**
     * Method to modify widget form elements.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return void
     */
    public function collectWidgetHandlerFormElements(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * Method to modify widget form elements.
     *
     * @param BaseReport $reportHandler Widget handler.
     * @return void
     */
    public function collectReportHandlerFormElements($reportHandler)
    {
    }
    /**
     * @return string
     */
    public function getJsClassName()
    {
    }
    /**
     * Setter for js class name.
     *
     * @param string $jsClassName Js class name.
     * @return void
     */
    public function setJsClassName($jsClassName)
    {
    }
    /**
     * Method to modify Content which pass to widget view, in absolute end.
     *
     * @param Widget $widget Widget entity.
     * @param bool $withCalculatedData Marker for calculate or no data in widget.
     * @return array
     */
    public function prepareWidgetContent(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $withCalculatedData = false)
    {
    }
    /**
     * @return bool
     */
    public function isDraggable()
    {
    }
    /**
     * Setter for draggable.
     *
     * @param bool $draggable Marker for dragging functionality.
     * @return void
     */
    public function setDraggable($draggable)
    {
    }
    /**
     * Check is $view compatible with current view type.
     *
     * @param View $view View entity.
     * @return bool
     */
    public function isCompatibleWithView(\Bitrix\Report\VisualConstructor\View $view)
    {
    }
    /**
     * Default colors set for reports.
     *
     * @param int $num Number of color which need.
     * @return string
     */
    public function getReportDefaultColor($num)
    {
    }
    /**
     * @return bool
     */
    public function isHorizontalResizable()
    {
    }
    /**
     * If true then big widget can set to small place.
     *
     * @param bool $horizontalResizable Marker to set resizable mode.
     * #return void
     */
    public function setHorizontalResizable($horizontalResizable)
    {
    }
    /**
     * @return mixed
     */
    public function getPreviewImageUri()
    {
    }
    /**
     * @param mixed $previewImageUri
     */
    public function setPreviewImageUri($previewImageUri)
    {
    }
}