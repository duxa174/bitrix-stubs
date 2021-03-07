<?php

namespace Bitrix\Landing\Landing;

class UrlPreview
{
    /**
     * Gets preview for landing.
     * @param int $landingId Landing id.
     * @return array
     */
    public static function getPreview($landingId)
    {
    }
    /**
     * Returns landing id by site path.
     * @param string $code Site path.
     * @return int|null
     */
    public static function getPreviewByCode($code)
    {
    }
    /**
     * Gets landing id by url part.
     * @param string $code Url part.
     * @return int|null
     */
    protected static function detectByCode($code)
    {
    }
    /**
     * Detect page by codes array.
     * @param array $params Params array.
     * @return int|null
     */
    protected static function routeCodes($params)
    {
    }
    /**
     * Prepares params for different scopes.
     * @param array &$params Params.
     * @return void
     */
    protected static function prepareParams(array &$params)
    {
    }
    /**
     * Returns HTML code for page preview.
     * @param array $params Expected keys: siteCode[, folderCode, pageCode].
     * @return string
     */
    public static function buildPreview(array $params)
    {
    }
    /**
     * Returns attach to display in the messenger.
     * @param array $params Expected keys: siteCode[, folderCode, pageCode].
     * @return \CIMMessageParamAttach | false
     */
    public static function getImAttach(array $params)
    {
    }
    /**
     * Returns true if current user has read access to the page.
     * @param array $params Expected keys: siteCode[, folderCode, pageCode].
     * @param int $userId Current user's id.
     * @return bool
     */
    public static function checkUserReadAccess(array $params, $userId)
    {
    }
}