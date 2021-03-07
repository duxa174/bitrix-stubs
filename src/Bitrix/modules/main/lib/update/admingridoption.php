<?php

namespace Bitrix\Main\Update;

/**
 * Class GridOption
 * The class is designed to convert the settings of the old administrative grid into a new one.
 *
 * An example of how this miracle works can be seen here: sale,18.5.7; iblock,18.5.5; catalog,18.5.6;
 *
 * @package Bitrix\Main\Update
 */
class AdminGridOption extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "main";
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