<?php

// 2012-04-19 Checked/modified for compatibility with new data model
class CCourseImport
{
    var $package_dir;
    var $LAST_ERROR = "";
    var $arManifest = array();
    var $arSITE_ID = array();
    var $COURSE_ID = 0;
    var $objXML;
    var $arDraftFields = array("detail_text", "preview_text", "description");
    var $arUnsetFields = array("id", "site_id", "timestamp_x", 'date_create', "chapter_id", "course_id", "lesson_id", "question_id", "created_by", 'created_user_name', 'linked_lesson_id', 'childs_cnt', 'is_childs', 'description', 'description_type', 'was_chapter_id');
    var $arPicture = array("detail_picture", "preview_picture", "file_id");
    var $arDate = array("active_from", "active_to");
    var $arWarnings = array();
    protected $arPreventUnsetFieldsForTest = array('description', 'description_type');
    // List of fields, writable to unilessons
    protected $arLessonWritableFields = array('NAME', 'ACTIVE', 'CODE', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'PREVIEW_TEXT_TYPE', 'DETAIL_PICTURE', 'DETAIL_TEXT', 'DETAIL_TEXT_TYPE', 'LAUNCH', 'KEYWORDS');
    // 2012-04-18 Checked/modified for compatibility with new data model
    public function __construct($PACKAGE_DIR, $arSITE_ID)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    protected function CreateCourse()
    {
    }
    // 2012-04-19 Checked/modified for compatibility with new data model
    protected function CreateContent($arItems = array(), $PARENT_ID = 0)
    {
    }
    // 2012-04-19 Checked/modified for compatibility with new data model
    protected function _MakeItems($TITLE, $TYPE, $RES_ID, $PARENT_ID)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    protected function _MakeFields(&$arFields, $itemType = \null)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    public function ImportPackage()
    {
    }
    protected static function ImageTypeToMimeTypeByFileName($file)
    {
    }
    // 2012-04-18 Checked/modified for compatibility with new data model
    public static function ImageTypeToMimeType($type)
    {
    }
}