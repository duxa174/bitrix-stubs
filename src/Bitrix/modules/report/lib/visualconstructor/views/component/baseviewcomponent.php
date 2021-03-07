<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

/**
 * Class BaseComponent created for prevent duplicating code for all component widget views
 * @package Bitrix\Report\VisualConstructor\Views\Component
 */
abstract class BaseViewComponent extends \CBitrixComponent
{
    /**
     * Common execute method for all views of type component.
     * @return void
     */
    public function executeComponent()
    {
    }
}