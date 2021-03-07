<?php

class CLearnLessonTree
{
    protected $arTree = \NULL;
    protected $arLessonsInTree = array();
    // Array of ids of lessons already pushed to tree
    protected $arLessonsAsList = array();
    // Lessons' tree in list mode (with depth)
    protected $arLessonsAsListOldMode = array();
    // Lessons' tree in list mode (with depth) - in old compatibility mode
    protected $arPublishProhibitedLessons = array();
    // Lessons that are prohibited for publish (setted only if publishProhibitionMode enabled)
    /**
     * Build tree of lessons with the given root.
     * 
     * WARNING: tree build algorithm skips duplicated lessons, so
     * if there is some duplicates lessons, only one of them
     * will be in resulted tree.
     * 
     * @param integer id of root lesson
     * @param array order
     * @param array filter
     * @param bool skip publish prohibited lessons in context of $rootLessonId
     */
    public function __construct($rootLessonId, $arOrder = \null, $arFilter = array(), $publishProhibitionMode = \true, $arSelectFields = array())
    {
    }
    /**
     * WARNING: tree build algorithm skips duplicated lessons, so
     * if there is some duplicates lessons, only one of them
     * will be in resulted tree.
     * 
     * @return array
     * @example of returned array:
     * array (
     *    0 => array (
     *         'LESSON_ID' => 7,
     *         'EDGE_SORT' => 463,
     *         ... other fields accorded to CLearnLesson::GetList();
     *         '#childs'   => array(
     *                           0 => array (
     *                                'LESSON_ID' => 8,
     *                                'EDGE_SORT' => 463,
     *                                ... other fields accorded to CLearnLesson::GetList();
     *                                '#childs'   => array(),
     *                           1 => array(...),
     *                           ...
     *                        )
     *         ),
     *    1 => array (...),
     *    ...
     * )
     */
    public function GetTree()
    {
    }
    /**
     * WARNING: tree build algorithm skips duplicated lessons, so
     * if there is some duplicates lessons, only one of them
     * will be in resulted tree.
     * 
     * @return array
     * @example of returned array:
     * array (
     *    0 => array (
     *         'LESSON_ID' => 7,
     *         'EDGE_SORT' => 463,
     *         ... other fields accorded to CLearnLesson::GetList();
     *         '#DEPTH_IN_TREE' => 0
     * 
     *    1 => array (
     *         'LESSON_ID' => 8,
     *         'EDGE_SORT' => 463,
     *         ... other fields accorded to CLearnLesson::GetList();
     *         '#DEPTH_IN_TREE' => 1,	// this is child of LESSON_ID=7, so it's deeper
     *         ),
     *    2 => array (...),
     *    ...
     * )
     */
    public function GetTreeAsList()
    {
    }
    /**
     * WARNING: tree build algorithm skips duplicated lessons, so
     * if there is some duplicates lessons, only one of them
     * will be in resulted tree.
     */
    public function GetTreeAsListOldMode()
    {
    }
    /**
     * WARNING: tree build algorithm skips duplicated lessons, so
     * if there is some duplicates lessons, only one of them
     * will be in resulted tree.
     */
    public function GetLessonsIdListInTree()
    {
    }
    /**
     * WARNING: tree build algorithm skips duplicated lessons, so
     * if there is some duplicates lessons, only one of them
     * will be in resulted tree.
     */
    protected function BuildTreeRecursive($rootLessonId, $arOrder, $arFilter, $depth = 0, $parentChapterId = \NULL, $arSelectFields, $arRootPath)
    {
    }
    protected function EnsureStrictlyCastableToInt($i)
    {
    }
}