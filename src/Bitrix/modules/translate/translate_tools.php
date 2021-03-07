<?php

/**
 * @deprecated
 */
class CTranslateEventHandlers
{
    /**
     * @deprecated
     */
    function TranslatOnPanelCreate()
    {
    }
}
/**
 * @deprecated
 */
class CTranslateUtils
{
    const LANGUAGES_DEFAULT = 0;
    const LANGUAGES_EXIST = 1;
    const LANGUAGES_ACTIVE = 2;
    const LANGUAGES_CUSTOM = 3;
    protected static $languageList = array("ru", "en", "de", "ua");
    public static function setLanguageList($languages = self::LANGUAGES_DEFAULT, $customList = array())
    {
    }
    public static function CopyMessage($code, $fileFrom, $fileTo, $newCode = '')
    {
    }
    public static function FindAndCopy($sourceDir, $lang, $pattern, $destinationFile)
    {
    }
}
/**
 * @param $arDirs
 * @param bool $showTranslationDifferences
 *
 * @global array $arLangDirs
 *
 * @return void
 * @deprecated
 */
function GetLangDirs($arDirs, $showTranslationDifferences = \false)
{
}
/**
 * Loads file-folder structure into memory.
 *
 * @param string $path
 * @param bool $subDirs Recursively pass through into sub folders.
 * @param string[] $restructLanguageList Restrict language list.
 *
 * @global array $arDirs
 * @global array $arFiles
 *
 * @return bool
 * @deprecated
 */
function GetTDirList($path, $subDirs = \false, $restructLanguageList = array())
{
}
/**
 * Collects phrases form files into array and convert encoding.
 *
 * @param string $filterKeyIndex Phrase key code.
 * @param string $targetEncoding Target encoding.
 * @param string[] $restructLanguageList Restrict language list.
 *
 * @global array $arFiles
 *
 * @return array
 * @deprecated
 */
function GetTCSVArray($filterKeyIndex, $targetEncoding = '', $restructLanguageList = array())
{
}
/**
 * @param string $filePath
 * @param string $encodingIn
 * @param bool $rewriteMode
 * @param bool $mergeMode
 * @param string[] &$errors
 * @return bool
 * @deprecated
 */
function SaveTCSVFile($filePath, $encodingIn, $rewriteMode, $mergeMode, &$errors)
{
}
/**
 * @param $path
 * @param bool $IS_LANG_DIR
 *
 * @global array $arTLangs
 * @global array $arFiles
 * @global array $arDirFiles
 * @global array $arLangDirFiles
 * @deprecated
 */
function GetTLangFiles($path, $IS_LANG_DIR = \false)
{
}
/**
 * @param array $arFile Path
 * @param int &$count Count of coincidences
 *
 * @return bool
 * @throws Main\IO\FileNotFoundException
 * @deprecated
 */
function TSEARCH($arFile, &$count)
{
}
/**
 * @param $langFile
 *
 * @return bool
 * @deprecated
 */
function TR_BACKUP($langFile)
{
}
/**
 * @param array $arCommon
 * @param string $path
 * @param string $key
 * @param array $enabledLanguages
 *
 * @global array $arCommonCounter
 * @global int $Counter
 *
 * @return void
 * @deprecated
 */
function GetPhraseCounters($arCommon, $entry, $enabledLanguages)
{
}
/**
 * @param string $masterLanguage
 * @param array $listIds
 * @param array $errorCollection
 *
 * @return bool
 * @deprecated
 */
function removePhrasesByMasterFile($masterLanguage, $listIds, &$errorCollection)
{
}
/**
 * @param string $langFileName
 * @param array $phrases
 * @param array $errorCollection
 *
 * @return bool
 * @throws Main\IO\FileNotFoundException
 * @deprecated
 */
function saveTranslationFile($langFileName, $phrases, &$errorCollection)
{
}