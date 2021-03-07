<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Div Field for wrappers of type, provide methods start end end which generate DivPartHtml fields for save div context
 */
class Div extends \Bitrix\Report\VisualConstructor\Fields\Base
{
    private $content;
    /**
     * Build div star string
     * @return string
     */
    public function buildDivStart()
    {
    }
    /**
     * @return Html
     */
    public function start()
    {
    }
    /**
     * @return Html
     */
    public function end()
    {
    }
    /**
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * @return mixed
     */
    public function getContent()
    {
    }
    /**
     * @param mixed $content Value to set in div as content.
     * @return void
     */
    public function setContent($content)
    {
    }
}