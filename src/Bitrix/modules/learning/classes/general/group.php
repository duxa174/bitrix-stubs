<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage learning
 * @copyright 2001-2013 Bitrix
 */
/*
	$arFields:

	ID int(11) unsigned not null auto_increment,
	ACTIVE char(1) not null default 'Y',
	TITLE varchar(255) not null default ' ',
	CODE varchar(50) NULL DEFAULT NULL,
	SORT int(11) not null default '500',
	ACTIVE_FROM datetime,
	ACTIVE_TO datetime,
	COURSE_LESSON_ID INT NOT NULL,
	PRIMARY KEY(ID)
*/
class CLearningGroup
{
    /**
     * Creates new learning group
     * 
     * @param array $arFields
     * 
     * @return mixed (int) id of just created group OR (bool) false on error
     */
    public static function add($arFields)
    {
    }
    /**
     * Updates existing learning group
     * 
     * @param int $id
     * @param array $arFields
     * 
     * @return bool false on error, or true - if no errors detected
     */
    public static function update($id, $arFields)
    {
    }
    /**
     * Get list of existing learning groups
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
     * Removes existing learning group
     * 
     * @param int $groupId
     * 
     * @return bool false on error, or true - if no errors detected
     */
    public static function delete($groupId)
    {
    }
    private static function CheckFields($arFields, $id = \false)
    {
    }
    private static function getFilter($arFilter)
    {
    }
}