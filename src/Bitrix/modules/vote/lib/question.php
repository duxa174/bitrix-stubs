<?php

namespace Bitrix\Vote;

/**
 * Class VoteTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ACTIVE bool mandatory default 'Y',
 * <li> TIMESTAMP_X datetime,
 * <li> VOTE_ID int,
 * <li> C_SORT int,
 * <li> COUNTER int,
 * <li> QUESTION text,
 * <li> QUESTION_TYPE string(4),
 * <li> IMAGE_ID int,
 * <li> DIAGRAM bool mandatory default 'Y',
 * <li> DIAGRAM_TYPE string(10) mandatory default 'histogram' || 'circle',
 * <li> REQUIRED bool mandatory default 'N',
 * </ul>
 */
class QuestionTable extends \Bitrix\Main\Entity\DataManager
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
     * @param array $id Question IDs.
     * @param mixed $increment True - increment, false - decrement, integer - exact value.
     * @return void
     */
    public static function setCounter(array $id, $increment = true)
    {
    }
}
class Question
{
    public static $storage = array();
}