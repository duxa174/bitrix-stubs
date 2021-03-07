<?php

namespace Bitrix\Main\Localization;

class Translation
{
    /** @var boolean */
    private static $allowConvertEncoding = null;
    /** @var boolean */
    private static $useTranslationRepository = null;
    /** @var string */
    private static $translationRepositoryPath = null;
    /** @var string */
    private static $currentEncoding = null;
    /** @var bool[] */
    private static $needConvertEncoding = array();
    /** @var array */
    private static $map = array();
    const CACHE_ID = 'TranslationLoadMapCache';
    const CACHE_TTL = 3600;
    /**
     * Returns true if language translation is one of the default translation.
     *
     * @param string $lang Language code to check.
     * @return bool
     */
    public static function isDefaultTranslationLang($lang)
    {
    }
    /**
     * Returns encoding of source lang file in the translation repository.
     *
     * @param string $lang Language code to retrieve encoding.
     * @return string
     */
    public static function getDefaultTranslationEncoding($lang)
    {
    }
    /**
     * Returns encoding of source lang file in the translation repository.
     *
     * @param string $lang Language code to retrieve encoding.
     * @return string
     */
    public static function getSourceEncoding($lang)
    {
    }
    /**
     * Sets current encoding.
     *
     * @param  string $encoding Charset encoding.
     * @return void
     */
    public static function setCurrentEncoding($encoding)
    {
    }
    /**
     * Returns current encoding.
     *
     * @return string
     */
    public static function getCurrentEncoding()
    {
    }
    /**
     * Tells if need to convert encoding.
     *
     * @param string $language Language code.
     * @param string $targetEncoding Target encoding.
     *
     * @return bool
     */
    public static function needConvertEncoding($language, $targetEncoding = null)
    {
    }
    /**
     * Tells if need to convert encoding for certain file.
     *
     * @param string $langFile Language file path.
     *
     * @return bool
     */
    public static function checkPathRestrictionConvertEncoding($langFile)
    {
    }
    /**
     * Tells if need to use translation repository.
     *
     * @return bool
     */
    public static function useTranslationRepository()
    {
    }
    /**
     * Returns path to translation repository.
     *
     * @return string
     */
    public static function getTranslationRepositoryPath()
    {
    }
    /**
     * Tells true if configuration allows to convert encodings.
     *
     * @return bool
     */
    public static function allowConvertEncoding()
    {
    }
    /**
     * Returns path to developer repository.
     *
     * @return string
     */
    public static function getDeveloperRepositoryPath()
    {
    }
    /**
     * Converts lang file to translation repository path.
     *
     * @param string $langFile Language file path.
     * @param string $language Language code to retrieve translation.
     * @return string
     */
    public static function convertLangPath($langFile, $language)
    {
    }
    /**
     * Restore project map structure from file structure.
     *
     * @return array
     */
    public static function loadMap()
    {
    }
    /**
     * @param $language
     * @param $langFile
     * @return array
     */
    public static function getEncodings($language, $langFile)
    {
    }
}