<?php

class CLearnInstall201203ConvertDBTimeOut extends \Exception
{
}
class CLearnInstall201203ConvertDBException extends \Exception
{
}
class CLearnInstall201203ConvertDB
{
    const MODULE_ID = 'learning';
    const OPTION_ID = '~LearnInstall201203ConvertDB::_IsAlreadyConverted';
    // don't change this constant, NEVER!
    const STATUS_INSTALL_COMPLETE = '1';
    const STATUS_INSTALL_NEVER_START = '2';
    const STATUS_INSTALL_INCOMPLETE = '3';
    const JOURNAL_STATUS_UNPROCESSED = -1;
    const JOURNAL_STATUS_COURSE_LINKED = 1;
    const JOURNAL_STATUS_CHAPTER_COPIED = 2;
    const JOURNAL_STATUS_LESSON_EDGES_CREATED = 3;
    public static function run()
    {
    }
    protected static function StartTransaction()
    {
    }
    protected static function Rollback()
    {
    }
    protected static function Commit()
    {
    }
    protected static function ReCreateTriggersForMSSQL()
    {
    }
    protected static function _RightsModelGetTasksWithOperations()
    {
    }
    protected static function _RightsModelGetAllOperations()
    {
    }
    /**
     * @return array of operations with IDs
     */
    protected static function _CheckOperationsInDB()
    {
    }
    protected static function _CheckTasksInDB($arTasksOperations)
    {
    }
    protected static function _CheckTasksOperationsRelations($arOperationsInDB, $arTasksInDB, $arTasksOperations)
    {
    }
    protected static function IsNewRightsModelInitialized(&$step, &$msg)
    {
    }
    protected static function _RightsModelCreateOperations()
    {
    }
    protected static function _RightsModelCreateTasksAndRelation($arOperationsInDB)
    {
    }
    protected static function _RightsModelPurge()
    {
    }
    protected static function InitializeNewRightsModel()
    {
    }
    protected static function _CreateTblRightsAll()
    {
    }
    /**
     * @return int items processed
     */
    public static function ConvertDB(&$errorMessage)
    {
    }
    protected static function ConvertPermissions()
    {
    }
    protected static function AddPath()
    {
    }
    /**
     * @return int items processed
     */
    public static function _buildEdges(&$errorMessage)
    {
    }
    public static function _MarkLessonAsProcessed($lessonId)
    {
    }
    public static function _CreateEdgeForNodes($parentNodeId, $childNodeId, $sort)
    {
    }
    /**
     * @param int chapter_id in old data model (in table b_learn_chapter)
     * @return int chapter_id in new data model (in table b_learn_lesson) OR -1 on error
     */
    public static function _GetChapterIdInNewDataModel($b_learn_chapter_ID)
    {
    }
    /**
     * @param int course_id in old data model (in table b_learn_course)
     * @return int course_id in new data model (in table b_learn_lesson) OR -1 on error
     */
    public static function _GetCourseIdInNewDataModel($b_learn_course_ID)
    {
    }
    /**
     * @return int items processed
     */
    public static function _processCourses()
    {
    }
    /**
     * This function throws exception CLearnInstall201203ConvertDBTimeOut, if it's low time left.
     */
    public static function avoidTimeout()
    {
    }
    public static function _processChapters()
    {
    }
    /**
     * Inserts new lesson to `b_learn_lesson`. Before insert, drop
     * exists lessons with such `WAS_CHAPTER_ID` (if not NULL)
     * or with such `WAS_COURSE_ID` (if not NULL)
     */
    public static function _UnrepeatableCreateLesson($arFields)
    {
    }
    /**
     * We are converted if option with name self::OPTION_ID is set to self::STATUS_INSTALL_COMPLETE
     * 
     * !!! But, if:
     * 1) this option is set to self::STATUS_INSTALL_NEVER_START 
     * AND
     * 2) there is tables b_learn_lesson_edges exists & b_learn_rights_all 
     * and b_learn_course_permission doesn't exists
     * it means that options is incorrectly set (or was reseted by somebody else), so we returns that DB is already converted
     * 
     */
    public static function _IsAlreadyConverted()
    {
    }
    protected static function _RemoveOrphanedTables()
    {
    }
    public static function _CreateEdgesTbl()
    {
    }
    public static function _CreateFieldsInTbls()
    {
    }
    /*
    public static function _RemoveFieldsFromLesson()
    {
    	//		ORACLE:
    	//		ALTER TABLE `b_learn_lesson` DROP COLUMN `JOURNAL_ID` ???
    
    	global $DB, $DBType;
    
    	$arTableFields = $DB->GetTableFieldsList (`b_learn_lesson`);
    
    	// Prepare sql code for removing fields
    	$sql_add = array();
    	if ($DBType === 'mysql')
    	{
    		$sql_add['JOURNAL_ID'] = "ALTER TABLE `b_learn_lesson` DROP `JOURNAL_ID`";
    	}
    	else
    	{
    		// TODO: do sql code for MSSQL and Oracle
    
    		self::_GiveUp ('SQL code not ready for: ' . $DBType);
    	}
    
    	// Remove every field (if exists) from table b_learn_lesson
    	foreach ($sql_add as $fieldName => $sql)
    	{
    		if ( in_array($fieldName, $arTableFields, true) )
    		{
    			$rc = $DB->Query($sql, $ignore_erros = true);
    
    			if ($rc === false)
    				self::_GiveUp(__LINE__);
    		}
    	}
    
    	// Don't ensure, that fields was really removed, because it's not critical for us
    }
    */
    public static function _GiveUp($msg = \false)
    {
    }
}