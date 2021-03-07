<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Class DivPartHtml, this class create for save html part context, after add element (start end of div) we can modify them
 * @package Bitrix\Report\VisualConstructor\Fields
 */
class DivPartHtml extends \Bitrix\Report\VisualConstructor\Fields\Html
{
    private $div;
    /**
     * @param string $class String of class to div.
     * @return void
     */
    public function addClass($class)
    {
    }
    /**
     * @param string $key Key of add data attribute ('role').
     * @param string $value Value of data attribute ('widget').
     * @return void
     */
    public function addInlineStyle($key, $value)
    {
    }
    /**
     * @return Div
     */
    public function getDiv()
    {
    }
    /**
     * @param Div $div Div in which context this element.
     * @return void
     */
    public function setDiv(\Bitrix\Report\VisualConstructor\Fields\Div $div)
    {
    }
}