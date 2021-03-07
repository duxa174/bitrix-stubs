<?php

namespace Bitrix\Main\Localization;

final class Loc
{
    private static $currentLang = null;
    private static $messages = array();
    private static $customMessages = array();
    private static $userMessages = array();
    private static $includedFiles = array();
    private static $lazyLoadFiles = array();
    private static $triedFiles = array();
    /**
     * Returns translation by message code.
     * Loc::loadMessages(__FILE__) should be called first once per php file
     *
     * @param string $code
     * @param array $replace e.g. array("#NUM#"=>5)
     * @param string $language
     * @return string
     */
    public static function getMessage($code, $replace = null, $language = null)
    {
    }
    /**
     * Loads language messages for specified file in a lazy way
     *
     * @param string $file
     */
    public static function loadMessages($file)
    {
    }
    /**
     * @return string
     */
    public static function getCurrentLang()
    {
    }
    public static function setCurrentLang($language)
    {
    }
    /**
     * Loads language messages for specified file and language.
     *
     * @param string $file File path to look for language translation for its.
     * @param string $language Language code.
     * @param string $loadedLangFile Certain loaded language file.
     *
     * @return array
     */
    private static function includeLangFiles($file, $language, &$loadedLangFile)
    {
    }
    /**
     * Loads language messages for specified file
     *
     * @param string $file
     * @param string $language
     * @param bool $normalize
     * @return array
     */
    public static function loadLanguageFile($file, $language = null, $normalize = true)
    {
    }
    /**
     * Loads custom messages from the file to overwrite messages by their IDs.
     *
     * @param string $file
     * @param string|null $language
     */
    public static function loadCustomMessages($file, $language = null)
    {
    }
    private static function loadLazy($code, $language)
    {
    }
    /**
     * Reads messages from user defined lang file
     *
     * @param string $lang
     * @return array
     */
    private static function loadUserMessages($lang)
    {
    }
    /**
     * Reads messages from lang file.
     *
     * @param string $path
     * @return array
     */
    private static function includeFile($path)
    {
    }
    /**
     * Returns default language for specified language. Default language is used when translation is not found.
     *
     * @param string $lang
     * @return string
     */
    public static function getDefaultLang($lang)
    {
    }
    /**
     * Returns previously included lang files.
     * @return array
     */
    public static function getIncludedFiles()
    {
    }
}