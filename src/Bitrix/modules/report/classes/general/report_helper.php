<?php

abstract class CReportHelper
{
    const UF_DATETIME_SHORT_POSTFIX = '_DTSHORT';
    const UF_TEXT_TRIM_POSTFIX = '_TRIMTX';
    const UF_BOOLEAN_POSTFIX = '_BLINL';
    const UF_MONEY_NUMBER_POSTFIX = '_MNNUMB_FLTR';
    const UF_MONEY_CURRENCY_POSTFIX = '_MNCRCY_FLTR';
    protected static $userNameFormat = \null;
    protected static $arUFId = \null;
    protected static $ufInfo = \null;
    protected static $ufEnumerations = \null;
    protected static $ufFiles = array();
    protected static $ufEmployees = array();
    protected static $ufDiskFiles = array();
    protected static $ufCrmElements = array();
    protected static $ufCrmStatuses = array();
    protected static $ufIblockElements = array();
    protected static $ufIblockSections = array();
    public static function getEntityName()
    {
    }
    public static function getOwnerId()
    {
    }
    public static function getColumnList()
    {
    }
    public static function getAlternatePhrasesOfColumns()
    {
    }
    public static function getDefaultColumns()
    {
    }
    public static function getPeriodFilter($date_from, $date_to)
    {
    }
    protected static function prepareUFInfo()
    {
    }
    public static function &getUFInfo()
    {
    }
    protected static function prepareUFEnumerations($usedUFMap = \null)
    {
    }
    public static function &getUFEnumerations($usedUFMap = \null)
    {
    }
    public static function detectUserField($field)
    {
    }
    public static function getUserFieldDataType($arUF)
    {
    }
    public static function getFieldDataType($field)
    {
    }
    public static function getUserFieldEnumerationValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldFileValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldFileValueForChart($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldDiskFileValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldDiskFileValueForChart($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldEmployeeValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldEmployeeValueForChart($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldCrmValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldCrmValueForChart($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldCrmStatusValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldIblockElementValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldIblockElementValueForChart($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldIblockSectionValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldIblockSectionValueForChart($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldMoneyValue($valueKey, $ufInfo)
    {
    }
    public static function getUserFieldMoneyValueForChart($valueKey, $ufInfo)
    {
    }
    public static function setRuntimeFields(\Bitrix\Main\Entity\Base $entity, $sqlTimeInterval)
    {
    }
    public static function getCustomColumnTypes()
    {
    }
    public static function getGrcColumns()
    {
    }
    public static function getCalcVariations()
    {
    }
    public static function getCompareVariations()
    {
    }
    public static function getFiltrableColumnGroups()
    {
    }
    public static function buildHTMLSelectTreePopup($tree, $withReferencesChoose = \false, $level = 0)
    {
    }
    public static function buildSelectTreePopupElelemnt($humanTitle, $fullHumanTitle, $fieldDefinition, $fieldType, $ufInfo = array())
    {
    }
    public static function getCustomSelectFields($select, $fList)
    {
    }
    public static function fillFilterReferenceColumns(&$filters, &$fieldList)
    {
    }
    public static function fillFilterReferenceColumn(&$filterElement, \Bitrix\Main\Entity\ReferenceField $field)
    {
    }
    public static function fillFilterUFColumns(&$filters, &$fieldList)
    {
    }
    public static function fillFilterUFColumn(&$filterElement, $field, $ufInfo)
    {
    }
    public static function beforeFilterBackReferenceRewrite(&$filter, $viewColumns)
    {
    }
    public static function getEntityFilterPrimaryFieldName($fElem)
    {
    }
    public static function confirmFilterBackReferenceRewrite($fElem, $chain)
    {
    }
    public static function confirmSelectBackReferenceRewrite($elem, $chain)
    {
    }
    public static function beforeViewDataQuery(&$select, &$filter, &$group, &$order, &$limit, &$options, &$runtime = \null)
    {
    }
    public static function rewriteResultRowValues(&$row, &$columnInfo)
    {
    }
    public static function collectUFValues($rows, $columnInfo, $total)
    {
    }
    public static function formatResults(&$rows, &$columnInfo, $total)
    {
    }
    public static function formatResultValue($k, &$v, &$row, &$cInfo, $total, &$customChartValue = \null)
    {
    }
    public static function formatResultsTotal(&$total, &$columnInfo, &$customChartTotal = \null)
    {
    }
    public static function getDefaultElemHref($elem, $fList)
    {
    }
    public static function getDefaultReports()
    {
    }
    public static function getFirstVersion()
    {
    }
    public static function getCurrentVersion()
    {
    }
    public static function setUserNameFormat($userNameFormat)
    {
    }
    public static function getUserNameFormat()
    {
    }
    public static function renderUserSearch($id, $searchInputId, $dataInputId, $componentName, $siteId = '', $nameFormat = '', $delay = 0)
    {
    }
}