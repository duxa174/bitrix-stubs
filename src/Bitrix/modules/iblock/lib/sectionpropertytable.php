<?php

namespace Bitrix\Iblock;

/**
 * Class SectionPropertyTable
 *
 * Fields:
 * <ul>
 * <li> IBLOCK_ID int mandatory
 * <li> SECTION_ID int mandatory
 * <li> PROPERTY_ID int mandatory
 * <li> SMART_FILTER bool optional default 'N'
 * <li> DISPLAY_TYPE enum ('A', 'B', 'F', 'G', 'H', 'K', 'P', 'R') optional
 * <li> DISPLAY_EXPANDED bool optional default 'N'
 * <li> FILTER_HINT string(255) optional
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * <li> PROPERTY reference to {@link \Bitrix\Iblock\PropertyTable}
 * <li> SECTION reference to {@link \Bitrix\Iblock\SectionTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 **/
class SectionPropertyTable extends \Bitrix\Main\Entity\DataManager
{
    //ABCDE - for numbers
    const NUMBERS_WITH_SLIDER = 'A';
    const NUMBERS = 'B';
    //FGHIJ - for checkboxes
    const CHECKBOXES = 'F';
    const CHECKBOXES_WITH_PICTURES = 'G';
    const CHECKBOXES_WITH_PICTURES_AND_LABELS = 'H';
    //KLMNO - for radio buttons
    const RADIO_BUTTONS = 'K';
    //PQRST - for drop down
    const DROPDOWN = 'P';
    const DROPDOWN_WITH_PICTURES_AND_LABELS = 'R';
    //UWXYZ - reserved
    const CALENDAR = 'U';
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for FILTER_HINT field.
     *
     * @return array
     */
    public static function validateFilterHint()
    {
    }
}