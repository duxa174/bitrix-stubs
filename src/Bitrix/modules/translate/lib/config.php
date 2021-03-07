<?php

namespace Bitrix\Translate;

final class Config
{
    public const OPTION_INIT_FOLDERS = 'INIT_FOLDERS';
    public const OPTION_BUTTON_LANG_FILES = 'BUTTON_LANG_FILES';
    public const OPTION_BACKUP_FILES = 'BACKUP_FILES';
    public const OPTION_SORT_PHRASES = 'SORT_PHRASES';
    public const OPTION_DONT_SORT_LANGUAGES = 'DONT_SORT_LANGUAGES';
    public const OPTION_BACKUP_FOLDER = 'BACKUP_FOLDER';
    public const OPTION_EXPORT_CSV_DELIMITER = 'EXPORT_CSV_DELIMITER';
    public const OPTION_EXPORT_FOLDER = 'EXPORT_FOLDER';
    private const CACHE_TTL = 3600;
    /**
     * Returns an module option.
     *
     * @param string $optionName Name of option.
     *
     * @return string|null
     */
    public static function getOption(string $optionName) : ?string
    {
    }
    /**
     * Returns an array with default values of a module options (from a default_option.php file).
     *
     * @param string $optionName Name of option.
     *
     * @return string|null
     */
    public static function getModuleDefault(string $optionName) : ?string
    {
    }
    /**
     * Returns the default translation language list.
     *
     * @return string[]
     */
    public static function getDefaultLanguages() : array
    {
    }
    /**
     * Returns true id server is in utf-8 mode. False - otherwise.
     *
     * @return boolean
     */
    public static function isUtfMode() : bool
    {
    }
    /**
     * Returns list of allowed to operate charset encodings.
     *
     * @return string[]
     */
    public static function getAllowedEncodings() : array
    {
    }
    /**
     * Returns list of allowed to operate charset encodings.
     *
     * @param string $encoding Encoding to check.
     *
     * @return string
     */
    public static function getEncodingName(string $encoding) : string
    {
    }
    /**
     * Returns alias of encoding.
     *
     * @param string $encoding Encoding to check.
     *
     * @return string|null
     */
    public static function getAliasEncoding(string $encoding) : ?string
    {
    }
    /**
     * Returns language encoding from site settings.
     *
     * @param string $languageId Language id to check.
     *
     * @return string|null
     */
    public static function getCultureEncoding(string $languageId) : ?string
    {
    }
    /**
     * Returns list of all languages in the site settings.
     *
     * @return string[]
     */
    public static function getLanguages() : array
    {
    }
    /**
     * Returns list of enabled languages in the site settings.
     *
     * @return string[]
     */
    public static function getEnabledLanguages() : array
    {
    }
    /**
     * Returns list of language names from the site settings.
     *
     * @param string[] $languageIds Languages list to get name.
     *
     * @return array
     */
    public static function getLanguagesTitle($languageIds) : array
    {
    }
    /**
     * Returns list of available in system translation languages.
     *
     * @return string[]
     */
    public static function getAvailableLanguages() : array
    {
    }
    /**
     * Returns list of available default translation languages.
     *
     * @return string[]
     */
    public static function getAvailableDefaultLanguages() : array
    {
    }
    /**
     * Returns list of available in system translation languages.
     *
     * @return string[]
     */
    public static function getTranslationRepositoryLanguages() : array
    {
    }
    /**
     * Folders list allowed to translation edit.
     *
     * @return string[]
     */
    public static function getInitPath() : array
    {
    }
    /**
     * Returns the default translation folder path.
     *
     * @return string
     */
    public static function getDefaultPath() : string
    {
    }
    /**
     * Returns setting of necessity to backup language files.
     *
     * @return bool
     */
    public static function needToBackUpFiles() : bool
    {
    }
    /**
     * Returns disposition of backup folder for backuped language files.
     *
     * @return string
     */
    public static function getBackupFolder() : string
    {
    }
    /**
     * Returns setting of necessity to sort phrases in language files.
     *
     * @return bool
     */
    public static function needToSortPhrases() : bool
    {
    }
    /**
     * Returns list of languages in that is unnecessary to sort phrases.
     *
     * @return string[]
     */
    public static function getNonSortPhraseLanguages() : array
    {
    }
    /**
     * Returns disposition of the asset or export folder.
     *
     * @return string|null
     */
    public static function getExportFolder() : ?string
    {
    }
}