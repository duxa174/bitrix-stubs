<?php

namespace Bitrix\Main\UrlPreview;

class UrlPreview
{
    const SIGN_SALT = 'url_preview';
    const USER_AGENT = 'Bitrix link preview';
    /** @var int Maximum allowed length of the description. */
    const MAX_DESCRIPTION = 500;
    const IFRAME_MAX_WIDTH = 640;
    const IFRAME_MAX_HEIGHT = 340;
    protected static $trustedHosts = ['youtube.com' => 'youtube.com', 'youtu.be' => 'youtu.be', 'vimeo.com' => 'vimeo.com', 'rutube.ru' => 'rutube.ru', 'facebook.com' => 'facebook.com', 'vk.com' => 'vk.com', 'instagram.com' => 'instagram.com'];
    /**
     * Returns associated metadata for the specified URL
     *
     * @param string $url URL.
     * @param bool $addIfNew Should metadata be fetched and saved, if not found in database.
     * @param bool $reuseExistingMetadata Allow reading of the cached metadata.
     * @return array|false Metadata for the URL if found, or false otherwise.
     */
    public static function getMetadataByUrl($url, $addIfNew = true, $reuseExistingMetadata = true)
    {
    }
    /**
     * Returns html code for url preview
     *
     * @param array $userField Userfield's value.
     * @param array $userFieldParams Userfield's parameters.
     * @param string $cacheTag Cache tag for returned preview (out param).
     * @param bool $edit Show method build preview for editing the userfield.
     * @return string HTML code for the preview.
     */
    public static function showView($userField, $userFieldParams, &$cacheTag, $edit = false)
    {
    }
    /**
     * Returns html code for url preview edit form
     *
     * @param array $userField Userfield's value.
     * @param array $userFieldParams Userfield's parameters.
     * @return string HTML code for the preview.
     */
    public static function showEdit($userField, $userFieldParams)
    {
    }
    /**
     * Checks if metadata for the provided url is already fetched and cached.
     *
     * @param string $url Document's URL.
     * @return bool True if metadata for the url is located in database, false otherwise.
     */
    public static function isUrlCached($url)
    {
    }
    /**
     * If url is remote - returns metadata for this url. If url is local - checks current user access to the entity
     * behind the url, and returns html preview for this entity.
     *
     * @param string $url Document's URL.
     * @param bool $addIfNew Should method fetch and store metadata for the document, if it is not found in database.
     * @params bool $reuseExistingMetadata Allow reading of the cached metadata.
     * @return array|false Metadata for the document, or false if metadata could not be fetched/parsed.
     */
    public static function getMetadataAndHtmlByUrl($url, $addIfNew = true, $reuseExistingMetadata = true)
    {
    }
    /**
     * Returns stored metadata for array of IDs
     *
     * @param array $ids Array of record's IDs.
     * @param bool $checkAccess Should method check current user's access to the internal entities, or not.
     * @params int $userId. Id of the users to check access. If == 0, will check access for current user.
     * @return array|false Array with provided IDs as the keys.
     */
    public static function getMetadataAndHtmlByIds(array $ids, $checkAccess = true, $userId = 0)
    {
    }
    /**
     * Creates temporary record for url
     *
     * @param string $url URL for which temporary record should be created.
     * @return int Temporary record's id.
     */
    public static function reserveIdForUrl($url)
    {
    }
    /**
     * Fetches and stores metadata for temporary record, created by UrlPreview::reserveIdForUrl. If metadata could
     * not be fetched, deletes record.
     * @param int $id Metadata record's id.
     * @param bool $checkAccess Should method check current user's access to the entity, or not.
     * @params int $userId. Id of the users to check access. If == 0, will check access for current user.
     * @return array|false Metadata if fetched, false otherwise.
     */
    public static function resolveTemporaryMetadata($id, $checkAccess = true, $userId = 0)
    {
    }
    /**
     * Returns HTML code for the dynamic (internal url) preview.
     * @param string $url URL of the internal document.
     * @param bool $checkAccess Should method check current user's access to the entity, or not.
     * @params int $userId. Id of the users to check access. If userId == 0, will check access for current user.
     * @return string|false HTML code of the preview, or false if case of any errors (including access denied)/
     */
    public static function getDynamicPreview($url, $checkAccess = true, $userId = 0)
    {
    }
    /**
     * Returns attach for the IM message with the requested internal entity content.
     * @param string $url URL of the internal document.
     * @param bool $checkAccess Should method check current user's access to the entity, or not.
     * @params int $userId. Id of the users to check access. If userId == 0, will check access for current user.
     * @return \CIMMessageParamAttach | false
     */
    public static function getImAttach($url, $checkAccess = true, $userId = 0)
    {
    }
    /**
     * Returns true if current user has read access to the content behind internal url.
     * @param string $url URL of the internal document.
     * @params int $userId. Id of the users to check access. If userId == 0, will check access for current user.
     * @return bool True if current user has read access to the main entity of the document, or false otherwise.
     */
    public static function checkDynamicPreviewAccess($url, $userId = 0)
    {
    }
    /**
     * Sets main image url for the metadata with given id.
     * @param int $id Id of the metadata to set image url.
     * @param string $imageUrl Url of the image.
     * @return bool Returns true in case of successful update, or false otherwise.
     * @throws ArgumentException
     */
    public static function setMetadataImage($id, $imageUrl)
    {
    }
    /**
     * Checks if UrlPreview is enabled in module option
     * @return bool True if UrlPreview is enabled in module options.
     */
    public static function isEnabled()
    {
    }
    /**
     * Signs value using UrlPreview salt
     * @param string $id Unsigned value.
     * @return string Signed value.
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public static function sign($id)
    {
    }
    /**
     * @param string $url URL of the document.
     * @return array|false Fetched metadata or false if metadata was not found, or was invalid.
     */
    protected static function fetchUrlMetadata($url)
    {
    }
    /**
     * Returns true if given URL is local
     *
     * @param Uri $uri Absolute URL to be checked.
     * @return bool
     */
    protected static function isUrlLocal(\Bitrix\Main\Web\Uri $uri)
    {
    }
    /**
     * @param Uri $uri Absolute URL to get metadata for.
     * @return array|false
     */
    protected static function getRemoteUrlMetadata(\Bitrix\Main\Web\Uri $uri)
    {
    }
    /**
     * @param string $url Image's URL.
     * @return integer Saved file identifier
     */
    protected static function saveImage($url)
    {
    }
    /**
     * If provided url does not contain scheme part, tries to add it
     *
     * @param string $url URL to be fixed.
     * @return string Fixed URL.
     */
    protected static function normalizeUrl($url)
    {
    }
    /**
     * Returns value of the option for saving images locally.
     * @return bool True if images should be saved locally.
     */
    protected static function getOptionSaveImages()
    {
    }
    /**
     * Checks if metadata is complete.
     * @param array $metadata HTML document metadata.
     * @return bool True if metadata is complete, false otherwise.
     */
    protected static function validateRemoteMetadata(array $metadata)
    {
    }
    /**
     * Returns id of currently logged user.
     * @return int User's id.
     */
    public static function getCurrentUserId()
    {
    }
    /**
     * Unfolds internal short url. If url is not classified as a short link, returns input $url.
     * @param string $shortUrl Short URL.
     * @return string Full URL.
     */
    protected static function unfoldShortLink($shortUrl)
    {
    }
    /**
     * Returns metadata for downloadable file.
     * @param string $path Path part of the URL.
     * @param HttpHeaders $httpHeaders Server's response headers.
     * @return array|bool Metadata record if mime type and filename were detected, or false otherwise.
     */
    protected static function getFileMetadata($path, \Bitrix\Main\Web\HttpHeaders $httpHeaders)
    {
    }
    /**
     * @param string $ipAddress
     * @return bool
     */
    public static function isIpAddressPrivate($ipAddress)
    {
    }
    /**
     * Returns true if host of $uri is in $trustedHosts list.
     *
     * @param Uri $uri
     * @return bool
     */
    public static function isHostTrusted(\Bitrix\Main\Web\Uri $uri)
    {
    }
    /**
     * Returns video metaData for $url if its host is trusted.
     *
     * @param string $url
     * @return array|false
     */
    public static function fetchVideoMetaData($url)
    {
    }
    /**
     * Returns inner frame url to embed third parties html video players.
     *
     * @param int $id
     * @param string $provider
     * @return bool|string
     */
    public static function getInnerFrameUrl($id, $provider = '')
    {
    }
}