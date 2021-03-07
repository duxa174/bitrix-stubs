<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage learning
 * @copyright 2001-2013 Bitrix
 */
/*
	table definition:

	CREATE TABLE b_learn_groups_lesson (
		LEARNING_GROUP_ID int(11) NOT NULL DEFAULT '0',
		LESSON_ID int(11) NOT NULL DEFAULT '0',
		DELAY int(11) NOT NULL DEFAULT '0',
		PRIMARY KEY (LEARNING_GROUP_ID, LESSON_ID),
		KEY LESSON_ID (LESSON_ID)
	);
*/
class CLearningGroupLesson
{
    /**
     * Creates new learning group <-> lesson pair
     *
     * @param array $arFields
     *
     * @return bool true/false (false - on error)
     */
    public static function add($arFields)
    {
    }
    public static function update($arFields)
    {
    }
    /**
     * Get list of existing learning group <-> lesson pairs
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param array $arSelect
     * @param array $arNavParams
     *
     * @return CDBResult
     */
    public static function getList($arOrder, $arFilter, $arSelect = array(), $arNavParams = array())
    {
    }
    /**
     * Removes existing learning group <-> lesson pairs
     *
     * @param int $groupId
     *
     * @return bool false on error, or true - if no errors detected
     */
    public static function deleteByGroup($groupId)
    {
    }
    /**
     * Removes existing learning group <-> lesson pairs
     *
     * @param int $lessonId
     *
     * @return bool false on error, or true - if no errors detected
     */
    public static function deleteByLesson($lessonId)
    {
    }
    /**
     * Removes existing learning group <-> lesson pairs
     *
     * @param int $lessonId
     * @param int $groupId
     *
     * @return bool false on error, or true - if no errors detected
     */
    public static function delete($lessonId, $groupId)
    {
    }
    public static function getDelays($learningGroupId, $arLessonsIds)
    {
    }
    public static function setDelays($learningGroupId, $arDelays)
    {
    }
    private static function checkFields($arFields)
    {
    }
    private static function getFilter($arFilter)
    {
    }
    public static function onAfterLearningGroupDelete($groupId)
    {
    }
}