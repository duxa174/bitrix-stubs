<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Class Html simple field to display some text or simple html
 * @package Bitrix\Report\VisualConstructor\Fields
 */
class Html extends \Bitrix\Report\VisualConstructor\Fields\Base
{
    private $content;
    /**
     * Html constructor.
     * @param string $contentHtml String to set as content of html element.
     */
    public function __construct($contentHtml = '')
    {
    }
    /**
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * @return string
     */
    public function getContent()
    {
    }
    /**
     * Setter for content.
     *
     * @param string $content String to set as Html element content.
     * @return void
     */
    public function setContent($content)
    {
    }
}