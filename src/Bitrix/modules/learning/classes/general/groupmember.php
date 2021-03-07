<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage learning
 * @copyright 2001-2013 Bitrix
 */
/*
	table definition:

	CREATE TABLE b_learn_groups_member (
		LEARNING_GROUP_ID int(11) NOT NULL DEFAULT '0',
		USER_ID int(11) NOT NULL DEFAULT '0',
		PRIMARY KEY (LEARNING_GROUP_ID, USER_ID),
		KEY USER_ID (USER_ID)
	);
*/
class CLearningGroupMember
{
    /**
     * Creates new learning group <-> member pair
     *
     * @param array $arFields
     *
     * @return bool true/false (false - on error)
     */
    public static function add($arFields)
    {
    }
    /**
     * Get list of existing learning group <-> member pairs
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
     * Removes existing learning group <-> member pairs
     *
     * @param int $groupId
     *
     * @return bool false on error, or true - if no errors detected
     */
    public static function deleteByGroup($groupId)
    {
    }
    /**
     * Removes existing learning group <-> member pairs
     *
     * @param int $userId
     *
     * @return bool false on error, or true - if no errors detected
     */
    public static function deleteByUser($userId)
    {
    }
    /**
     * Removes existing learning group <-> member pairs
     *
     * @param int $userId
     * @param int $groupId
     *
     * @return bool false on error, or true - if no errors detected
     */
    public static function delete($userId, $groupId)
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