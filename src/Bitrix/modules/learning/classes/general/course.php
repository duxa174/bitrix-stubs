<?php

class CCourse
{
    // 2012-04-17 Checked/modified for compatibility with new data model
    public static final function GetList($arOrder = array(), $arFields = array(), $arNavParams = array())
    {
    }
    /**
     * Gets id of lesson corresponded to given course
     * @param integer id of course
     * @throws LearnException with error bit set (one of):
     *         - LearnException::EXC_ERR_ALL_GIVEUP
     *         - LearnException::EXC_ERR_ALL_LOGIC
     * @return integer/bool id of linked (corresponded) lesson or 
     *         FALSE if there is no lesson corresponded to the course.
     */
    public static final function CourseGetLinkedLesson($courseId)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function CheckFields($arFields, $ID = \false)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function Add($arFields)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function Update($ID, $arFields)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    /**
     * Removes course (as node, not recursively)
     */
    function Delete($ID)
    {
    }
    public function IsCertificatesExists($courseId)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function GetByID($ID)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function GetGroupPermissions($COURSE_ID)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function GetSite($COURSE_ID)
    {
    }
    function GetSiteId($COURSE_ID)
    {
    }
    public static function GetSitePathes($siteId, $in_type = 'U')
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function MkOperationFilter($key)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function FilterCreate($fname, $vals, $type, &$bFullJoin, $cOperationType = \false, $bSkipEmpty = \true)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function GetCourseContent($COURSE_ID, $arAddSelectFileds = array("DETAIL_TEXT", "DETAIL_TEXT_TYPE", "DETAIL_PICTURE"), $arSelectFields = array())
    {
    }
    // Handlers:
    // 2012-04-17 Checked/modified for compatibility with new data model
    function OnGroupDelete($GROUP_ID)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function OnBeforeLangDelete($lang)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function OnUserDelete($user_id)
    {
    }
    // 2012-04-17 Checked/modified for compatibility with new data model
    function TimeToStr($seconds)
    {
    }
    // provided compatibility to new data model at 04.05.2012
    function OnSearchReindex($nextStep = [], $callbackObject = \null, $callbackMethod = "")
    {
    }
    function _Upper($str)
    {
    }
    // Functions below are for temporary backward compatibility, don't relay on it!
    /**
     * Stupid stub
     * 
     * @deprecated this code can be removed at any time without any notice
     */
    public static function SetPermission($param1, $param2)
    {
    }
    /**
     * Simple proxy
     * 
     * @deprecated this code can be removed at any time without any notice
     * @return character 'D', 'R', 'W' or 'X'
     */
    public static function GetPermission($courseId)
    {
    }
}