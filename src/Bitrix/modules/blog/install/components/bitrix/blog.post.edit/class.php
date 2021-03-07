<?php

class CBlogPostEdit extends \CBitrixComponent
{
    const FILE_CONTROL_ID_PREFIX = 'blogfiles';
    const POST_FORM_PREFIX = 'POST_BLOG_FORM';
    const POST_MESSAGE_PREFIX = "POST_MESSAGE";
    public $userId;
    public function onPrepareComponentParams($arParams)
    {
    }
    public function executeComponent()
    {
    }
    private function setUserId($userId)
    {
    }
    public function createPostFormId()
    {
    }
    public function createEditorId()
    {
    }
    private function processImagesOldVersion($arBlog)
    {
    }
    private function parseFilesArray()
    {
    }
    private function getNotAttachedFiles($removeOldFiles = \false)
    {
    }
    private function getCategoryIdsByPostNames($blogParams)
    {
    }
    private function getCategoryIdsByPostIds($blogParams)
    {
    }
    private function getCategoriesIds($blogParams)
    {
    }
    private function getDatePublish()
    {
    }
    private function getPublishStatus($perms)
    {
    }
    private function setSeoFields()
    {
    }
    private function setCodeFields($blogParams)
    {
    }
    private function setPermsFields()
    {
    }
    private function setMicroblogFields($title1, $title2)
    {
    }
    private function saveOrUpdatePost($fields, $blogParams)
    {
    }
    private function copyOrMovePost($blogParams)
    {
    }
    private function initPostToShowExistPost($postParams, $blogParams)
    {
    }
    private function initPostToShowPreview($blogParams)
    {
    }
    private function getAvBlogs($blogParams, $blogModulePermissions)
    {
    }
    private function getSmilesParams()
    {
    }
    private function clearBlogCache($blogParams)
    {
    }
    private function isUserGivenConsent()
    {
    }
}