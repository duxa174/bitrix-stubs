<?php

namespace Bitrix\Vote;

/**
 * Class AnswerTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ACTIVE bool mandatory default 'Y',
 * <li> TIMESTAMP_X datetime,
 * <li> QUESTION_ID int,
 * <li> C_SORT int,
 * <li> COUNTER int,
 * <li> MESSAGE text,
 * <li> MESSAGE_TYPE string(4),
 * <li> FIELD_TYPE int,
 * <li> COLOR string(7),
 * </ul>
 */
class AnswerTable extends \Bitrix\Main\Entity\DataManager
{
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
     * @param array $id Answer IDs.
     * @param mixed $increment True - increment, false - decrement, integer - exact value.
     * @return void
     */
    public static function setCounter(array $id, $increment = true)
    {
    }
}
class Answer
{
    public static $storage = array();
}