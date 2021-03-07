<?php

namespace Bitrix\Iblock\ORM;

/**
 * @package    bitrix
 * @subpackage iblock
 */
class PropertyValue
{
    protected $value;
    protected $description;
    public function __construct($value, $description = null)
    {
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * @return null
     */
    public function getDescription()
    {
    }
    /**
     * @return bool
     */
    public function hasDescription()
    {
    }
}