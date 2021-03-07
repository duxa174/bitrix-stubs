<?php

/**
 * WARNING: nobody shouldn't rely on this code,
 * because it's FOR INTERNAL USE ONLY. Any declared
 * function can be removed or changed in future versions.
 * This code can be changed without any notifications.
 * DON'T USE it nowhere.
 *
 * @deprecated
 *
 * @access private
 */
class CLearnHelper
{
    const GRAPH_STATUS_NOT_SET = '1';
    // status wasn't set yet (we must determine, is our tables updated to graph or not)
    const GRAPH_STATUS_LEGACY = '2';
    const GRAPH_STATUS_UPDATED_TO_GRAPH = '3';
    const GRAPH_STATUS_UNDEFINED = '4';
    const MODULE_ID = 'learning';
    const OPTION_ID = '~CLearnHelper::isUpdatedToGraph();';
    const DEFAULT_VALUE = self::GRAPH_STATUS_NOT_SET;
    // be default
    const SITE_ID = '';
    // request shared options for all sites
    const ACCESS_READ = 0x1;
    const ACCESS_MODIFY = 0x3;
    // includes ACCESS_READ
    /**
     * Don't relay on this function, it can be removed without any notifications.
     * @deprecated
     */
    public static function PatchLessonContentLinks($strContent, $contextCourseId = \false)
    {
    }
    /**
     * @return void
     */
    public static function FireEvent($eventName, $eventParams)
    {
    }
    /**
     * This function builds subquery (for oracle) or comma-separated
     * list of lessons IDs (for mysql/mssql) for SQL WHERE clause,
     * which selects/contains all child lessons (only childs,
     * without parent lesson). This functions prevents cycling.
     *
     * Warning: currently
     *
     * @example
     * on oracle SQLClauseForAllSubLessons(13) returns subquery:
     * SELECT b_learn_lesson_edges.TARGET_NODE
     * FROM b_learn_lesson_edges
     * START WITH b_learn_lesson_edges.SOURCE_NODE=13
     * CONNECT BY NOCYCLE PRIOR b_learn_lesson_edges.TARGET_NODE = b_learn_lesson_edges.SOURCE_NODE
     *
     * on mysql/mssql SQLClauseForAllSubLessons(13) returns list of child lessons:
     * 14, 16, 120, 875, 476
     *
     * Any of this strings can be used in WHERE IN(...our string...) clause.
     *
     * Complete example:
     * <?php
     * $parentLessonId = 447;
     * $clauseChilds = CLearnHelper::SQLClauseForAllSubLessons($parentLessonId);
     * $strSql = "
     * SELECT *
     * FROM b_learn_lesson
     * WHERE ID IN ($clauseChilds) OR (ID = $parentLessonId)";
     * // Selects list of all childs with parentLessonId included.
     * $CDBresult = $DB->Query ($strSql);
     *
     * @param int parent lesson id
     * @return string for using in WHERE IN() clause: sql subquery or
     * comma-separated list of lesson's ids.
     */
    public static function SQLClauseForAllSubLessons($parentLessonId)
    {
    }
    /**
     * Linked from CAllCourse::MkOperationFilter($key);
     * This code writed not by me, but I rely on it in good state
     */
    public static function MkOperationFilter($key)
    {
    }
    /**
     * This code writed not by me, but I rely on it in good state
     */
    public static function FilterCreate($fname, $vals, $type, &$bFullJoin, $cOperationType = \false, $bSkipEmpty = \true)
    {
    }
    /**
     * @return boolean true, if data tables updated to graph (new native mode)
     *                 otherwise returns false (it means, we must work in legacy mode)
     */
    public static function isUpdatedToGraph()
    {
    }
    /**
     * @param string $status one of this values:
     *    self::GRAPH_STATUS_LEGACY - if not updated to grpah yet (legacy mode)
     *    self::GRAPH_STATUS_UPDATED_TO_GRAPH - if updated to graph,
     *    self::GRAPH_STATUS_UNDEFINED - if status is undefined (update in progress or interrupted)
     * @return boolean true if saved successfully, false otherwise.
     */
    public static function setUpdatedToGraphStatus($status)
    {
    }
    /**
     * @return string $status one of this values:
     *    self::GRAPH_STATUS_LEGACY - if not updated to graph (it means, we must work in legacy mode)
     *    self::GRAPH_STATUS_UPDATED_TO_GRAPH - if update to graph,
     *    self::GRAPH_STATUS_UNDEFINED - if status is undefined (update in progress or interrupted)
     */
    public static function getUpdatedToGraphStatus()
    {
    }
    public static function IsBaseFilenameSafe($filename)
    {
    }
    public static function CopyDirFiles($path_from, $path_to, $ReWrite = \True, $Recursive = \False)
    {
    }
}