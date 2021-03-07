<?php

namespace Bitrix\Socialnetwork;

class ComponentHelper
{
    protected static $postsCache = array();
    protected static $commentsCache = array();
    protected static $commentListsCache = array();
    protected static $commentCountCache = array();
    protected static $authorsCache = array();
    protected static $destinationsCache = array();
    /**
     * Returns data of a blog post
     *
     * @param int $postId Blog Post Id.
     * @param string $languageId 2-char language Id.
     * @return array|bool|false|mixed|null
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    public static function getBlogPostData($postId, $languageId)
    {
    }
    /**
     * Returns data of blog post destinations
     *
     * @param int $postId Blog Post Id.
     * @return array
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    public static function getBlogPostDestinations($postId)
    {
    }
    /**
     * Returns data of a blog post/comment author
     *
     * @param int $authorId User Id.
     * @param array $params Format parameters (avatar size etc).
     * @return array
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    public static function getBlogAuthorData($authorId, $params)
    {
    }
    /**
     * Returns full list of blog post comments
     *
     * @param int $postId Blog Post Id.
     * @param array $params Additional paramaters.
     * @param string $languageId Language Id (2-char).
     * @param array &$authorIdList List of User Ids.
     * @return array
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    public static function getBlogCommentListData($postId, $params, $languageId, &$authorIdList = array())
    {
    }
    /**
     * Returns a number of blog post comments
     *
     * @param int $postId Blog Post Id.
     * @return bool|int
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    public static function getBlogCommentListCount($postId)
    {
    }
    /**
     * Returns data of a blog comment
     *
     * @param int $commentId Comment Id.
     * @param string $languageId Language id (2-chars).
     * @return array|bool|false|mixed|null
     */
    public static function getBlogCommentData($commentId, $languageId)
    {
    }
    /**
     * Processes comment data, rendering formatted text and date
     *
     * @param array $comment Comment fields set.
     * @param string $languageId Language Id (2-chars).
     * @param \blogTextParser $p TextParser object.
     */
    private static function processCommentData(&$comment, $languageId, $p, $params = array())
    {
    }
    /**
     * Returns mail-hash url
     *
     * @param string $url Entity Link.
     * @param int $userId User Id.
     * @param string $entityType Entity Type.
     * @param int $entityId Entity Id.
     * @param string $siteId Site id (2-char).
     * @return bool|string
     * @throws Main\LoaderException
     */
    public static function getReplyToUrl($url, $userId, $entityType, $entityId, $siteId, $backUrl = null)
    {
    }
    /**
     * Returns data of attached files
     *
     * @param array $valueList Attachments List.
     * @param string|bool|false $siteId Site Id (2-chars).
     * @return array
     * @throws Main\LoaderException
     */
    public static function getAttachmentsData($valueList, $siteId = false)
    {
    }
    /**
     * Processes disk objects list and generates external links (for inline images) if needed
     *
     * @param array $valueList
     * @param string $entityType Entity Type.
     * @param int $entityId Entity Id.
     * @param int $authorId User Id.
     * @param array $attachmentList Attachments List.
     * @return array
     * @throws Main\LoaderException
     */
    public static function getAttachmentUrlList($valueList = array(), $entityType = '', $entityId = 0, $authorId = 0, $attachmentList = array())
    {
    }
    /**
     * Converts formatted text replacing pseudo-BB code MAIL DISK, using calculated URLs
     *
     * @param string $text Text to convert.
     * @param array $attachmentList Attachments List.
     * @return mixed|string
     */
    public static function convertMailDiskFileBBCode($text = '', $attachmentList = array())
    {
    }
    /**
     * Converts DISK FILE BB-code to the pseudo-BB code MAIL DISK FILE or IMG BB-code
     *
     * @param string $text Text to convert.
     * @param string $entityType Entity Type.
     * @param int $entityId Entity Type.
     * @param int $authorId User id.
     * @param array $attachmentList Attachments List.
     * @return mixed
     */
    public static function convertDiskFileBBCode($text, $entityType, $entityId, $authorId, $attachmentList = array())
    {
    }
    /**
     * Calculates if text has inline disk file images
     *
     * @param string $text text with BB-codes
     * @param array $ufData uf of disk type.
     * @return boolean
     */
    public static function hasTextInlineImage(string $text = '', array $ufData = []) : bool
    {
    }
    /**
     * Formsts date time to the value of author + GMT offset
     *
     * @param string $dateTimeSource Date/Time in site format.
     * @param int $authorId User Id.
     * @return string
     */
    public static function formatDateTimeToGMT($dateTimeSource, $authorId)
    {
    }
    /**
     * Returns (non-idea) blog group list
     *
     * @param array $params Parameters.
     * @return array
     */
    public static function getSonetBlogGroupIdList($params)
    {
    }
    /**
     * Creates a user blog (when it is the first post of the user)
     *
     * @param array $params Parameters.
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    public static function createUserBlog($params)
    {
    }
    /**
     * get urlPreview property value from text with links
     *
     * @param $text string
     * @param bool|true $html
     * @return bool|string
     * @throws Main\ArgumentTypeException
     */
    public static function getUrlPreviewValue($text, $html = true)
    {
    }
    /**
     * Returns rendered url preview block
     *
     * @param array $uf
     * @param array $params
     * @return string|boolean
     */
    public static function getUrlPreviewContent($uf, $params = array())
    {
    }
    public static function getExtranetUserIdList()
    {
    }
    public static function getEmailUserIdList()
    {
    }
    public static function getExtranetSonetGroupIdList()
    {
    }
    public static function hasCommentSource($params)
    {
    }
    // only by current userid
    public static function processBlogPostShare($fields, $params)
    {
    }
    public static function processBlogCreateTask($params)
    {
    }
    public static function processLogEntryCreateTask($params)
    {
    }
    public static function getUrlContext()
    {
    }
    public static function addContextToUrl($url, $context)
    {
    }
    public static function checkPredefinedAuthIdList($authIdList = array())
    {
    }
    public static function setComponentOption($list, $params = array())
    {
    }
    public static function getSonetGroupAvailable($params = array(), &$limitReached = false)
    {
    }
    public static function canAddComment($logEntry = array(), $commentEvent = array())
    {
    }
    public static function addLiveComment($comment = array(), $logEntry, $commentEvent = array(), $params = array())
    {
    }
    public static function fillSelectedUsersToInvite($HTTPPost, $componentParams, &$componentResult)
    {
    }
    public static function processBlogPostNewMailUser(&$HTTPPost, &$componentResult)
    {
    }
    private static function processUserEmail($params, &$errorText)
    {
    }
    public static function processBlogPostNewMailUserDestinations(&$destinationList)
    {
    }
    public static function processBlogPostNewCrmContact(&$HTTPPost, &$componentResult)
    {
    }
    public static function getUserSonetGroupIdList($userId = false, $siteId = false)
    {
    }
    public static function getAllowToAllDestination($userId = false)
    {
    }
    public static function getLivefeedStepper()
    {
    }
    public static function checkProfileRedirect($userId = 0)
    {
    }
    // used when video transform
    public static function getBlogPostLimitedViewStatus($params = array())
    {
    }
    public static function setBlogPostLimitedViewStatus($params = array())
    {
    }
    private static function notifyAuthorOnSetBlogPostLimitedViewStatusShow($params = array())
    {
    }
    public static function getBlogPostSocNetPerms($params = array())
    {
    }
    public static function notifyBlogPostCreated($params = array())
    {
    }
    public static function getUserSEFUrl($params = array())
    {
    }
    public static function getWorkgroupSEFUrl($params = array())
    {
    }
    public static function convertBlogPostPermToDestinationList($params, &$resultFields)
    {
    }
    public static function checkBlogPostDestinationList($params, &$resultFields)
    {
    }
    public static function getBlogPostCacheDir($params = array())
    {
    }
    public static function getLivefeedRatingData($params = array())
    {
    }
    public static function isCurrentUserExtranet($params = array())
    {
    }
    public static function userLogSubscribe($params = array())
    {
    }
    public static function getLFCommentsParams($eventFields = array())
    {
    }
    public static function checkCanCommentInWorkgroup($params)
    {
    }
    public static function checkLivefeedTasksAllowed()
    {
    }
}