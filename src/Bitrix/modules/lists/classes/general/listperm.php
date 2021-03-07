<?php

class CListPermissions
{
    const WRONG_IBLOCK_TYPE = -1;
    const WRONG_IBLOCK = -2;
    const LISTS_FOR_SONET_GROUP_DISABLED = -3;
    const ACCESS_DENIED = 'D';
    const CAN_READ = 'R';
    const CAN_BIZPROC = 'U';
    const CAN_WRITE = 'W';
    const IS_ADMIN = 'X';
    /**
     * @param $USER CUser
     * @param $iblock_type_id string
     * @param bool $iblock_id int
     * @param int $socnet_group_id int
     * @return int|string
     */
    public static function CheckAccess($USER, $iblock_type_id, $iblock_id = \false, $socnet_group_id = 0)
    {
    }
    /**
     * @param $USER CUser
     * @param $iblock_type_id string
     * @param $iblock_id int
     * @param $socnet_group_id int
     * @return string
     */
    protected static function _socnet_check($USER, $iblock_type_id, $iblock_id, $socnet_group_id)
    {
    }
    /**
     * @param $USER CUser
     * @param $iblock_type_id string
     * @param $socnet_group_id int
     * @return int|string
     */
    protected static function _socnet_type_check($USER, $iblock_type_id, $socnet_group_id)
    {
    }
    /**
     * @param $USER CUser
     * @param $iblockTypeId string
     * @return string
     */
    protected static function _lists_type_check($USER, $iblockTypeId)
    {
    }
    /**
     * @param $USER CUser
     * @param $iblock_type_id string
     * @param $iblock_id int
     * @return int|string
     */
    protected static function _lists_check($USER, $iblock_type_id, $iblock_id)
    {
    }
    /**
     * @param $iblock_type_id string
     * @param $iblock_id int
     * @return int
     */
    protected static function _iblock_check($iblock_type_id, $iblock_id)
    {
    }
    public static function MergeRights($IBLOCK_TYPE_ID, $DB, $POST)
    {
    }
    /**
     * @param $iblockId int
     * @param $fieldId int
     */
    public static function CheckFieldId($iblock_id, $field_id)
    {
    }
}