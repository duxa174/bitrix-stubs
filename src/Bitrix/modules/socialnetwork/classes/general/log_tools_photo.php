<?php

class CSocNetLogToolsPhoto
{
    public static function OnAfterPhotoUpload($arFields, $arComponentParams, $arComponentResult)
    {
    }
    public static function OnAfterPhotoDrop($arFields, $arComponentParams)
    {
    }
    public static function OnBeforeSectionDrop($sectionID, $arComponentParams, $arComponentResult, &$arSectionID, &$arElementID)
    {
    }
    public static function OnAfterSectionDrop($ID, $arFields, $arComponentParams, $arComponentResult)
    {
    }
    public static function OnAfterSectionEdit($arFields, $arComponentParams, $arComponentResult)
    {
    }
}
class CSocNetPhotoCommentEvent
{
    function AddComment_PhotoAlbum($arFields)
    {
    }
    public static function FindLogType($logID)
    {
    }
    public static function AddComment_Photo($arFields)
    {
    }
    public static function AddComment_Photo_Forum($arFields, $FORUM_ID, $arLog)
    {
    }
    public static function AddComment_Photo_Blog($arFields, $BLOG_ID, $arLog)
    {
    }
    function UpdateComment_Photo($arFields)
    {
    }
    function DeleteComment_Photo($arFields)
    {
    }
    function SetVars($arParams, $arResult)
    {
    }
    function OnAfterPhotoCommentAddForum($ID, $arFields)
    {
    }
    function OnAfterPhotoCommentAddBlog($ID, $arFields)
    {
    }
    function InheriteAlbumFollow($albumId, $logId, $authorId = \false)
    {
    }
    function OnAfterPhotoCommentDeleteBlog($ID)
    {
    }
    public static function NotifyIm($arParams)
    {
    }
}