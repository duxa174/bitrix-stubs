<?php

namespace Bitrix\Main\Update;

/**
 * Class FilterOption
 * The class is designed to convert the settings of the old administrative filter into a new one.
 *
 * An example of how this miracle works can be seen here: sale,18.5.7; iblock,18.5.5; catalog,18.5.6; main,17.0.11;
 *
 * @package Bitrix\Main\Dev\Converter
 */
class AdminFilterOption extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "main";
    protected $limit = 100;
    /**
     * The method records the necessary data for conversion into an option.
     *
     * @param string $filterId Filter id.
     * @param string $tableId Grid id.
     * @param array $ratioFields Fields of the old and new filter.
     *    array(
     *      "find_name" => "NAME",
     *      "find_lang" => "LID",
     *      ...
     *    )
     *
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function setFilterToConvert($filterId, $tableId, array $ratioFields)
    {
    }
    public function execute(array &$option)
    {
    }
    protected function convertOldFieldsToNewFields(array $oldFields, array $ratioFields)
    {
    }
    protected function getNewDateType($oldDateType, $oldDateValue)
    {
    }
}