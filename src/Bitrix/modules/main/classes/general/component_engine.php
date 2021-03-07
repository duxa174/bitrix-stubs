<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class CComponentEngine
{
    public $cacheSalt = '';
    private $component = \null;
    private $greedyParts = array();
    private $resolveCallback = \false;
    /**
     * Constructor.
     *
     * <p>Takes component as parameter and initializing the object.</p>
     * @param CBitrixComponent $component
     */
    function __construct($component = \null)
    {
    }
    /**
     * Returns associated component.
     *
     * @return CBitrixComponent
     *
     */
    public function getComponent()
    {
    }
    /**
     * Marks one of the page templates parts as greedy (may contain "/" separator).
     *
     * @param string $part
     * @return void
     *
     */
    public function addGreedyPart($part)
    {
    }
    /**
     * Registers callback with will be called on page indetermination.
     *
     * @param callback $resolveCallback
     * @return void
     *
     */
    public function setResolveCallback($resolveCallback)
    {
    }
    /**
     * Checks if component name is valid.
     *
     * <p>Component name consists of namespace part, separator and name. Example: bitrix:news.list</p>
     * @param string $componentName
     * @return bool
     *
     */
    public static function checkComponentName($componentName)
    {
    }
    /**
     * Makes filesystem relative path out of com name.
     *
     * @param string $componentName
     * @return string
     *
     */
    public static function makeComponentPath($componentName)
    {
    }
    /**
     * Checks if page template has templates in it.
     *
     * @param string $pageTemplate
     * @return bool
     *
     */
    public function hasNoVariables($pageTemplate)
    {
    }
    /**
     * Checks if page template.has greedy templates it it.
     *
     * @param string $pageTemplate
     * @return bool
     *
     */
    public function hasGreedyParts($pageTemplate)
    {
    }
    /**
     * Sorts templates for inspection.
     *
     * <p>First will be templates without any variables. Then templates without greedy parts. Then greedy ones.</p>
     * @param array[string]string $arUrlTemplates
     * @param bool &$bHasGreedyPartsInTemplates
     * @return array[string]string
     *
     */
    protected function sortUrlTemplates($arUrlTemplates, &$bHasGreedyPartsInTemplates)
    {
    }
    /**
     * Checks if page template matches current URL.
     *
     * <p>In case of succsessful match fills in parsed variables.</p>
     * @param string $pageTemplate
     * @param string $currentPageUrl
     * @param array[string]string &$arVariables
     * @return bool
     *
     */
    protected function __checkPath4Template($pageTemplate, $currentPageUrl, &$arVariables)
    {
    }
    /**
     * Finds match between requestURL and on of the url templates.
     *
     * @param string $folder404
     * @param array[string]string $arUrlTemplates
     * @param array[string]string &$arVariables
     * @param string|bool $requestURL
     * @return string
     *
     */
    public static function parseComponentPath($folder404, $arUrlTemplates, &$arVariables, $requestURL = \false)
    {
    }
    /**
     * Finds match between requestURL and on of the url templates.
     *
     * <p>Lets using the engine object and greedy templates.</p>
     * @param string $folder404
     * @param array[string]string $arUrlTemplates
     * @param array[string]string &$arVariables
     * @param string|bool $requestURL
     * @return string
     *
     */
    public function guessComponentPath($folder404, $arUrlTemplates, &$arVariables, $requestURL = \false)
    {
    }
    /**
     * Initializes component variables from $_REQUEST based on component page selected.
     *
     * @param string $componentPage
     * @param array[string]string $arComponentVariables
     * @param array[string]string $arVariableAliases
     * @param array[string]string &$arVariables
     * @return void
     *
     */
    public static function initComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, &$arVariables)
    {
    }
    /**
     * Prepares templates based on default and provided.
     *
     * @param array[string]string $arDefaultUrlTemplates
     * @param array[string]string $arCustomUrlTemplates
     * @return array[string]string
     *
     */
    public static function makeComponentUrlTemplates($arDefaultUrlTemplates, $arCustomUrlTemplates)
    {
    }
    /**
     * Prepares variables based on default and provided.
     *
     * @param array[string]string $arDefaultVariableAliases
     * @param array[string]string $arCustomVariableAliases
     * @return array[string]string
     *
     */
    public static function makeComponentVariableAliases($arDefaultVariableAliases, $arCustomVariableAliases)
    {
    }
    /**
     * Replaces templates in provided string based on parameters
     *
     * @param string $template
     * @param array[string]string $arParams
     * @return string
     *
     */
    public static function makePathFromTemplate($template, $arParams = array())
    {
    }
}