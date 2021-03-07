<?php

namespace Bitrix\Translate\IO;

class Path extends \Bitrix\Main\IO\Path
{
    /**
     * Normalizes path splitter symbols.
     *
     * @param string $path Path to check.
     *
     * @return string
     */
    public static function tidy($path)
    {
    }
    /**
     * Removes unsecured path parts.
     *
     * @param string $path Path to check.
     *
     * @return string
     */
    public static function secure($path)
    {
    }
    /**
     * Checks if it is translation folder.
     *
     * @param string $path Path to check.
     * @param bool $additionalCheck Preforms additional check.
     *
     * @return bool
     */
    public static function isLangDir($path, $additionalCheck = false)
    {
    }
    /**
     * Detects and returns language code from a path.
     *
     * @param string $path Path to check.
     *
     * @return string|null
     */
    public static function extractLangId($path)
    {
    }
    /**
     * Replaces language code in the path.
     *
     * @param string $path Path to check.
     * @param string $langId Language code to add.
     *
     * @return string
     */
    public static function replaceLangId($path, $langId)
    {
    }
    /**
     * Removes language folder and code from path.
     *
     * @param string $path Path to check.
     * @param string[] $langs Languages list.
     *
     * @return string
     */
    public static function removeLangId($path, $langs = null)
    {
    }
    /**
     * Adds language folder and code into path.
     *
     * @param string $path Path to check.
     * @param string $langId Language code to add.
     * @param string[] $langs Languages list.
     *
     * @return string
     */
    public static function addLangId($path, $langId, $langs = null)
    {
    }
    /**
     * Checks existence or creates of the directory path.
     *
     * @param string $path Path to check.
     *
     * @return boolean
     */
    public static function checkCreatePath($path)
    {
    }
}