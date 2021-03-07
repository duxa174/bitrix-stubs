<?php

namespace Bitrix\Blog;

class BlogUser
{
    const CACHE_ID = 'BLOG_USERS';
    private $blogId = NULL;
    //	this values was be hardcoded in components. If we want customization - need add settings and remake
    private $avatarSizes = array('COMMENT' => array('WIDTH' => 30, 'HEIGHT' => 30), 'POST' => array('WIDTH' => 100, 'HEIGHT' => 100));
    private $cacheTime = 0;
    public function addAvatarSize($width, $height, $key = "")
    {
    }
    /**
     * Blog users can be saved in cache or get from DB. To cached - set cacheTime
     *
     * BlogUser constructor.
     * @param int $cacheTime - integer - value of cache TTL
     */
    public function __construct($cacheTime = 0)
    {
    }
    /**
     * Blog ID using to separate cache for different blogs
     * @param $id
     */
    public function setBlogId($id)
    {
    }
    public function setCacheTime($cacheTime)
    {
    }
    /**
     * Get users from cache (if set cache time) or from DB.
     *
     * @param array $ids - array of users ids
     * @return array|bool
     */
    public function getUsers($ids = array())
    {
    }
    /**
     * Get blog users data from cache. If them not exist on cache - get new data from DB and write on cache.
     * False if error.
     *
     * @return array|bool
     */
    private function getUsersFromCache($ids)
    {
    }
    /**
     * Delete all data from blog users cache
     *
     * @return mixed
     */
    public static function cleanCache($blogId = NULL)
    {
    }
    private static function createCacheDir($blogId = NULL)
    {
    }
    /**
     * Get only unique IDs, sorting them and glue in string. It is will unique string for this chunk of users
     *
     * @param $ids
     * @return string
     */
    private static function createCacheId($ids)
    {
    }
    /**
     * Catch data from CUser, CBlogUser and formatted them to array to save in cache
     */
    private function getUsersFromDB($ids = array())
    {
    }
    private function addNotExistingUsers($ids = array())
    {
    }
    /**
     * Return users ids of post author and comments authors (for this post)
     *
     * @param $postId
     */
    public static function getCommentAuthorsIdsByPostId($postId)
    {
    }
    /**
     * Return users ids of blog posts
     * @param $blogId
     */
    public static function getPostAuthorsIdsByBlogId($blogId)
    {
    }
    /**
     * Return IDs of post authors by custom selection
     *
     * @param $arFilter
     * @return array
     * @throws ArgumentNullException
     */
    public static function getPostAuthorsIdsByDbFilter($arFilter)
    {
    }
    /**
     * Creat correctly blog user name from name, alias and login
     *
     * @param $alias
     * @param $name
     * @param $lastName
     * @param $login
     * @param string $secondName
     * @return string
     *
     */
    public static function GetUserName($alias, $name, $lastName, $login, $secondName = "")
    {
    }
    public static function GetUserNameEx($user, $blogUser, $params)
    {
    }
    /**
     * Check, is user given consent for current agreement ever in the past.
     * Consent checked based on component URL, it means, that if URL will be changed, result will be false again.
     *
     * @param $userId - ID of main user (not blog user!)
     */
    public static function isUserGivenConsent($userId, $agreementId)
    {
    }
    /**
     * Handles onUserDelete main module event
     *
     * @return bool
     */
    public static function onUserDelete($userId = NULL)
    {
    }
}