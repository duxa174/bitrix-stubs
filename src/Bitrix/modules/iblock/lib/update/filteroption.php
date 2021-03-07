<?php

namespace Bitrix\Iblock\Update;

/**
 * Class FilterOption
 * The class is designed to convert the settings of the old administrative filter into a new one.
 * @package Bitrix\Main\Dev\Converter
 */
class FilterOption extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "iblock";
    protected $deleteFile = true;
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