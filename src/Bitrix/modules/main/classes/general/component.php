<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class CBitrixComponent
{
    public $__name = "";
    private $__relativePath = "";
    public $__path = "";
    private $__templateName = "";
    public $__templatePage = "";
    /** @var CBitrixComponentTemplate */
    public $__template = \null;
    private $__component_epilog = \false;
    public $arParams = array();
    public $arResult = array();
    /** @var array */
    public $arResultCacheKeys = \false;
    /** @var CBitrixComponent */
    public $__parent = \null;
    private $__bInited = \false;
    private $__arIncludeAreaIcons = array();
    private $__NavNum = \false;
    /** @var CPHPCache */
    private $__cache = \null;
    private $__cacheID = "";
    private $__cachePath = "";
    private $__children_css = array();
    private $__children_js = array();
    private $__children_epilogs = array();
    /** @var \Bitrix\Main\Composite\StaticArea[] */
    private $__children_frames = array();
    private $__view = array();
    private static $__componentCounter = array();
    private $__currentCounter = 0;
    private $__currentCounters = array();
    private $__editButtons = array();
    private static $__classes_map = array();
    private static $classes = array();
    private $classOfComponent = "";
    private $randomSequence = \null;
    private $frameMode = \null;
    /** @var  \Bitrix\Main\HttpRequest */
    protected $request;
    private $siteId = \false;
    private $siteTemplateId = \false;
    private $languageId = \false;
    /** @var string|null */
    protected $signedParameters;
    /**
     * Event called from includeComponent before component execution.
     *
     * <p>Takes component parameters as argument and should return it formatted as needed.</p>
     * @param array[string]mixed $arParams
     * @return array[string]mixed
     *
     */
    public function onPrepareComponentParams($arParams)
    {
    }
    /**
     * Event called from includeComponent before component execution.
     *
     * <p>Includes component.php from within lang directory of the component.</p>
     * @return void
     *
     */
    public function onIncludeComponentLang()
    {
    }
    /**
     * Function calls __includeComponent in order to execute the component.
     *
     * @return mixed
     *
     */
    public function executeComponent()
    {
    }
    /**
     * Constructor with ability to copy the component.
     *
     * @param CBitrixComponent $component
     */
    public function __construct($component = \null)
    {
    }
    /**
     * Function returns component name in form bitrix:component.name
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     *
     */
    public final function getName()
    {
    }
    /**
     * Function returns path to component in form /bitrix/component.name
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     *
     */
    public final function getRelativePath()
    {
    }
    /**
     * Function returns path to component relative to Web server DOCUMENT_ROOT in form /bitrix/components/bitrix/component.name
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     *
     */
    public final function getPath()
    {
    }
    /**
     * Function returns the name of the template
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     *
     */
    public final function getTemplateName()
    {
    }
    /**
     * Function sets the name of the template. Returns true on success.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $templateName
     * @return bool
     *
     */
    public final function setTemplateName($templateName)
    {
    }
    /**
     * @param string $siteTemplateId
     */
    public function setSiteTemplateId($siteTemplateId)
    {
    }
    /**
     * @return mixed
     */
    public function getSiteTemplateId()
    {
    }
    /**
     * @param string $siteId
     */
    public function setSiteId($siteId)
    {
    }
    /**
     * @return mixed
     */
    public function getSiteId()
    {
    }
    /**
     * @param string $languageId
     */
    public function setLanguageId($languageId)
    {
    }
    /**
     * @return mixed
     */
    public function getLanguageId()
    {
    }
    /**
     * Returns signed parameters.
     * The list contains parameters which are presented in  \CBitrixComponent::listKeysSignedParameters().
     *
     * @see \CBitrixComponent::listKeysSignedParameters()
     *
     * @return string|null
     */
    public final function getSignedParameters()
    {
    }
    /**
     * Sings and stores parameters.
     *
     * @param array $params Parameters of component.
     *
     * @return $this
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    private function storeSignedParameters(array $params)
    {
    }
    /**
     * List of keys of parameters which the component have to sign,
     *
     * @return null|array
     */
    protected function listKeysSignedParameters()
    {
    }
    /**
     * Function returns the template page witch was set with initComponentTemplate
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     *
     */
    public final function getTemplatePage()
    {
    }
    /**
     * Function returns the template object
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return CBitrixComponentTemplate
     *
     */
    public final function getTemplate()
    {
    }
    /**
     * Function returns the parent component (if exists)
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return CBitrixComponent
     *
     */
    public final function getParent()
    {
    }
    /**
     * Function returns current template css files or null if there is no template.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return array[string][int]string
     *
     */
    public final function getTemplateCachedData()
    {
    }
    /**
     * Function applies collection of the css files to the current template.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param array[string][int]string $templateCachedData
     * @return void
     *
     */
    public final function setTemplateCachedData($templateCachedData)
    {
    }
    /**
     * Function includes class of the component by component name bitrix:component.base
     *
     * @param string $componentName
     * @return string
     *
     */
    public static final function includeComponentClass($componentName)
    {
    }
    /**
     * Function returns class name of the component by it's path.
     *
     * <p>At first class.php is checked and if exists then included.
     * Then if there is subsclass of CBitrixComponent found? it's name is returned.</p>
     * @param string $componentPath
     * @return string
     *
     */
    private final function __getClassForPath($componentPath)
    {
    }
    /**
     * Function initializes the component. Returns true on success.
     *
     * <p>It is absolutly necessery to call this function before any component usage.</p>
     * @param string $componentName
     * @param string|bool $componentTemplate
     * @return bool
     *
     */
    public final function initComponent($componentName, $componentTemplate = \false)
    {
    }
    /**
     * Helper function for component parameters safe html escaping.
     *
     * @param array[string]mixed &$arParams
     * @return void
     *
     */
    public final function __prepareComponentParams(&$arParams)
    {
    }
    /**
     * Function includes language files from within the component directory.
     *
     * <p>For example: $this->includeComponentLang("ajax.php") will include "lang/en/ajax.php" file. </p>
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $relativePath
     * @param string|bool $lang
     * @return void
     *
     */
    public final function includeComponentLang($relativePath = "", $lang = \false)
    {
    }
    /**
     * Function includes component.php file thus executing the component. Returns what component.php returns.
     *
     * <p>Before include there is some helper variables made available for component.php scope.</p>
     * <p>Note: component must be inited by initComponent method.</p>
     * @return mixed
     *
     */
    protected final function __includeComponent()
    {
    }
    /**
     * Function executes the component. Returns the result of it's execution.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $componentTemplate
     * @param array[string]mixed $arParams
     * @param CBitrixComponent $parentComponent
     * @return mixed
     *
     */
    public final function includeComponent($componentTemplate, $arParams, $parentComponent, $returnResult = \false)
    {
    }
    /**
     * Function executes the template.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $templatePage
     * @param string $customTemplatePath
     * @return void
     *
     */
    public final function includeComponentTemplate($templatePage = "", $customTemplatePath = "")
    {
    }
    /**
     * Function initializes the template of the component. Returns true on success.
     *
     * <p>Instansiates the template object and calls it's init function.</p>
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $templatePage
     * @param string|bool $siteTemplate
     * @param string $customTemplatePath
     * @return bool
     *
     */
    public final function initComponentTemplate($templatePage = "", $siteTemplate = \false, $customTemplatePath = "")
    {
    }
    /**
     * Function executes initialized template of the component.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return void
     *
     */
    public final function showComponentTemplate()
    {
    }
    /**
     * Function adds an Icon to the component area in the editing mode.
     *
     * @param array[string]mixed $arIcon
     * @return void
     *
     */
    public final function addIncludeAreaIcon($arIcon)
    {
    }
    /**
     * Function replaces Icons displayed for the component by an collection.
     *
     * @param array[int][string]mixed $arIcon
     * @return void
     *
     */
    public final function addIncludeAreaIcons($arIcons)
    {
    }
    /**
     * Function returns the collection of the Icons displayed for the component.
     *
     * @return array[int][string]mixed
     *
     */
    public final function getIncludeAreaIcons()
    {
    }
    /**
     * Function returns an cache identifier based on component parameters and environment.
     *
     * @param mixed $additionalCacheID
     * @return string
     */
    public function getCacheID($additionalCacheID = \false)
    {
    }
    /**
     * Function starts the caching block of the component execution.
     *
     * @param int|bool $cacheTime
     * @param mixed $additionalCacheID
     * @param string|bool $cachePath
     * @return string
     *
     */
    public final function startResultCache($cacheTime = \false, $additionalCacheID = \false, $cachePath = \false)
    {
    }
    /**
     * Function ends the caching block of the component execution.
     *
     * <p>Note: automaticly called by includeComponentTemplate.</p>
     * @return void
     *
     */
    public final function endResultCache()
    {
    }
    /**
     * Function aborts the cache after it's start.
     *
     * <p>Note: must be called if component returns before endResultCache or includeComponentTemplate called.</p>
     * @return void
     *
     */
    public final function abortResultCache()
    {
    }
    /**
     * Function deletes the cache created before.
     *
     * <p>Note: parameters must exactly match to startResultCache call.</p>
     * @param mixed $additionalCacheID
     * @param string|bool $cachePath
     * @return void
     *
     */
    public final function clearResultCache($additionalCacheID = \false, $cachePath = \false)
    {
    }
    /**
     * Function clears entire component cache.
     *
     * <p>Note: parameters must exactly match to startResultCache call.</p>
     * @param string $componentName
     * @param string $siteId
     * @return void
     *
     */
    public static final function clearComponentCache($componentName, $siteId = "")
    {
    }
    /**
     * Function returns component cache path.
     *
     * @return string
     *
     */
    public final function getCachePath()
    {
    }
    /**
     * Function marks the arResult keys to be saved to cache. Just like __sleep magic method do.
     *
     * <p>Note: it's call adds key, not replacing.</p>
     * @param array[int]string $arResultCacheKeys
     * @return void
     *
     */
    public final function setResultCacheKeys($arResultCacheKeys)
    {
    }
    /**
     * Function returns component area id for editing mode.
     *
     * @param string $entryId
     * @return string
     *
     */
    public final function getEditAreaId($entryId)
    {
    }
    /**
     * Function adds an edit action to some area inside the component.
     *
     * @param string $entryId
     * @param string $editLink
     * @param string|bool $editTitle
     * @param array[string]mixed $arParams
     * @return void
     *
     */
    public final function addEditAction($entryId, $editLink, $editTitle = \false, $arParams = array())
    {
    }
    /**
     * Function adds an delete action to some area inside the component.
     *
     * <ul>
     * <li>$arParams['CONFIRM'] = false - disable confirm;
     * <li>$arParams['CONFIRM'] = 'Text' - confirm with custom text;
     * <li>no $arParams['CONFIRM'] at all - confirm with default text
     * </ul>
     * @param string $entryId
     * @param string $deleteLink
     * @param string|bool $deleteTitle
     * @param array[string]mixed $arParams
     * @return void
     *
     */
    public final function addDeleteAction($entryId, $deleteLink, $deleteTitle = \false, $arParams = array())
    {
    }
    /**
     * Function saves component epilog environment
     *
     * @param array[string]mixed $arEpilogInfo
     * @return void
     *
     */
    public final function setTemplateEpilog($arEpilogInfo)
    {
    }
    /**
     * Function restores component epilog environment and executes it.
     *
     * @param array[string]mixed $arEpilogInfo
     * @return void
     *
     */
    public final function includeComponentEpilog($arEpilogInfo)
    {
    }
    /**
     * Function shows an internal error message.
     *
     * @param string $errorMessage
     * @param string $errorCode
     * @return void
     *
     */
    public function __showError($errorMessage, $errorCode = "")
    {
    }
    /**
     * Function registers children css file for cache.
     *
     * @param string $cssPath
     * @return void
     *
     */
    public final function addChildCSS($cssPath)
    {
    }
    /**
     * Function registers children js file for cache.
     *
     * @param string $jsPath
     * @return void
     *
     */
    public final function addChildJS($jsPath)
    {
    }
    /**
     * Function registers children epilog file for cache.
     *
     * @param string $epilogFile
     * @return void
     *
     */
    public final function addChildEpilog($epilogFile)
    {
    }
    /**
     * Registers child frame for cache.
     *
     * @param \Bitrix\Main\Composite\StaticArea $frame
     * @return void
     *
     */
    public final function addChildFrame($frame)
    {
    }
    /**
     * Function adds a button to be displayed.
     *
     * @param array[int]string $arButton
     * @return void
     *
     */
    public final function addEditButton($arButton)
    {
    }
    /**
     * Function registers new view target for the cache.
     *
     * @param string $target
     * @param string $content
     * @param int $pos
     * @return void
     *
     */
    public final function addViewTarget($target, $content, $pos)
    {
    }
    private static function increaseComponentCounter($componentName, $counter = 1)
    {
    }
    /**
     * Function returns next pseudo random value.
     *
     * @param int $length
     * @return string
     *
     * @see \Bitrix\Main\Type\RandomSequence::randString
     */
    public function randString($length = 6)
    {
    }
    /**
     * Marks a component as capable of composite mode.
     * You should use is to mark a whole component as
     * composite incompatible.
     *
     * @param bool $mode
     * @return void
     *
     */
    public function setFrameMode($mode)
    {
    }
    public function getFrameMode()
    {
    }
    public function getRealFrameMode()
    {
    }
    public function getDefaultFrameMode()
    {
    }
}