<?php

namespace Bitrix\Catalog\Update;

/**
 * Class GridOption
 * The class is designed to convert the settings of the old administrative grid into a new one.
 * @package Bitrix\Main\Dev\Converter
 */
class GridOption extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "catalog";
    protected $deleteFile = true;
    protected $limit = 100;
    /**
     * The method records the necessary data for conversion into an option.
     * @param string $tableId Grid id.
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function setGridToConvert($tableId)
    {
    }
    public function execute(array &$option)
    {
    }
}