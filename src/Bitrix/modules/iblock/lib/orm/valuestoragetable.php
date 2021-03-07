<?php

namespace Bitrix\Iblock\ORM;

/**
 * @package    bitrix
 * @subpackage iblock
 */
abstract class ValueStorageTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const GENERIC_VALUE_FIELD_NAME = 'IBLOCK_GENERIC_VALUE';
    public static function getObjectParentClass()
    {
    }
}