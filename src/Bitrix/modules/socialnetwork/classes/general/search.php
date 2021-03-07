<?php

class CSocNetSearch
{
    var $_params;
    var $_user_id;
    var $_group_id;
    /*
    arParams
    	PATH_TO_GROUP
    
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
    	PATH_TO_GROUP_FILES
    	FILES_USER_IBLOCK_ID
    	PATH_TO_USER_FILES_ELEMENT
    	PATH_TO_USER_FILES
    */
    function __construct($user_id, $group_id, $arParams)
    {
    }
    function CSocNetSearch($user_id, $group_id, $arParams)
    {
    }
    public static function OnUserRelationsChange($user_id)
    {
    }
    public static function SetFeaturePermissions($entity_type, $entity_id, $feature, $operation, $new_perm)
    {
    }
    public static function GetSearchParams($entity_type, $entity_id, $feature, $operation)
    {
    }
    public static function GetSearchGroups($entity_type, $entity_id, $feature, $operation)
    {
    }
    function OnSearchReindex($NS = array(), $oCallback = \NULL, $callback_method = "")
    {
    }
    function OnSearchPrepareFilter($strSearchContentAlias, $field, $val)
    {
    }
    function OnSearchCheckPermissions($FIELD)
    {
    }
    function BeforeIndexForum($arFields, $entity_type, $entity_id, $feature, $operation, $path_template)
    {
    }
    function Url($url, $params, $ancor)
    {
    }
    function BeforeIndex($arFields)
    {
    }
    function BeforeIndexLast($arFields)
    {
    }
    function IndexIBlockElement($arFields, $entity_id, $entity_type, $feature, $operation, $path_template, $arFieldList)
    {
    }
    function IBlockElementUpdate(&$arFields)
    {
    }
    function IBlockElementDelete($zr)
    {
    }
    function IndexIBlockSection($arFields, $entity_id, $entity_type, $feature, $operation, $path_template)
    {
    }
    function IBlockSectionUpdate(&$arFields)
    {
    }
    function IBlockSectionDelete($zr)
    {
    }
    function OnBeforeIndexUpdate($ID, $arFields)
    {
    }
    function OnAfterIndexAdd($ID, $arFields)
    {
    }
}