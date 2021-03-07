<?php

/**
 * Note: usually in phpDoc blocks for methods listed not all exceptions, 
 * that can be throwed by them.
 * 
 * @access public
 */
interface ILearnLesson
{
    /**
     * WARNING: second param ($isCourse) must be always set to FALSE, because
     * it's is for internal use only. If you want to create course, use
     * CCourse::Add instead.
     * 
     * Creates new lesson
     *
     * WARNING: this method terminates (by die()/exit()) current execution flow
     * when SQL server error occured. It's due to bug in CDatabase::Insert() in main
     * module (version info:
     *    define("SM_VERSION","11.0.12");
     *    define("SM_VERSION_DATE","2012-02-21 17:00:00"); // YYYY-MM-DD HH:MI:SS
     * )
     *
     * @param array of pairs field => value for new lesson. Allowed fields are ACTIVE,
     * ACTIVE, true by default, available values are: true/false
     * NAME, mustn't be omitted
     * CODE, NULL by default
     * PREVIEW_PICTURE, NULL by default, available value is array ('name' => ..., 
     *     'size' => ..., 'tmp_name' => ..., 'type' => ..., 'del' => ...)
     * PREVIEW_TEXT, NULL by default
     * PREVIEW_TEXT_TYPE, 'text' by default, available values are: 'text', 'html'
     * DETAIL_PICTURE, NULL by default, available value is array ('name' => ..., 
     *     'size' => ..., 'tmp_name' => ..., 'type' => ..., 'del' => ...)
     * DETAIL_TEXT, NULL by default
     * DETAIL_TEXT_TYPE, 'text' by default, available values are: 'text', 'html', 'file' (filename in LAUNCH)
     * LAUNCH, NULL by default
     * 
     * @param bool flag of course. If FALSE (default) lesson is not course,
     *        if TRUE created lesson will be the course (in this case arguments
     *        $parentLessonId and $arProperties are ignored, and $arFields
     *        can contain additional fields (any can be omitted):
     *        - SORT or COURSE_SORT: integer, 500 by default, sort order of courses. CORSE_SORT overrides SORT
     *        - ACTIVE_FROM: datetime, NULL by default
     *        - ACTIVE_TO: datetime, NULL by default
     *        - RATING: string (1 char): 'Y' / 'N' / NULL, 'N' by default
     *        - RATING_TYPE: string, allowed values: NULL, "like", "standart_text", 
     *           "like_graphic", "standart", NULL by default
     *        - SCORM: string (1 char), 'N' by default
     *        ).
     * @param integer/bool id of immediate parent lesson. Default value is TRUE,
     *        what means "no immediate parent".
     * @param array of properties in relation to
     *        parent lesson: array ('SORT' => sort_order)
     *
     * @throws LearnException with errcodes bit set (one of):
     *         - LearnException::EXC_ERR_GN_CREATE,
     *         - LearnException::EXC_ERR_GN_CHECK_PARAMS,
     *         - LearnException::EXC_ERR_GN_FILE_UPLOAD
     * Also can throws other exceptions or exceptions' codes.
     *
     * @return integer id of created lesson (if course was created, 
     *         for get id of course method GetLinkedCourse() must be used)
     */
    public static function Add($arFields, $isCourse = \false, $parentLessonId = \true, $arProperties = array('SORT' => 500));
    /**
     * Changes lesson's data
     *
     * WARNING: this method terminates (by die()/exit()) current execution flow
     * when SQL server error occured. It's due to bug in CDatabase::Update() in main
     * module (version info:
     *    define("SM_VERSION","11.0.12");
     *    define("SM_VERSION_DATE","2012-02-21 17:00:00"); // YYYY-MM-DD HH:MI:SS
     * )
     *
     * @param integer id of node to be updated
     * @param array of pairs field => value for lesson
     *        If lesson is the course, additional fields maybe set:
     *        - SORT or COURSE_SORT: integer, sort order of courses. CORSE_SORT overrides SORT
     *        - ACTIVE_FROM: datetime
     *        - ACTIVE_TO: datetime
     *        - RATING: string (1 char): 'Y' / 'N' / NULL
     *        - RATING_TYPE: string, allowed values: NULL, "like", "standart_text", 
     *           "like_graphic", "standart"
     *        - SCORM: string (1 char)
     *        ).
     *
     * @throws LearnException with errcodes bit set (one of):
     *         - LearnException::EXC_ERR_GN_UPDATE,
     *         - LearnException::EXC_ERR_GN_CHECK_PARAMS,
     *         - LearnException::EXC_ERR_GN_FILE_UPLOAD
     * Also can throws other exceptions or exceptions' codes
     */
    public static function Update($id, $arFields);
    /**
     * Removes lesson and all relations from/to it.
     *
     * @param integer/array. If not array => param interpreted as id of lesson to be removed.
     * If array => param interpreted as array of params. Available params are:
     * - 'lesson_id' - integer. Id of lesson to be removed.
     * - 'simulate' - boolean, false by default. If true => nothing will be writed to DB.
     * - 'check_permissions' - boolean, true by default
     * - 'user_id' - integer. User_id for which permissions will be checked, -1 by 
     * default, which means 'current logged user'
     * (it's means 'current user')
     *
     * @throws LearnException with errcode bit set LearnException::EXC_ERR_GN_REMOVE,
     *         also errmsg === 'EA_NOT_EXISTS' if there is wasn't node with this id.
     */
    public static function Delete($id);
    /**
     * Detach the given lesson from all parents and recursively remove descendants, excepts
     * descendants, that have ancestors outside of descendants of the given lesson. Such
     * lessons will not be removed, but will be unlinked from lessons, which will be really 
     * removed.
     *
     * @param integer/array. If not array => param interpreted as id of lesson to be removed.
     * If array => param interpreted as array of params. Available params are:
     * - 'lesson_id' - integer. Id of lesson to be removed.
     * - 'simulate' - boolean, false by default. If true => nothing will be writed to DB.
     * - 'check_permissions' - boolean, true by default
     * - 'user_id' - integer. User_id for which permissions will be checked, -1 by default 
     * (it's means 'current user')
     */
    public static function DeleteRecursiveLikeHardlinks($id);
    /**
     * WARNING: don't use this function, it's for internal use only.
     * 
     * @param integer id of node to be getted
     *
     * @throws LearnException with errcode bit set LearnException::EXC_ERR_GN_GETBYID.
     *         Messages can be: 'EA_PARAMS', 'EA_ACCESS_DENIED',
     *         'EA_SQLERROR', 'EA_NOT_EXISTS'.
     * 
     * @access private
     *
     * @return array of properties for node with $id
     */
    public static function GetByIDAsArr($id);
    /**
     * @throws LearnException with error bit set EXC_ERR_ALL_PARAMS 
     * @return CDBResult
     */
    public static function GetByID($id);
    /**
     * @param array order in format: array('FIELD_NAME' => '#sort_order#' [, ...]), 
     * where #sort_order# is 'ASC' or 'DESC'
     * 
     * @param array filter in format: array('???FIELD_NAME' => 'value' [, ...]),
     * where ??? can be one of (without double quotes):
     * "!" - not equals
     * "<" - less than value
     * "<=" - less than or equal to value
     * ">" - greater than value
     * ">=" - greater than or equal to value
     * 
     * Additionally available fields (not presented in data, but 
     * can be used for filter): DATE_ACTIVE_TO, DATE_ACTIVE_FROM, ACTIVE_DATE.
     * 
     * @example shows lessons with LESSON_ID >= 100, and DETAIL_TEXT_TYPE != 'html',
     * sorted by NAME ascending, than by LESSON_ID descending.
     * 
     * <?php
     * $arOrder = array ('NAME' => 'ASC', 'LESSON_ID' => 'DESC');
     * $arFilter = array ('!DETAIL_TEXT_TYPE' => 'html', '>=LESSON_ID' => 100);
     * 
     * $rc = ClassName::GetList($arOrder, $arFilter);
     * while (($data = $rc->Fetch()) !== false)
     *    var _dump ($data);
     * 
     * @throws LearnException with error bit set EXC_ERR_ALL_PARAMS 
     * @return CDBResult each element of which can contains 
     * COURSE_SORT (only if lesson is course)
     */
    public static function GetList($arOrder = array(), $arFilter = array());
    /**
     * @param int id of child lesson
     * @param array order (see format in comment for ThisClass::GetList())
     * @param array filter (see format in comment for ThisClass::GetList())
     * @param array list of fields to be selected. If empty => selects all fields.
     * 
     * @throws LearnException with error bit set EXC_ERR_ALL_PARAMS 
     * @return CDBResult
     */
    public static function GetListOfImmediateParents($lessonId, $arOrder = array(), $arFilter = array(), $arSelectFields = array());
    /**
     * @param int id of parent lesson
     * @param array order (see format in comment for ThisClass::GetList())
     * @param array filter (see format in comment for ThisClass::GetList())
     * @param array list of fields to be selected. If empty => selects all fields.
     * 
     * @throws LearnException with error bit set EXC_ERR_ALL_PARAMS 
     * @return CDBResult each element contains EDGE_SORT - the sort index
     * of LESSON_ID in relation to parent lesson given in first argument
     * to this method.
     */
    public static function GetListOfImmediateChilds($lessonId, $arOrder = array(), $arFilter = array(), $arSelectFields = array());
    /**
     * Lists immediate parents.
     *
     * @param integer id of lesson
     *
     * @return array of immediate parents (empty array if there is no parents)
     *
     * @example
     * <?php
     * $arParents = ThisClass::ListImmediateNeighbours (1);
     * var _dump ($arParents);
     * ?>
     *
     * output:
     * array(2) {
     *   [0]=>
     *   array(4) {
     *     ["PARENT_LESSON"]=>
     *     int(1)
     *     ["CHILD_LESSON"]=>
     *     int(2)
     *     ["SORT"]=>
     *     int(500)
     *   }
     *   [1]=>
     *   array(4) {
     *     ["PARENT_LESSON"]=>
     *     int(4)
     *     ["CHILD_LESSON"]=>
     *     int(1)
     *     ["SORT"]=>
     *     int(500)
     *   }
     * }
     *
     */
    public static function ListImmediateParents($lessonId);
    /**
     * Lists immediate childs.
     *
     * @param integer id of lesson
     *
     * @return array of immediate childs (empty array if there is no childs)
     * 
     * @see example for ListImmediateParents()
     */
    public static function ListImmediateChilds($lessonId);
    /**
     * Lists immediate neighbours.
     *
     * @param integer id of lesson
     *
     * @return array of immediate neighbours (empty array if there is no neighbours)
     * 
     * @see example for ListImmediateParents()
     */
    public static function ListImmediateNeighbours($lessonId);
    /**
     * Gets id of course corresponded to given lesson
     * @param integer id of lesson
     * @throws LearnException with error bit set (one of):
     *         - LearnException::EXC_ERR_ALL_GIVEUP
     *         - LearnException::EXC_ERR_ALL_LOGIC
     * @return integer/bool id of linked (corresponded) course or 
     *         FALSE if there is no course corresponded to the lesson.
     */
    public static function GetLinkedCourse($lessonId);
    /**
     * Build tree of lessons with the given root.
     * WARNING: tree build algorithm skips duplicated lessons, so
     * if there is some duplicates lessons, only one of them
     * will be in resulted tree.
     * 
     * @param integer id of root lesson
     * @param array order (by default: array('EDGE_SORT' => 'asc'))
     * @param array Filter for lessons
     * @param bool public prohibition mode flag. If set to TRUE, than all 
     * 		lessons (and they descendants) that are public prohibited in context 
     * 		of a course with lesson_id == $lessonId will be skipped during 
     * 		tree building.
     * @return object of type CLearnLessonTree
     */
    public static function GetTree($lessonId, $arOrder = array('EDGE_SORT' => 'asc'), $arFilter = array(), $publishProhibitionMode = \true);
    /**
     * Link two lessons from $parentLessonId to $childLessonId
     *
     * @param int $parentLessonId
     * @param int $childLessonId
     * @param array of properties of the link. Currently available properties:
     *    - 'SORT', integer
     * All properties must be set.
     *
     * @throws Exception LearnException with code error bit set LearnException::EXC_ERR_GR_LINK
     */
    public static function RelationAdd($parentLessonId, $childLessonId, $arProperties);
    /**
     * Update parametres of relation between two lessons
     *
     * @param int $parentLessonId
     * @param int $childLessonId
     * @param array of properties of the link. Currently available properties:
     *    - 'SORT', integer
     *
     * @throws Exception LearnException with code error bit set LearnException::EXC_ERR_GR_SET_PROPERTY
     */
    public static function RelationUpdate($parentLessonId, $childLessonId, $arProperties);
    /**
     * Get parametres of relation between two lessons
     *
     * @param int $parentLessonId
     * @param int $childLessonId
     * @return array of properties of the link. Currently available properties:
     *    - 'SORT', integer
     *
     * @throws Exception LearnException with code error bit set LearnException::EXC_ERR_GR_GET_PROPERTY
     */
    public static function RelationGet($parentLessonId, $childLessonId);
    /**
     * Remove relation from $parentLessonId to $childLessonId
     *
     * @param int $parentLessonId
     * @param int $childLessonId
     *
     * @throws Exception LearnException with code error bit set LearnException::EXC_ERR_GR_UNLINK
     *         if relation isn't exists => message of exception === 'EA_NOT_EXISTS'
     */
    public static function RelationRemove($parentLessonId, $childLessonId);
    /**
     * Counts how much immediate childs given lesson has.
     * 
     * @param int id of lesson
     * 
     * @return int count of immediate childs for given lesson id.
     */
    public static function CountImmediateChilds($lessonId);
    /**
     * Lists all pathes to given lesson. Given lesson not included in pathes.
     * 
     * @param int lesson id to be started from
     * @param int/bool id of breakpoint-lesson (root lesson).
     * It means, this lesson will be interpreted as parentless lesson.
     * If param is false (it's by default) - than this argument will be ignored.
     * @param int/bool id of pre-breakpoint-lesson.
     * It means, this lesson will not be included in pathes (all childs of this
     * lesson will be interpreted as parentless lessons).
     * If param is false (it's by default) - than this argument will be ignored.
     * @param array of edges to be ignored (interpreted as non-existing).
     * array must be array of such arrays: ('PARENT_LESSON' => #id#, 'CHILD_LESSON' => #id#)
     * 
     * @return array of objects CLearnPath
     */
    public static function GetListOfParentPathes($lessonId, $breakOnLessonId = \false, $breakBeforeLessonId = \false, $arIgnoreEdges = array());
    /**
     * Checks for probition of publishing for given lesson in context of given course.
     * 
     * @param int lesson id to be checked for publish prohibition
     * @param int lesson id in context of which check. Must corresponds to course.
     * 
     * @return bool true - if lesson is prohibited to be published in this course, otherwise - false.
     */
    public static function IsPublishProhibited($lessonId, $contextCourseLessonId);
    /**
     * 
     * 
     * @param int lesson id for publish (un)prohibition
     * @param int lesson id in context of which publish (un)prohibition will be done
     * @param bool if true - lesson will be prohibited for publish. If false - prohibition will be removed.
     * 
     * @return bool if true - prohibition status changed, false - otherwise. If status not changed - it isn't error,
     * it means that status to be setted === status, that already set for lesson.
     */
    public static function PublishProhibitionSetTo($lessonId, $contextCourseLessonId, $isProhibited);
}
class CLearnLesson implements \ILearnLesson
{
    const GET_LIST_ALL = 0x0;
    // List any lessons
    const GET_LIST_IMMEDIATE_CHILDS_OF = 0x1;
    // List only immediate childs of requested parent_lesson_id
    const GET_LIST_IMMEDIATE_PARENTS_OF = 0x2;
    // List only immediate parents of requested parent_lesson_id
    // PUBLISH_PROHIBITION_PURGE_* constants can be ORed
    // Purge all prohibitions where given lessonId is contextCourse
    const PUBLISH_PROHIBITION_PURGE_ALL_LESSONS_IN_COURSE_CONTEXT = 0x1;
    // Purge all prohibitions for lessonId in all contextCourses
    const PUBLISH_PROHIBITION_PURGE_LESSON_IN_ALL_COURSE_CONTEXT = 0x2;
    // Purge all prohibitions for given lessonId (as course, and as prohibited lesson)
    const PUBLISH_PROHIBITION_PURGE_BOTH = 0x3;
    public static final function Add($arFields, $isCourse = \false, $parentLessonId = \true, $arProperties = array('SORT' => 500), $isCheckPermissions = \true, $checkPermissionsForUserId = -1)
    {
    }
    protected static function _ExtractAdditionalCourseFields(&$arFields)
    {
    }
    /**
     * Canonize and checks additional params when adding course
     * @throws LearnException with error bit set LearnException::EXC_ERR_ALL_PARAMS
     * @return array of canonized params
     */
    protected static function _CanonizeAndCheckAdditionalParamsForAddCourse($arFields, $forUpdate = \false)
    {
    }
    public static final function Update($id, $arFields)
    {
    }
    protected static function _funcDelete_ParseOptions($lesson_id)
    {
    }
    public static final function DeleteRecursiveLikeHardlinks($in_data)
    {
    }
    public static final function Delete($lesson_id)
    {
    }
    public static final function GetByID($id)
    {
    }
    public static final function GetByIDAsArr($id)
    {
    }
    public static final function GetLinkedCourse($lessonId)
    {
    }
    /**
     * This function is for internal use only. It's not a part of public API.
     * 
     * @access private
     */
    public static final function GetCourseToLessonMap($bRefreshCache = \false)
    {
    }
    protected static function GetCourseToLessonMap_ReloadCache()
    {
    }
    protected static function GetCourseToLessonMap_LoadFromDB()
    {
    }
    /**
     * WARNING: don't use this method, it's for internal use only
     * 
     * Convert lesson to course (lesson will stay exists, but new course 
     * binded to lesson will be created)
     * 
     * WARNING: this method terminates (by die()/exit()) current execution flow
     * when SQL server error occured. It's due to bug in CDatabase::Update() in main
     * module (version info:
     *    define("SM_VERSION","11.0.12");
     *    define("SM_VERSION_DATE","2012-02-21 17:00:00"); // YYYY-MM-DD HH:MI:SS
     * )
     *
     * @param int $lessonId
     * @param array of pairs field => value for course additional params. Allowed are:
     *        - SORT or COURSE_SORT: integer, 500 by default, sort order of courses. CORSE_SORT overrides SORT
     *        - ACTIVE_FROM: datetime, NULL by default
     *        - ACTIVE_TO: datetime, NULL by default
     *        - RATING: string (1 char), 'N' by default
     *        - RATING_TYPE: string, allowed values: NULL, "like", "standart_text", 
     *           "like_graphic", "standart", NULL by default
     *        - SCORM: string (1 char), 'N' by default
     * 
     * @return int course id
     * 
     * @access private
     */
    protected static function BecomeCourse($lessonId, $arFields)
    {
    }
    /**
     * WARNING: don't use this method, it's for internal use only
     * 
     * Convert course to non-course lesson (course will be removed,
     * but lesson will stay exists)
     * 
     * WARNING: this method terminates (by die()/exit()) current execution flow
     * when SQL server error occured. It's due to bug in CDatabase::Update() in main
     * module (version info:
     *    define("SM_VERSION","11.0.12");
     *    define("SM_VERSION_DATE","2012-02-21 17:00:00"); // YYYY-MM-DD HH:MI:SS
     * )
     *
     * @param int $courseId (returned by GetLinkedCourse($lessonId) )
     * 
     * @access private
     */
    protected static function CourseBecomeLesson($courseId)
    {
    }
    /**
     * @throws LearnException with error bit set LearnException::EXC_ERR_ALL_LOGIC
     *         and errmessage "EA_PARAMS", if any of args isn't of integer type
     *         or can't be strictly casted to integer.
     */
    protected static function _EnsureArgsStrictlyCastableToIntegers()
    {
    }
    public static final function RelationAdd($parentLessonId, $childLessonId, $arProperties)
    {
    }
    public static final function RelationUpdate($parentLessonId, $childLessonId, $arProperties)
    {
    }
    public static final function RelationGet($parentLessonId, $childLessonId)
    {
    }
    public static final function RelationRemove($parentLessonId, $childLessonId)
    {
    }
    public static final function ListImmediateParents($lessonId)
    {
    }
    public static final function ListImmediateChilds($lessonId)
    {
    }
    public static final function ListImmediateNeighbours($lessonId)
    {
    }
    protected static function GetListUni($arOrder = array(), $arFilter = array(), $arSelectFields = array(), $mode = self::GET_LIST_ALL, $lessonId = -1, $arNavParams = array())
    {
    }
    public static final function GetList($arOrder = array(), $arFilter = array(), $arSelectFields = array(), $arNavParams = array())
    {
    }
    public static final function GetListOfImmediateChilds($lessonId, $arOrder = array(), $arFilter = array(), $arSelectFields = array(), $arNavParams = array())
    {
    }
    public static final function GetListOfImmediateParents($lessonId, $arOrder = array(), $arFilter = array(), $arSelectFields = array(), $arNavParams = array())
    {
    }
    public static final function GetTree($lessonId, $arOrder = array('EDGE_SORT' => 'asc'), $arFilter = array(), $publishProhibitionMode = \true, $arSelectFields = array())
    {
    }
    /**
     * @access protected
     * @throws LearnException with error bit set EXC_ERR_ALL_PARAMS 
     */
    protected static function GetFilter($arFilter = array(), $mode)
    {
    }
    public static final function CountImmediateChilds($lessonId)
    {
    }
    /**
     * This function is DEPRECATED
     * 
     * Get lesson id of lesson, previously was chapter (before convertion to new data model.
     * 
     * WARNING: This function is for backward compatibility of old-style 
     * links to courses, chapters, lessons resolving in components.
     * 
     * Don't use it in new projects, when there is no old-style links.
     * 
     * @access public
     */
    public static final function LessonIdByChapterId($chapterId)
    {
    }
    /**
     * @access private
     */
    public static final function GetListOfAncestors($lessonId, $stopAtLessonId = \false, $stopBeforeLessonId = \false, $arIgnoreEdges = array())
    {
    }
    /**
     * @access public
     */
    public static final function GetListOfParentPathes($lessonId, $breakOnLessonId = \false, $breakBeforeLesson = \false, $arIgnoreEdges = array())
    {
    }
    protected static function GetListOfParentPathesRecursive($arPathes, &$arAlreadyProcessedLessons, $arIgnoreEdges = array())
    {
    }
    public static final function IsPublishProhibited($in_lessonId, $in_contextCourseLessonId)
    {
    }
    public static final function PublishProhibitionSetTo($in_lessonId, $in_contextCourseLessonId, $in_isProhibited)
    {
    }
    /**
     * 
     * @param int lesson id
     * @param int purge mode (PUBLISH_PROHIBITION_PURGE_ALL_LESSONS_IN_COURSE_CONTEXT, 
     * PUBLISH_PROHIBITION_PURGE_LESSON_IN_ALL_COURSE_CONTEXT, 
     * PUBLISH_PROHIBITION_PURGE_BOTH)
     */
    protected static function PublishProhibitionPurge($in_lessonId, $in_purgeMode)
    {
    }
    /**
     * Cleanup publish prohibitions to be orphaned on relation remove.
     * 
     * @param int $parentLessonId of relation to be removed
     * @param int $childLessonId of relation to be removed
     */
    protected static function PublishProhibitionPurge_OnBeforeRelationRemove($in_parentLessonId, $in_childLessonId)
    {
    }
}