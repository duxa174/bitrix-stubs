<?php

class CSocNetSearchReindex extends \CSocNetSearch
{
    var $_params;
    var $_user_id;
    var $_group_id;
    var $_sess_id;
    var $_end_time;
    var $_counter;
    var $_blog_cache;
    /*
    arParams
    	PATH_TO_GROUP
    
    	BLOG_GROUP_ID
    	PATH_TO_GROUP_BLOG
    	PATH_TO_USER_BLOG
    
    	FORUM_ID
    	PATH_TO_GROUP_FORUM_MESSAGE
    	PATH_TO_USER_FORUM_MESSAGE
    
    	PHOTO_GROUP_IBLOCK_ID
    	PATH_TO_GROUP_PHOTO_ELEMENT
    	PHOTO_USER_IBLOCK_ID
    	PATH_TO_USER_PHOTO_ELEMENT
    
    	CALENDAR_GROUP_IBLOCK_ID
    	PATH_TO_GROUP_CALENDAR_ELEMENT
    
    			PATH_TO_GROUP_TASK_ELEMENT
    	PATH_TO_USER_TASK_ELEMENT
    
    	FILES_PROPERTY_CODE
    	FILES_FORUM_ID
    	FILES_GROUP_IBLOCK_ID
    	PATH_TO_GROUP_FILES_ELEMENT
    	FILES_USER_IBLOCK_ID
    	PATH_TO_USER_FILES_ELEMENT
    */
    function __construct($user_id = 0, $group_id = 0, $arParams = array())
    {
    }
    function CSocNetSearchReindex($user_id = 0, $group_id = 0, $arParams = array())
    {
    }
    function GetCounter()
    {
    }
    function InitSession($arType)
    {
    }
    function ReindexForum($entity_type, $last_id, $path_template)
    {
    }
    function GetBlog($ID)
    {
    }
    function IndexBlogItemUser($arFields)
    {
    }
    function IndexBlogItemGroup($arFields)
    {
    }
    function ReindexBlog($entity_type, $last_id)
    {
    }
    function UpdateForumTopicIndex($topic_id, $entity_type, $entity_id, $feature, $operation, $path_template)
    {
    }
    function ReindexIBlock($iblock_id, $entity_type, $feature, $operation, $path_template, $arFieldList, $last_id)
    {
    }
    function ReindexGroups($last_id)
    {
    }
    function IndexItem($arFields)
    {
    }
    function StepIndex($arSteps, $current_step, $last_id, $timeout = 0)
    {
    }
    function OnBeforeFullReindexClear()
    {
    }
    function OnBeforeIndexDelete($strWhere)
    {
    }
}