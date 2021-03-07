<?php

interface ILearnAccessInterface
{
    /**
     * @param int operations code (taken from sum of constants with prefix OP_)
     * @param bool flag isUseCache (can be omitted, false by default)
     * @param string prefix for tables acronyms (can be omitted)
     * 
     * @return string #sql_code# for usage in "SELECT ... WHERE LESSON_ID IN (#sql_code#)"
     * 
     * @example
     * $o = CLearnAccess::GetInstance ($someUserId);
     * $sql = $o->SQLClauseForAccessibleLessons (CLearnAccess::OP_LESSON_READ + CLearnAccess::OP_LESSON_WRITE);
     * // Selects only lessons, which are accessible by user with id = $someUserId
     * $rc = $DB->Query ("SELECT NAME FROM b_learn_lesson WHERE ACTIVE = 'Y' AND ID IN (" . $sql . ")");
     */
    public function SQLClauseForAccessibleLessons($in_bitmaskOperations, $isUseCache = \false, $lessonId = 0, $in_prfx = 'DEFPRFX');
    public static function GetNameForTask($taskId);
    /**
     * @return array of possible rights. Example of array item:
     *			$arPossibleRights['ID'] = array(
     *				'name'              => 'NAME',
     *				'name_human'        => $nameUpperCase,
     *				'sys'               => 'SYS',
     *				'description'       => 'DESCRIPTION',
     *				'description_human' => $descrUpperCase,
     *				'binding'           => 'BINDING'
     *				);
     */
    public static function ListAllPossibleRights();
    /**
     * This function include CR to access symbols when checks base rights.
     * @param int bitmask of operations (constants self::OP_...)
     * @param bool use cache
     * 
     * @return bool true - if there is access to given operations
     */
    public function IsBaseAccessForCR($in_bitmaskRequested, $isUseCache = \false);
    /**
     * @param int bitmask of operations (constants self::OP_...)
     * @param bool use cache (false be default)
     * @param bool does include CR to check? (false by default)
     * 
     * @return bool true - if there is access to given operations
     */
    public function IsBaseAccess($in_bitmaskRequested, $isUseCache = \false, $checkForAuthor = \false);
    /**
     * @param array $arPermPairs, for example: array ('CR' => 4, 'U2' => '1', ...).
     * All unlisted access symbols ("subjects") will be removed.
     */
    public function SetBasePermissions($in_arPermPairs);
    /**
     * @return array of base for all lessons permissions
     * @example
     * <?php
     * $oAccess = CLearnAccess::getInstance ($USER->GetID());
     * $arPermPairs = $oAccess->GetLessonPermissions ($some_lesson_id);
     * ?>
     * $arPermPairs now contains
     * array ('AU' => 1, 'U12' => '3', 'CR' => 2, ...)
     */
    public function GetBasePermissions();
    /**
     * @return array of lesson's permissions
     * @example
     * <?php
     * $oAccess = CLearnAccess::getInstance ($USER->GetID());
     * $arPermPairs = $oAccess->GetLessonPermissions ($some_lesson_id);
     * ?>
     * $arPermPairs now contains
     * array ('AU' => 1, 'U12' => '3', 'CR' => 2, ...)
     */
    public function GetLessonPermissions($in_lessonId);
    /**
     * @param array of permissions.
     * @example
     * $arPermissions = array(
     *    1437 => array('CR' => 2, 'AU' => 1),	// lesson_id = 1437, task_id = 2 and 1
     *    1258 => array('AU' => 1),  // lesson_id = 1258, task_id = 1
     *    178  => array()	// for this lesson will be cleaned all rights
     * );
     * $userId = $USER->GetID();
     * $oAccess = CLearnAccess::getInstance ($userId);
     * $oAccess->SetLessonsPermissions ($arPermissions);
     * 
     */
    public function SetLessonsPermissions($in_arPermissions);
    /**
     * This function checks access rights for user to given lesson. 
     * It's includes checks for base rights (shared for all lessons).
     * 
     * @return bool true - if lesson is accessible by given user for given operations.
     */
    public function IsLessonAccessible($in_lessonId, $in_bitmaskOperations, $isUseCache = \false);
    public function GetAccessibleLessonsList($in_bitmaskOperations, $isUseCache = \false);
    /**
     * @param int id of lesson
     * @param int bitmask of operations (constants self::OP_...)
     * @param bool use cache (false be default)
     * 
     * @return array of symbols, which has access to lesson with given operation bitmask.
     * 
     * @example of returned array: array ('G11', 'U11', 'AU', 'CR')
     */
    public static function GetSymbolsAccessibleToLesson($in_lessonId, $in_bitmaskOperations, $isUseCache = \false);
}
class CLearnAccess implements \ILearnAccessInterface
{
    protected static $instanceOfSelf = array();
    protected static $CAccessLastUpdated = \false;
    protected $userId = \false;
    const OP_LESSON_READ = 0x1;
    const OP_LESSON_CREATE = 0x2;
    const OP_LESSON_WRITE = 0x4;
    const OP_LESSON_REMOVE = 0x8;
    const OP_LESSON_LINK_TO_PARENTS = 0x10;
    const OP_LESSON_UNLINK_FROM_PARENTS = 0x20;
    const OP_LESSON_LINK_DESCENDANTS = 0x40;
    const OP_LESSON_UNLINK_DESCENDANTS = 0x80;
    const OP_LESSON_MANAGE_RIGHTS = 0x100;
    protected static $arOperations = array('lesson_read' => self::OP_LESSON_READ, 'lesson_create' => self::OP_LESSON_CREATE, 'lesson_write' => self::OP_LESSON_WRITE, 'lesson_remove' => self::OP_LESSON_REMOVE, 'lesson_link_to_parents' => self::OP_LESSON_LINK_TO_PARENTS, 'lesson_unlink_from_parents' => self::OP_LESSON_UNLINK_FROM_PARENTS, 'lesson_link_descendants' => self::OP_LESSON_LINK_DESCENDANTS, 'lesson_unlink_descendants' => self::OP_LESSON_UNLINK_DESCENDANTS, 'lesson_manage_rights' => self::OP_LESSON_MANAGE_RIGHTS);
    // prevent creating throughs "new"
    private function __construct($in_userId)
    {
    }
    // prevent clone of object
    private function __clone()
    {
    }
    // prevent wakeup
    private function __wakeup()
    {
    }
    /**
     * @param $in_userId
     * @return CLearnAccess
     */
    public static function GetInstance($in_userId)
    {
    }
    /**
     * If user logged in - get hash for of access symbols for user.
     * If user isn't logged in - get hash of access symbols for not authorized users.
     */
    public static function GetAccessSymbolsHashForSiteUser()
    {
    }
    public static function GetNameForTask($taskId)
    {
    }
    /**
     * @return array of possible rights. Example of array item:
     *			$arPossibleRights['ID'] = array(
     *				'name'              => 'NAME',
     *				'name_human'        => $nameUpperCase,
     *				'sys'               => 'SYS',
     *				'description'       => 'DESCRIPTION',
     *				'description_human' => $descrUpperCase,
     *				'binding'           => 'BINDING'
     *				);
     */
    public static function ListAllPossibleRights()
    {
    }
    public static function GetSymbolsAccessibleToLesson($in_lessonId, $in_bitmaskOperations, $isUseCache = \false)
    {
    }
    /**
     * This function include CR to access symbols when checks base rights.
     * @param int bitmask of operations (constants self::OP_...)
     * @param bool use cache
     * 
     * @return bool true - if there is access to given operations
     */
    public function IsBaseAccessForCR($in_bitmaskRequested, $isUseCache = \false)
    {
    }
    /**
     * @param int bitmask of operations (constants self::OP_...)
     * @param bool use cache
     * @param bool does include CR to check? (false by default)
     * 
     * @return bool true - if there is access to given operations
     */
    public function IsBaseAccess($in_bitmaskRequested, $isUseCache = \false, $checkForAuthor = \false)
    {
    }
    /**
     * @param array $arPermPairs, for example: array ('CR' => 4, 'U2' => '1', ...).
     * All unlisted access symbols ("subjects") will be removed.
     */
    public function SetBasePermissions($in_arPermPairs)
    {
    }
    /**
     * @return array of base for all lessons permissions
     * @example
     * <?php
     * $oAccess = CLearnAccess::getInstance ($USER->GetID());
     * $arPermPairs = $oAccess->GetLessonPermissions ($some_lesson_id);
     * ?>
     * $arPermPairs now contains
     * array ('AU' => 1, 'U12' => '3', 'CR' => 2, ...)
     */
    public function GetBasePermissions()
    {
    }
    /**
     * @return array of lesson's permissions
     * @example
     * <?php
     * $oAccess = CLearnAccess::getInstance ($USER->GetID());
     * $arPermPairs = $oAccess->GetLessonPermissions ($some_lesson_id);
     * ?>
     * $arPermPairs now contains
     * array ('AU' => 1, 'U12' => '3', 'CR' => 2, ...)
     */
    public function GetLessonPermissions($in_lessonId)
    {
    }
    /**
     * @param array of permissions.
     * @example
     * $arPermissions = array(
     *    1437 => array('CR' => 2, 'AU' => 1),	// lesson_id = 1437, task_id = 2 and 1
     *    1258 => array('AU' => 1),  // lesson_id = 1258, task_id = 1
     *    178  => array()	// for this lesson will be cleaned all rights
     * );
     * $userId = $USER->GetID();
     * $oAccess = CLearnAccess::getInstance ($userId);
     * $oAccess->SetLessonsPermissions ($arPermissions);
     * 
     */
    public function SetLessonsPermissions($in_arPermissions)
    {
    }
    public function IsLessonAccessible($in_lessonId, $in_bitmaskOperations, $isUseCache = \false)
    {
    }
    public function GetAccessibleLessonsList($in_bitmaskOperations, $isUseCache = \false, $lessonId = 0)
    {
    }
    /**
     * @param int operations code (taken from sum of constants with prefix OP_)
     * @param bool flag isUseCache (can be omitted, false by default)
     * @param string prefix for tables acronyms (can be omitted)
     * 
     * @return string #sql_code# for usage in "SELECT ... WHERE LESSON_ID IN (#sql_code#)"
     * 
     * @example
     * $o = CLearnAccess::GetInstance ($someUserId);
     * $sql = $o->SQLClauseForAccessibleLessons (CLearnAccess::OP_LESSON_READ + CLearnAccess::OP_LESSON_WRITE);
     * // Selects only lessons, which are accessible by user with id = $someUserId
     * $rc = $DB->Query ("SELECT NAME FROM b_learn_lesson WHERE ACTIVE = 'Y' AND ID IN (" . $sql . ")");
     */
    public function SQLClauseForAccessibleLessons($in_bitmaskOperations, $isUseCache = \false, $lessonId = 0, $in_prfx = 'DEFPRFX')
    {
    }
    protected function GetBitmaskOperationsForAllLessons($arUserAccessSymbols)
    {
    }
    /**
     * @return string of comma-separated operations names
     */
    protected static function ParseOperationsForSQL($in_operations)
    {
    }
    /**
     * @return string of comma-separated access codes, includes AU symbol (if user is authorized)
     */
    protected function GetAccessCodesForSQL($isUseCache = \false)
    {
    }
    /**
     * @return array of access codes, includes AU symbol (if user is authorized)
     */
    protected function GetAccessCodes($isUseCache = \false)
    {
    }
    protected static function Array2CommaSeparatedListForSQL($in_arData)
    {
    }
    protected static function EscapeAndAddLateralQuotes($txt)
    {
    }
    public static function IsLoggedUserCanAccessModuleSettings()
    {
    }
    protected static function StrictlyCastToInteger($var)
    {
    }
}