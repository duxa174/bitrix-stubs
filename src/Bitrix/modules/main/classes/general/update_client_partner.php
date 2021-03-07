<?php

class CUpdateClientPartner
{
    public static function RegisterModules(&$strError, $lang = \false, $stableVersionsOnly = \false)
    {
    }
    public static function loadModule4Wizard($moduleId, $lang = \false)
    {
    }
    public static function LoadModuleNoDemand($moduleId, &$strError, $stableVersionsOnly = "Y", $lang = \false)
    {
    }
    public static function SearchModulesEx($arOrder, $arFilter, $searchPage, $lang, &$strError)
    {
    }
    public static function SearchModules($searchModule, $lang)
    {
    }
    /** Пишет сообщения в лог файл системы обновлений. Чистит лог, если нужно. **/
    public static function AddMessage2Log($sText, $sErrorCode = "")
    {
    }
    public static function GetRequestedModules($strAddModule)
    {
    }
    /** Получение лицензионного ключа текущего клиента **/
    public static function GetLicenseKey()
    {
    }
    /* Получить обновления следующего шага */
    public static function GetNextStepUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $bStrongList = \false)
    {
    }
    // Распаковывает архив файлов update_archive.gz в папкy $updatesDir
    public static function UnGzipArchive(&$updatesDir, &$strError, $bDelArch = \true)
    {
    }
    // Возвращает информацию по загруженным в папку $updatesDir обновлениям модулей
    public static function CheckUpdatability($updatesDir, &$strError)
    {
    }
    // Возвращает информацию по загруженным в папку $updatesDir обновлениям модулей
    public static function GetStepUpdateInfo($updatesDir, &$strError)
    {
    }
    public static function __CollectRequestData(&$strError, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $arAdditionalData = array(), $bStrongList = \false)
    {
    }
    /** Собирает клиентские модули с версиями **/
    public static function GetCurrentModules(&$strError)
    {
    }
    /* Получить список доступных обновлений */
    public static function GetUpdatesList(&$strError, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $aditData = array())
    {
    }
    public static function ClearUpdateFolder($updatesDirFull)
    {
    }
    public static function LoadModulesUpdates(&$errorMessage, &$arUpdateDescription, $lang = \false, $stableVersionsOnly = "Y", $arRequestedModules = array(), $bStrongList = \false)
    {
    }
    private static function getAddr($serverIp = \null, $serverPort = \null)
    {
    }
    private static function getSocketError($errstr, $errno, $addrParams)
    {
    }
    private static function loadFileBx($requestedUrl, $realSize, $outputFilename, $timeout, $requestQueryString, &$errorMessage)
    {
    }
    private function loadFile($requestedUrl, $realSize, $outputFilename, $timeout, &$errorMessage)
    {
    }
    public static function UpdateStepModules($updatesDir, &$strError, $bSaveUpdaters = \False)
    {
    }
    public static function ActivateCoupon($coupon, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    /** Запускает updater модуля **/
    public static function __RunUpdaterScript($path, &$strError, $updateDirFrom, $moduleID)
    {
    }
    /** Сравнение двух версий в формате XX.XX.XX  **/
    /** Возвращает 1, если $strVers1 > $strVers2  **/
    /** Возвращает -1, если $strVers1 < $strVers2 **/
    /** Возвращает 0, если $strVers1 == $strVers2 **/
    public static function __CompareVersions($strVers1, $strVers2)
    {
    }
    /** Запрашивает методом POST страницу $page со списком параметров **/
    /** $strVars и возвращает тело ответа. В параметре $strError      **/
    /** возвращается текст ошибки, если таковая была.                 **/
    public static function __GetHTTPPage($page, $strVars, &$strError)
    {
    }
    /** Проверяет на ошибки ответ сервера $strServerOutput **/
    /** и парсит в массив $arRes                           **/
    public static function __ParseServerData(&$strServerOutput, &$arRes, &$strError)
    {
    }
    /** Проверка на установку GZip компрессии **/
    public static function __IsGzipInstalled()
    {
    }
    public static function __GetFooPath()
    {
    }
    public static function __GetFooPath1($v = 0)
    {
    }
    /** Создание путя, если его нет, и установка прав писать **/
    public static function __CheckDirPath($path, $bPermission = \true)
    {
    }
    /** Рекурсивное копирование из $path_from в $path_to **/
    public static function __CopyDirFiles($path_from, $path_to, &$strError, $bSkipUpdater = \True)
    {
    }
    /** Рекурсивное удаление $path **/
    public static function __DeleteDirFilesEx($path)
    {
    }
    public static function __bxstrrpos($haystack, $needle)
    {
    }
    /** Возвращает экземпляр класса-инсталятора модуля по абсолютному пути $path **/
    public static function __GetModuleInfo($path)
    {
    }
    public static function __GetMicroTime()
    {
    }
}