<?php

namespace Bitrix\Report\VisualConstructor\Helper;

/**
 * Class Filter
 * @package Bitrix\Report\VisualConstructor\Helper
 */
class Filter
{
    protected $filterId;
    /**
     * Base filter constructor.
     * @param string $boardId Board id for which construct filter.
     * @return void.
     */
    public function __construct($boardId)
    {
    }
    /**
     * @return string
     */
    public function getFilterId() : string
    {
    }
    /**
     * @return array
     */
    public function getFilterParameters()
    {
    }
    public static function createFilterId($boardId)
    {
    }
    /**
     * @return array
     */
    public static function getFieldsList()
    {
    }
    /**
     * @return array
     */
    public static function getPresetsList()
    {
    }
    public function getStringList()
    {
    }
}