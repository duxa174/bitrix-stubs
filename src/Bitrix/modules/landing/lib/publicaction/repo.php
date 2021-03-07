<?php

namespace Bitrix\Landing\PublicAction;

class Repo
{
    /**
     * Check content for bad substring.
     * @param string $content
     * @param string $splitter
     * @return PublicActionResult
     */
    public static function checkContent($content, $splitter = '#SANITIZE#')
    {
    }
    /**
     * Register new block.
     * @param string $code Unique code of block (for one app context).
     * @param array $fields Block data.
     * @param array $manifest Manifest data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function register($code, array $fields, array $manifest = array())
    {
    }
    /**
     * Unregister block.
     * @param string $code Code of block.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function unregister($code)
    {
    }
    /**
     * Get info about app from Repo.
     * @param string $code App code.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getAppInfo($code)
    {
    }
    /**
     * Bind the placement.
     * @param array $fields Fields array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function bind(array $fields)
    {
    }
    /**
     * Unbind the placement.
     * @param string $code Placement code.
     * @param string $handler Handler path (if you want delete specific).
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function unbind($code, $handler = null)
    {
    }
    /**
     * Get items of current app.
     * @param array $params Params ORM array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getList(array $params = array())
    {
    }
}