<?php

namespace Bitrix\Report\VisualConstructor\Controller;

/**
 * Abstract common controller class
 * @package Bitrix\Report\VisualConstructor\Controller
 */
abstract class Base extends \Bitrix\Main\Engine\Controller
{
    /**
     * If debug mode on return last 3 lines of trace in error collection.
     *
     * @param \Exception $e Exception.
     * @return void
     */
    protected function runProcessingException(\Exception $e)
    {
    }
}