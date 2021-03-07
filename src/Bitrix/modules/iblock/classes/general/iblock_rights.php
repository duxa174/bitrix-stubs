<?php

class CIBlockRights
{
    const GROUP_CODE = 1;
    const RIGHT_ID = 2;
    const TASK_ID = 3;
    const ANY_OPERATION = 1;
    const ALL_OPERATIONS = 2;
    const RETURN_OPERATIONS = 4;
    /** @var string Public reading */
    public const PUBLIC_READ = 'R';
    /** @var string Admin access */
    public const FULL_ACCESS = 'X';
    protected $IBLOCK_ID = 0;
    protected $id = 0;
    protected static $arLetterToTask = \null;
    protected static $arLetterToOperations = \null;
    function __construct($IBLOCK_ID)
    {
    }
    function GetIBlockID()
    {
    }
    function GetID()
    {
    }
    function _entity_type()
    {
    }
    function _self_check()
    {
    }
    public static function Post2Array($ar)
    {
    }
    private static function initTaskLetters()
    {
    }
    static function LetterToTask($letter = '')
    {
    }
    static function TaskToLetter($task = 0)
    {
    }
    static function LetterToOperations($letter = '')
    {
    }
    function ConvertGroups($arGroups)
    {
    }
    public static function GetRightsList($bTitle = \true)
    {
    }
    function GetGroups($arOperations = \false, $opMode = \false)
    {
    }
    function GetList($arFilter)
    {
    }
    function GetRights($arOptions = array())
    {
    }
    function DeleteAllRights()
    {
    }
    function Recalculate()
    {
    }
    function ChangeParents($arOldParents, $arNewParents)
    {
    }
    function _get_parent_object($id)
    {
    }
    function SetRights($arRights)
    {
    }
    function _add($GROUP_CODE, $bInherit, $TASK_ID, $XML_ID)
    {
    }
    function _update($RIGHT_ID, $GROUP_CODE, $bInherit, $TASK_ID)
    {
    }
    function _delete($RIGHT_ID)
    {
    }
    function _storage_object()
    {
    }
    static function UserHasRightTo($IBLOCK_ID, $ID, $permission, $flags = 0)
    {
    }
    /**
     * @param CIBlockRights $obRights
     * @param array|integer $ID
     * @param string $permission
     * @param integer $flags
     * @return array|boolean
     */
    static function _check_if_user_has_right($obRights, $ID, $permission, $flags = 0)
    {
    }
    static function _mk_result($ID, $arOperations, $bAllow, $flags)
    {
    }
    static function GetUserOperations($arID, $USER_ID = 0)
    {
    }
    public static function setGroupRight($groupId, $iblockType, $letter, $iblockId = 0)
    {
    }
}
class CIBlockSectionRights extends \CIBlockRights
{
    function __construct($IBLOCK_ID, $SECTION_ID)
    {
    }
    function _self_check()
    {
    }
    function _entity_type()
    {
    }
    function _storage_object()
    {
    }
    function GetList($arFilter)
    {
    }
    function GetRights($arOptions = array())
    {
    }
    function DeleteAllRights()
    {
    }
    static function UserHasRightTo($IBLOCK_ID, $ID, $permission, $flags = 0)
    {
    }
    static function GetUserOperations($arID, $USER_ID = 0)
    {
    }
}
class CIBlockElementRights extends \CIBlockRights
{
    function __construct($IBLOCK_ID, $ELEMENT_ID)
    {
    }
    function _self_check()
    {
    }
    function _entity_type()
    {
    }
    function _storage_object()
    {
    }
    function GetList($arFilter)
    {
    }
    function GetRights($arOptions = array())
    {
    }
    function DeleteAllRights()
    {
    }
    static function UserHasRightTo($IBLOCK_ID, $ID, $permission, $flags = 0)
    {
    }
    static function GetUserOperations($arID, $USER_ID = 0)
    {
    }
}
class CIBlockRightsStorage
{
    protected $IBLOCK_ID = 0;
    protected $SECTION_ID = 0;
    protected $ELEMENT_ID = 0;
    protected $arSection = \null;
    function __construct($IBLOCK_ID, $SECTION_ID, $ELEMENT_ID)
    {
    }
    function _set_section($SECTION_ID)
    {
    }
    function _get_section()
    {
    }
    function CountOverWrited($GROUP_CODE)
    {
    }
    function DeleteSelfSet($ID, $TYPE)
    {
    }
    function DeleteChildrenSet($ID, $TYPE)
    {
    }
    function AddSelfSet($RIGHT_ID, $bInherited = \false)
    {
    }
    function AddChildrenSet($RIGHT_ID, $GROUP_CODE, $bInherited)
    {
    }
    function FindParentWithInherit($GROUP_CODE)
    {
    }
    function DeleteRights()
    {
    }
    function CleanUp($bFull = \false)
    {
    }
    function Recalculate()
    {
    }
    public static function OnTaskOperationsChanged($TASK_ID, $arOld, $arNew)
    {
    }
    public static function OnGroupDelete($GROUP_ID)
    {
    }
    public static function OnUserDelete($USER_ID)
    {
    }
}