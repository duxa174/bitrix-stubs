<?php

namespace Bitrix\Main;

/**
 * Class UserFieldConfirmTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int mandatory
 * <li> DATE_CHANGE datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> FIELD string(255) mandatory
 * <li> FIELD_VALUE string(255) mandatory
 * <li> CONFIRM_CODE string(32) mandatory
 * <li> ATTEMPTS int
 * </ul>
 **/
class UserFieldConfirmTable extends \Bitrix\Main\Entity\DataManager
{
    const MAX_ATTEMPTS_COUNT = 3;
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function validateConfirmCode()
    {
    }
}