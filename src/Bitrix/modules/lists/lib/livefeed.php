<?php

class CListsLiveFeed
{
    public static function setMessageLiveFeed($users, $elementId, $workflowId, $flagCompleteProcess)
    {
    }
    public static function onFillSocNetAllowedSubscribeEntityTypes(&$socnetEntityTypes)
    {
    }
    public static function onFillSocNetLogEvents(&$socnetLogEvents)
    {
    }
    public static function formatListsElement($fields, $params, $mail = \false)
    {
    }
    public static function addCommentLists($fields)
    {
    }
    protected static function getRights($users, $logId, $createdBy, $method)
    {
    }
    protected static function getUserIdForRight($rights)
    {
    }
    protected static function setSocnetFollow($users = array(), $logId, $type, $manualMode = \false, $addingComment = \false)
    {
    }
    protected static function getSiteName()
    {
    }
    function BeforeIndexSocNet($bxSocNetSearch, $fields)
    {
    }
    /**
     * Called from LiveFeed
     * @param array $comment
     */
    public static function OnAfterSonetLogEntryAddComment($comment)
    {
    }
    /**
     * Called from popup
     * @param string $entityType
     * @param int $entityId
     * $param array $comment
     */
    public static function OnForumCommentIMNotify($entityType, $entityId, $comment)
    {
    }
    public static function NotifyComment($comment)
    {
    }
    public static function OnSendMentionGetEntityFields($commentFields)
    {
    }
    public static function OnSocNetGroupDelete($groupId)
    {
    }
}