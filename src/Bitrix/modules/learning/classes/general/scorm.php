<?php

// 2012-04-20 Checked/modified for compatibility with new data model
class CCourseSCORM
{
    var $package_dir;
    var $LAST_ERROR = "";
    var $arManifest = array();
    var $arSITE_ID = array();
    var $COURSE_ID = 0;
    var $objXML;
    var $arDraftFields = array("detail_text", "preview_text", "description");
    var $arUnsetFields = array("id", "timestamp_x", "chapter_id", "course_id", "lesson_id", "question_id", "created_by");
    var $arPicture = array("detail_picture", "preview_picture", "file_id");
    var $arDate = array("active_from", "active_to", "date_create");
    var $arWarnings = array();
    var $arResources = array();
    // 2012-04-19 Checked/modified for compatibility with new data model
    public function __construct($PACKAGE_DIR, $arSITE_ID)
    {
    }
    // 2012-04-19 Checked/modified for compatibility with new data model
    protected function CreateCourse()
    {
    }
    // 2012-04-19 Checked/modified for compatibility with new data model
    protected function CreateContent($arItems = array(), $PARENT_ID = 0)
    {
    }
    // 2012-04-20 Checked/modified for compatibility with new data model
    protected function _MakeItems($TITLE, $TYPE, $LAUNCH, $PARENT_ID)
    {
    }
    // 2012-04-19 Checked/modified for compatibility with new data model
    public function ImportPackage()
    {
    }
}