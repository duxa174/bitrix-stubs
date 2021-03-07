<?php

namespace Bitrix\Main\Grid\Panel\Snippet;

/**
 * Group action panel checkbox
 * @package Bitrix\Main\Grid\Panel\Snippet
 */
class Checkbox
{
    protected $id = "";
    protected $name = "";
    protected $class = "";
    protected $text = "";
    /**
     * @var Onchange
     */
    protected $onchange;
    protected $value = "";
    public function __construct()
    {
    }
    /**
     * Sets checkbox value
     * @param string $value
     * @return $this
     */
    public function setValue($value = "")
    {
    }
    /**
     * Sets checkbox id
     * @param string $id
     * @return $this
     */
    public function setId($id = "")
    {
    }
    /**
     * Sets checkbox name attribute value
     * @param string $name
     * @return $this
     */
    public function setName($name = "")
    {
    }
    /**
     * Sets checkbox class name
     * @param string $class
     * @return $this
     */
    public function setClass($class = "")
    {
    }
    /**
     * Sets checkbox label text
     * @param string $text
     * @return $this
     */
    public function setText($text = "")
    {
    }
    /**
     * Sets actions on checkbox change
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