<?php

class CUpdateSystem
{
    public static function IsInCommonKernel()
    {
    }
    /** Подписка на информацию об обновлениях **/
    public static function SubscribeUpdates($strEmails, &$strError, $lang = \false)
    {
    }
    /** Активирует лицензионный ключ **/
    public static function AddSites($strCheck, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    /** Активирует лицензионный ключ **/
    public static function ActivateLicenseKey($arFields, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Регистрирует копию продукта, если можно
    public static function RegisterVersion(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Обновляет систему обновлений
    public static function UpdateUpdate(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Закачивает исходники продукта, если можно
    public static function LoadSources(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Возвращает, что обновилось
    public static function GetAvailableUpdateTypes(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Возвращает информацию по доступным обновлениям модулей на сервере
    public static function GetServerModuleUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Возвращает информацию по доступным языкам на сервере
    public static function GetServerLangsUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Возвращает информацию по доступным языкам на сервере
    public static function GetServerHelpUpdates(&$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Загружает обновление модулей $arModules в файл update_archive.gz
    public static function LoadModuleUpdates($arModules, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Загружает обновления языков $arLangs в файл update_archive.gz
    public static function LoadLangsUpdates($arLangs, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Загружает обновление помощи $load_help в файл update_archive.gz
    public static function LoadHelpUpdates($arHelp, &$strError, $lang = \false, $stableVersionsOnly = "Y")
    {
    }
    // Распаковывает архив файлов update_archive.gz в папкy $updates_dir
    public static function UnGzipArchive(&$updates_dir, &$strError, $DelArch = "Y")
    {
    }
    // Проверяет возможность обновления модулей $arModules
    // на основании контроля версий VERSION_CONTROL
    public static function CheckVersions(&$arRes, &$strError, $arSelectedModules = \false)
    {
    }
    // Возвращает информацию по загруженным в папку $updates_dir обновлениям модулей
    public static function CheckUpdatability($updates_dir, &$strError)
    {
    }
    public static function CheckFolderUpdatability($destFolder, $srcFolder, &$strError)
    {
    }
    // Возвращает информацию по загруженным в папку $updates_dir обновлениям модулей
    public static function GetLoadedModuleUpdates($updates_dir, &$strError)
    {
    }
    // Возвращает информацию по загруженным в папку $updates_dir обновлениям языков
    public static function GetLoadedLangsUpdates($updates_dir, &$strError)
    {
    }
    // Возвращает информацию по загруженным в папку $updates_dir обновлениям помощи
    public static function GetLoadedHelpUpdates($updates_dir, &$strError)
    {
    }
    // Обновляет модули $arModules продукта из папки $updates_dir
    public static function UpdateKernel($updates_dir, $arModules, &$strError, &$arErrorModules, &$arSuccessModules)
    {
    }
    // Обновляет модули $arLangs продукта из папки $updates_dir
    public static function UpdateLangs($updates_dir, $arLangs, &$strError, &$arErrorLangs, &$arSuccessLangs)
    {
    }
    // Обновляет систему помощи продукта из папки $updates_dir
    public static function UpdateHelp($updates_dir, $arHelp, &$strError, &$arErrorHelp, &$arSuccessHelp)
    {
    }
    public static function Report2Server($arServerReport)
    {
    }
    /*******************************************************************/
    /********   ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ   ******************************/
    /*******************************************************************/
    /** Проверяет на ошибки ответ сервера $strServerOutput **/
    /** и парсит в массив $arRes                           **/
    public static function ParseServerData(&$strServerOutput, &$arRes, &$strError)
    {
    }
    /** Сравнение двух версий в формате XX.XX.XX  **/
    /** Возвращает 1, если $strVers1 > $strVers2  **/
    /** Возвращает -1, если $strVers1 < $strVers2 **/
    /** Возвращает 0, если $strVers1 == $strVers2 **/
    public static function CompareVersions($strVers1, $strVers2)
    {
    }
    /** Пишет сообщения в лог файл системы обновлений. Чистит лог, если нужно. **/
    public static function AddMessage2Log($sText, $sErrorCode = "")
    {
    }
    /** Собирает из массива модулей строку запроса **/
    public static function ModulesArray2Query($arClientModules, $pref = "bitm_")
    {
    }
    /** Собирает клиентские модули с версиями **/
    public static function GetModules(&$strError, $arSelected = \false)
    {
    }
    /** Собирает клиентские языки с датами **/
    public static function GetLanguages(&$strError, $arSelected = \false)
    {
    }
    /** Собирает клиентские help'ы с датами **/
    public static function GetHelps(&$strError, $arSelected = \false)
    {
    }
    public static function GetFooPath($path)
    {
    }
    public static function GetModuleVersion($module)
    {
    }
    /** Возвращает экземпляр класса-инсталятора модуля по абсолютному пути $path **/
    public static function GetModuleInfo($path)
    {
    }
    /** Запрашивает методом POST страницу $page со списком параметров **/
    /** $strVars и возвращает тело ответа. В параметре $strError      **/
    /** возвращается текст ошибки, если таковая была.                 **/
    public static function getHTTPPage($page, $strVars, &$strError)
    {
    }
    /** Проверка на установку GZip компрессии **/
    public static function IsGzipInstalled()
    {
    }
    /** Создание путя, если его нет, и установка прав писать **/
    public static function CheckDirPath($path, $bPermission = \true)
    {
    }
    /** Рекурсивное копирование из $path_from в $path_to **/
    public static function CopyDirFiles($path_from, $path_to, &$strError)
    {
    }
    /** Рекурсивное удаление $path **/
    public static function DeleteDirFilesEx($path)
    {
    }
    /** Удаляет старые временные папки, оставляя последние $iCnt **/
    public static function EraseOldFolders($iCnt = 1)
    {
    }
    /** Запускает updater модуля **/
    public static function RunUpdaterScript($path, &$strError, $from_dir, $moduleID)
    {
    }
    /** Получение лицензионного ключа текущего клиента **/
    public static function GetLicenseKey()
    {
    }
    public static function getmicrotime()
    {
    }
    public static function InsertSpaces($sText, $iMaxChar = 80)
    {
    }
    public static function CheckEMail($email)
    {
    }
    public static function GetDateFormat($strDBFormat = \false)
    {
    }
    /** Получение правильного окончания при выводе слова "обновление" **/
    public static function NumberEndings($num, $lang = \false, $arEnds = \false)
    {
    }
    public static function FooMakePath()
    {
    }
    public static function bxstrrpos($haystack, $needle)
    {
    }
}
/**********************************************************************/
/*********   CUpdatesXMLNode   ****************************************/
/**********************************************************************/
class CUpdatesXMLNode
{
    var $name;
    // Name of the node
    var $content;
    // Content of the node
    var $children;
    // Subnodes
    var $attributes;
    // Attributes
    public function __construct()
    {
    }
    function &__toString()
    {
    }
    function &__toArray()
    {
    }
}
/**********************************************************************/
/*********   CUpdatesXMLDocument   ******************************************/
/**********************************************************************/
class CUpdatesXMLDocument
{
    var $version;
    // XML version
    var $encoding;
    // XML encoding
    var $children;
    var $root;
    public function __construct()
    {
    }
    /* Returns a XML string of the DOM document */
    function &__toString()
    {
    }
    /* Returns an array of the DOM document */
    function &__toArray()
    {
    }
}
/**********************************************************************/
/*********   CUpdatesXML   **************************************************/
/**********************************************************************/
class CUpdatesXML
{
    var $tree;
    var $TrimWhiteSpace;
    public function __construct($TrimWhiteSpace = \True)
    {
    }
    function Load($file)
    {
    }
    function LoadString($text)
    {
    }
    function &GetTree()
    {
    }
    function &GetArray()
    {
    }
    function &GetString()
    {
    }
    function &SelectNodes($strNode)
    {
    }
    /* Will return an DOM object tree from the well formed XML. */
    function &__parse(&$strXMLText)
    {
    }
    function __stripComments(&$str)
    {
    }
    /* Parses the attributes. Returns false if no attributes in the supplied string is found */
    function &__parseAttributes($attributeString)
    {
    }
}
/************************************************************************/
/********************* Класс для UPDATER'А ******************************/
/************************************************************************/
class CUpdater
{
    var $errorMessage;
    var $curPath;
    // Путь к скрипту updater (без имени скрипта) относительно корня сайта
    var $curModulePath;
    // Путь к папке с обновлениями модуля
    var $dbType;
    // Тип базы данных
    var $updater;
    // Путь к скрипту updater (c именем скрипта) относительно корня сайта
    var $moduleID;
    // Модуль
    var $callType;
    // Прямой вызов (ALL - все, KERNEL - ядро, PERSONAL - персональные файлы, DATABASE - база данных  // DB=PERSONAL+DATABASE)
    var $kernelPath;
    // Путь к ядру
    function Init($curPath, $dbType, $updater, $curDir, $moduleID, $callType = "ALL")
    {
    }
    // Устанавливает все компоненты
    // $arDeleteFiles = array("component.name" => array("/images/1.gif", "/templates/.default/style.css"), "component.name1" => array("/style.css"));
    function InstallComponents($arDeleteFiles = array())
    {
    }
    function __MakeComponentPath($componentName)
    {
    }
    // Устанавливает компонент по его имени
    // $arDeleteFiles - удаляет файлы из массива ( Array("/images/1.gif", "/templates/.default/style.css") )
    function InstallComponent($componentName, $arDeleteFiles = array())
    {
    }
    // Устанавливает все мастера
    // $arDeleteFiles = array("component.name" => array("/images/1.gif", "/templates/.default/style.css"), "component.name1" => array("/style.css"));
    function InstallWizards($arDeleteFiles = array())
    {
    }
    // Устанавливает мастер по его имени
    // $arDeleteFiles - удаляет файлы из массива ( Array("/images/1.gif", "/templates/.default/style.css") )
    function InstallWizard($wizardName, $arDeleteFiles = array())
    {
    }
    function CopyFiles($fromDir, $toDir)
    {
    }
    function CopyDirFiles($fromDir, $toDir)
    {
    }
    function Query($query, $tableName = "")
    {
    }
    function QueryBatch($queryPath, $tableName = "")
    {
    }
    function TableExists($tableName)
    {
    }
    function CanUpdateDatabase()
    {
    }
    function CanUpdateKernel()
    {
    }
    function CanUpdatePersonalFiles()
    {
    }
}