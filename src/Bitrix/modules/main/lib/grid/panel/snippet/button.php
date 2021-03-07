<?php

namespace Bitrix\Main\Grid\Panel\Snippet;

/**
 * Button for group actions panel
 * @package Bitrix\Main\Grid\Panel\Snippet
 */
class Button
{
    protected $id = "";
    protected $name = "";
    protected $class = "";
    protected $text = "";
    /**
     * @var Onchange
     */
    protected $onchange;
    protected $title = "";
    public function __construct()
    {
    }
    /**
     * Sets button title
     * @param string $title
     * @return $this
     */
    public function setTitle($title = "")
    {
    }
    /**
     * Sets button id
     * @param string $id
     * @return $this
     */
    public function setId($id = "")
    {
    }
    /**
     * Sets button name attribute value
     * @param string $name
     * @return $this
     */
    public function setName($name = "")
    {
    }
    /**
     * Sets button class name
     * @param string $class
     * @return $this
     */
    public function setClass($class = "")
    {
    }
    /**
     * Sets button text
     * @param string $text
     * @return $this
     */
    public function setText($text = "")
    {
    }
    /**
     * Sets actions on button click
     * @param Onchange $onchange
     * @return $this
     */
    public function setOnchange(\Bitrix\Main\Grid\Panel\Snippet\Onchange $onchange)
    {
    }
    /**
     * @return array
     */
    public function toArray()
    {
    }
}