<?php

class CIdeaManagment
{
    //User Fields Id
    const UFBlockPostDocField = 'UF_BLOG_POST_DOC';
    const UFStatusField = 'UF_STATUS';
    const UFAnswerIdField = 'UF_ANSWER_ID';
    const UFCategroryCodeField = 'UF_CATEGORY_CODE';
    const UFOriginalIdField = 'UF_ORIGINAL_ID';
    //End -> User Fields Id
    //Instance
    protected static $Instance = \NULL;
    public static function getInstance()
    {
    }
    private function __clone()
    {
    }
    private function __construct()
    {
    }
    public function IsAvailable()
    {
    }
    public function GetUserFieldsArray()
    {
    }
    //xAlias
    public function Idea($IdeaId = \false)
    {
    }
    //xAlias
    public function IdeaComment($CommentId = \false)
    {
    }
    //xAlias
    public function Notification($arNotification = array())
    {
    }
    /*************TOOLS**********/
    public function GetRSS($BlogCode, $type = "rss2.0", $numPosts = 10, $siteID = \SITE_ID, $arPathTemplates = array(), $arFilterExt = array())
    {
    }
    //DEPRECATED!!! DON'T USE!!! Will Be Removed
    //Alias
    public function GetCategoryList($CategoryIB = \false)
    {
    }
    //Alias
    public function SetCategoryListId($ID)
    {
    }
    //Alias
    public function GetStatusList()
    {
    }
    //Alias
    function GetCategorySequenceByCode($CODE, $arCategoryList = \false)
    {
    }
}