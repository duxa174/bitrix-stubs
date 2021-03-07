<?php

class CLearnRenderAdminUnilessonListException extends \Exception
{
    const C_COURSE_UNAVAILABLE = 0x1;
    const C_ACCESS_DENIED = 0x2;
    const C_NEED_SHOW_AUTH_FORM = 0x4;
    const C_ACTION_UPDATE_FAIL = 0x8;
    const C_LOGIC = 0x10;
}
class CLearnRenderAdminUnilessonList
{
    const ListAnyCoursesMode = 1;
    // Courses' list requested
    const ListAnyLessonsMode = 2;
    // Lessons' list requested (without relation to parent)
    const ListChildLessonsMode = 3;
    // Lessons' list requested (with relation to parent)
    // This constants for special values on
    protected $oList, $oFilter;
    protected $LEARNING_RIGHT = \null;
    // is it need?	protected $isInsideCourse = null;
    protected $tableID = 'tbl_unilesson_list';
    protected $arFilter = array();
    // current filter for CLearnLesson::GetList()
    protected $arSortOrder = array('LESSON_ID' => 'asc');
    protected $rsData;
    // list of items
    protected $requestedParentLessonId;
    // $_POST['PARENT_LESSON_ID'] or $_GET['PARENT_LESSON_ID'] or NULL
    protected $listMode;
    // List mode (one of ListAnyCoursesMode, ListAnyLessonsMode, ListChildLessonsMode)
    protected $oAccess;
    protected $contextCourseLessonId = \false;
    protected $search_mode;
    protected $search_retpoint;
    protected $search_mode_type;
    public function __construct()
    {
    }
    public function IsSearchMode()
    {
    }
    public function getSearchMode()
    {
    }
    public function EnsureReadRights()
    {
    }
    protected function EnsureLessonUpdateAccess($lessonID)
    {
    }
    protected function IsLessonUpdateAccess($lessonID)
    {
    }
    protected function EnsureLessonUnlinkAccess($parentLessonId, $childLessonId)
    {
    }
    public function Init()
    {
    }
    public function IsNeedProcessActionsOnList()
    {
    }
    public function ProcessActionsOnList()
    {
    }
    // Must throw exception if access denied
    protected function EnsureLessonDisbandAccess($lessonID)
    {
    }
    // Must throw exception if access denied
    protected function EnsureLessonActivateAccess($lessonID)
    {
    }
    // Must throw exception if access denied
    protected function EnsureLessonDeactivateAccess($lessonID)
    {
    }
    protected function IsListAnyCoursesMode()
    {
    }
    protected function IsListAnyLessonsMode()
    {
    }
    protected function IsListChildLessonsMode()
    {
    }
    protected function IsListMode($mode)
    {
    }
    private function fetchDataFromDb()
    {
    }
    public function FetchData()
    {
    }
    public function BuildList()
    {
    }
    // Build group actions buttons in list
    public function BuildListGroupActionsButton()
    {
    }
    public function BuildListContextMenu()
    {
    }
    public function RenderInto(&$html)
    {
    }
    public function IsNeedSaveInlineEditedItems()
    {
    }
    public function SaveInlineEditedItems()
    {
    }
    protected function ShowFilter()
    {
    }
    public function ShowList()
    {
    }
}