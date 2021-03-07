<?php

namespace Bitrix\Socialnetwork\CommentAux;

final class CreateTask extends \Bitrix\Socialnetwork\CommentAux\Base
{
    const TYPE = 'CREATETASK';
    const POST_TEXT = 'commentAuxCreateTask';
    const SOURCE_TYPE_BLOG_POST = 'BLOG_POST';
    const SOURCE_TYPE_TASK = 'TASK';
    const SOURCE_TYPE_FORUM_TOPIC = 'FORUM_TOPIC';
    const SOURCE_TYPE_CALENDAR_EVENT = 'CALENDAR_EVENT';
    const SOURCE_TYPE_TIMEMAN_ENTRY = 'TIMEMAN_ENTRY';
    const SOURCE_TYPE_TIMEMAN_REPORT = 'TIMEMAN_REPORT';
    const SOURCE_TYPE_LOG_ENTRY = 'LOG_ENTRY';
    const SOURCE_TYPE_PHOTO_ALBUM = 'PHOTO_ALBUM';
    const SOURCE_TYPE_PHOTO_PHOTO = 'PHOTO_PHOTO';
    const SOURCE_TYPE_WIKI = 'WIKI';
    const SOURCE_TYPE_LISTS_NEW_ELEMENT = 'LISTS_NEW_ELEMENT';
    const SOURCE_TYPE_INTRANET_NEW_USER = 'INTRANET_NEW_USER';
    const SOURCE_TYPE_BITRIX24_NEW_USER = 'BITRIX24_NEW_USER';
    const SOURCE_TYPE_BLOG_COMMENT = 'BLOG_COMMENT';
    const SOURCE_TYPE_FORUM_POST = 'FORUM_POST';
    const SOURCE_TYPE_LOG_COMMENT = 'LOG_COMMENT';
    private $postTypeList = array(self::SOURCE_TYPE_BLOG_POST, self::SOURCE_TYPE_TASK, self::SOURCE_TYPE_FORUM_TOPIC, self::SOURCE_TYPE_CALENDAR_EVENT, self::SOURCE_TYPE_TIMEMAN_ENTRY, self::SOURCE_TYPE_TIMEMAN_REPORT, self::SOURCE_TYPE_LOG_ENTRY, self::SOURCE_TYPE_PHOTO_ALBUM, self::SOURCE_TYPE_PHOTO_PHOTO, self::SOURCE_TYPE_WIKI, self::SOURCE_TYPE_LISTS_NEW_ELEMENT, self::SOURCE_TYPE_INTRANET_NEW_USER, self::SOURCE_TYPE_BITRIX24_NEW_USER);
    private $commentTypeList = array(self::SOURCE_TYPE_BLOG_COMMENT, self::SOURCE_TYPE_FORUM_POST, self::SOURCE_TYPE_LOG_COMMENT);
    private $postTypeListInited = false;
    private $commentTypeListInited = false;
    public function addPostTypeList($type)
    {
    }
    public function addCommentTypeList($type)
    {
    }
    public function getPostTypeList()
    {
    }
    public function getCommentTypeList()
    {
    }
    public function getSourceTypeList()
    {
    }
    public function getParamsFromFields($fields = array())
    {
    }
    public function getText()
    {
    }
    public function checkRecalcNeeded($fields, $params)
    {
    }
    private function getTask($taskId, $checkPermissions = true)
    {
    }
    public function sendRatingNotification($fields = array(), $ratingVoteParams = array())
    {
    }
}