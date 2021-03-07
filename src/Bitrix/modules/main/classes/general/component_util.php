<?php

class CComponentUtil
{
    public static function __IncludeLang($filePath, $fileName, $lang = \false)
    {
    }
    public static function PrepareVariables(&$arData)
    {
    }
    public static function __ShowError($errorMessage)
    {
    }
    public static function __BuildTree($arPath, &$arTree, &$arComponent, $level = 1)
    {
    }
    public static function isComponent($componentPath)
    {
    }
    public static function __GetComponentsTree($filterNamespace = \false, $arNameFilter = \false, $arFilter = \false)
    {
    }
    public static function __TreeFolderCompare($a, $b)
    {
    }
    public static function __TreeItemCompare($a, $b)
    {
    }
    public static function __SortComponentsTree(&$arTree)
    {
    }
    public static function GetComponentsTree($filterNamespace = \false, $arNameFilter = \false, $arFilter = \false)
    {
    }
    public static function GetNamespaceList()
    {
    }
    public static function GetComponentDescr($componentName)
    {
    }
    public static function __GroupParamsCompare($a, $b)
    {
    }
    /**
     * @param string $componentName
     * @param array $arCurrentValues Don't change the name! It's used in the .parameters.php file.
     * @param array $templateProperties
     * @return array|bool
     */
    public static function GetComponentProps($componentName, $arCurrentValues = array(), $templateProperties = array())
    {
    }
    /**
     * @param string $componentName
     * @param string $templateName
     * @param string $siteTemplate
     * @param array $arCurrentValues Don't change the name! It's used in the .parameters.php file.
     * @return array
     */
    public static function GetTemplateProps($componentName, $templateName, $siteTemplate = "", $arCurrentValues = array())
    {
    }
    public static function GetTemplatesList($componentName, $currentTemplate = \false)
    {
    }
    public static function CopyComponent($componentName, $newNamespace, $newName = \false, $bRewrite = \false)
    {
    }
    public static function CopyTemplate($componentName, $templateName, $siteTemplate, $newSiteTemplate, $newName = \false, $bRewrite = \false)
    {
    }
    public static function CheckComponentName($name, $arFilter)
    {
    }
    public static function GetDefaultNameTemplates()
    {
    }
    public static function GetDateFormatField($name = "", $parent = "", $no_year = \false)
    {
    }
    public static function GetDateFormatDefault($no_year = \false)
    {
    }
    public static function GetDateTimeFormatField($name = "", $parent = "")
    {
    }
    public static function GetDateTimeFormatDefault()
    {
    }
    public static function GetDateTimeFormatted($timestamp, $dateTimeFormat = \false, $offset = 0, $hideToday = \false)
    {
    }
}