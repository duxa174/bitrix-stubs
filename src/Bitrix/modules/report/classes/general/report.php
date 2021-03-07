<?php

class CReport
{
    protected static $totalCountableAggrFuncs = ['SUM', 'COUNT_DISTINCT', 'AVG', 'MAX', 'MIN'];
    protected static $alternateColumnPhrases = \null;
    public static $iBlockCompareVariations = array('EQUAL' => '=', 'GREATER_OR_EQUAL' => '>=', 'GREATER' => '>', 'LESS' => '<', 'LESS_OR_EQUAL' => '<=', 'NOT_EQUAL' => '!', 'START_WITH' => '>%', 'CONTAINS' => '%', 'NOT_CONTAINS' => '!%', 'BETWEEN' => '><', 'NOT_BETWEEN' => '!><');
    public static function Add($settings)
    {
    }
    public static function Update($ID, $settings)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetList($owner = '')
    {
    }
    public static function setViewParams($id, $templateName, $strParams)
    {
    }
    public static function getViewParams($id, $templateName)
    {
    }
    public static function clearViewParams($id)
    {
    }
    public static function GetCountInt($owner = '')
    {
    }
    public static function generateChains($strChains, $initEntity, $initKey)
    {
    }
    protected static function initializeAlternateColumnPhrases($helperClass)
    {
    }
    public static function isAlternateColumnPhraseExists($helperClass, $messageCode)
    {
    }
    public static function getAlternateColumnPhrase($helperClass, $messageCode)
    {
    }
    public static function generateColumnTree($chains, $initEntity, $helper_class, $level = 0)
    {
    }
    protected static function attachLangToColumnTree(&$tree, $initEntity, $helperClass, $preTitle = array())
    {
    }
    /** @deprecated 14.5.5 Method moved into a helper class */
    public static function fillFilterReferenceColumns(&$filters, &$fieldList, $helperClass)
    {
    }
    /**
     * Detecting a cyclic dependency in the report column.
     *
     * @param $select
     * @param $elemIndex
     *
     * @return bool
     */
    public static function checkSelectViewElementCyclicDependency($select, $elemIndex)
    {
    }
    /**
     * @param                     $elem
     * @param                     $select
     * @param                     $isInitEntityAggregated
     * @param                     $fList
     * @param Entity\QueryChain[] $fChainList
     * @param                     $helperClassName
     * @param Entity\Base         $entity
     *
     * @return array
     */
    public static function prepareSelectViewElement($elem, $select, $isInitEntityAggregated, $fList, $fChainList, $helperClassName, \Bitrix\Main\Entity\Base $entity)
    {
    }
    public static function getFullColumnTitle($view, $viewColumns, $fullHumanTitles)
    {
    }
    public static function isColumnPercentable($view, $helperClassName)
    {
    }
    public static function getTotalCountableAggregationFunctions()
    {
    }
    public static function isTotalCountableAggregationFunction($aggr)
    {
    }
    public static function isColumnTotalCountable($view, $helperClassName)
    {
    }
    public static function appendHrefSelectElements(&$elem, $fList, $entity, $helper_class, &$select, &$runtime)
    {
    }
    public static function generateValueUrl($elem, $dataRow, $entity)
    {
    }
    public static function rewriteUserShortName(&$select, &$runtime, $format, $entity, $grc = \false)
    {
    }
    public static function getUniqueFieldsByTree($tree)
    {
    }
    public static function isValidFilterCompareVariation($fDefinition, $fType, $variation, $variations)
    {
    }
    public static function addFreshDefaultReports($vReports, $ownerId)
    {
    }
    public static function sqlizeFilter($filter)
    {
    }
    public static function makeSingleFilter($filter)
    {
    }
    public static function collectFullHumanTitles($tree)
    {
    }
    public static function getFormattedNameExpr($format, $defPrefix)
    {
    }
}
class BXUserException extends \Bitrix\Main\SystemException
{
}
class BXFormException extends \Bitrix\Main\SystemException
{
}