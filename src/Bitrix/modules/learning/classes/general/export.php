<?php

// 2012-04-18 Checked/modified for compatibility with new data model
class CCoursePackage
{
    var $ID;
    var $charset;
    var $LAST_ERROR = "";
    var $arCourse = array();
    var $arSite = array();
    var $arItems = array();
    var $arResources = array();
    var $RefID = 1;
    var $strItems = "";
    var $strResourses = "";
    var $arDraftFields = array("detail_text", "preview_text", "description");
    var $arPicture = array("detail_picture", "preview_picture", "file_id");
    var $arDate = array("active_from", "active_to", "timestamp_x", "date_create");
    private $replacingResId;
    // 2012-04-18 Checked/modified for compatibility with new data model
    function CCoursePackage($COURSE_ID)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function CreatePackage($PACKAGE_DIR)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function CreateManifest()
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function _GetCourseContent($parentLessonId, $DEPTH_LEVEL = 1)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function _CreateCourseToc()
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function _GetResourceFiles($res_id)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function _CreateContent($TYPE, $arParams, $res_id)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function _replace_img($matches)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function _ReplaceImages($text, $res_id)
    {
    }
    private function createQuestionItems($lessonId)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    function CreateQTI($arParams, $res_id = 1)
    {
    }
    function CreateTMK($arParams, $res_id = 1)
    {
    }
}