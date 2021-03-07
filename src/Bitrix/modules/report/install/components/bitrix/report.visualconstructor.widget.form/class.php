<?php

/**
 * Class ReportVisualConstructorWidgetForm
 */
class ReportVisualConstructorWidgetForm extends \CBitrixComponent
{
    const CREATE_MODE_NAME = 'create';
    const UPDATE_MODE_NAME = 'update';
    /**
     * @var \Bitrix\Report\VisualConstructor\Entity\Widget
     */
    private $widget;
    /**
     * @var \Bitrix\Report\VisualConstructor\View
     */
    private $view;
    private $boardId;
    private $saveButtonTitle;
    private $mode;
    /**
     * @return void
     */
    public function executeComponent()
    {
    }
    /**
     * Return form action name, different for create form and update form
     * @return string|null
     */
    private function getFormAction()
    {
    }
}