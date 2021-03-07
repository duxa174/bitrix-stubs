<?php

namespace Bitrix\Main\Mail;

class EventMessageThemeCompiler
{
    /**
     * @var EventMessageThemeCompiler
     */
    protected static $instance = null;
    protected $siteTemplateId;
    protected $siteId;
    protected $languageId;
    protected $themePath = '';
    protected $themeProlog;
    protected $themeEpilog;
    protected $themeStylesString = '';
    protected $resultString = '';
    protected $body;
    protected $contentTypeHtml = false;
    protected $params = array();
    protected $arStyle = array();
    protected $replaceCallback = array();
    protected $currentResourceOrder = 100;
    /**
     * Constructor.
     *
     * @param string|null $siteTemplateId
     * @param string $body
     * @param bool $isHtml
     * @return EventMessageThemeCompiler
     */
    public function __construct($siteTemplateId = null, $body, $isHtml = true)
    {
    }
    /**
     * Create instance.
     *
     * @param string|null $siteTemplateId
     * @param string $body
     * @param bool $isHtml
     * @return EventMessageThemeCompiler
     */
    public static function createInstance($siteTemplateId = null, $body, $isHtml = true)
    {
    }
    /**
     * Returns current instance of the EventMessageThemeCompiler.
     *
     * @return EventMessageThemeCompiler
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function getInstance()
    {
    }
    /**
     * Unset current instance of the EventMessageThemeCompiler.
     *
     * @return void
     */
    public static function unsetInstance()
    {
    }
    /**
     * Set site template id.
     *
     * @param mixed $siteTemplateId
     */
    public function setSiteTemplateId($siteTemplateId)
    {
    }
    /**
     * Get site template id.
     *
     * @return mixed
     */
    public function getSiteTemplateId()
    {
    }
    /**
     * Set language id.
     *
     * @param mixed $languageId
     */
    public function setLanguageId($languageId)
    {
    }
    /**
     * Get language id.
     * @return mixed
     */
    public function getLanguageId()
    {
    }
    /**
     * Set site id.
     *
     * @param mixed $siteId
     * @return void
     */
    public function setSiteId($siteId)
    {
    }
    /**
     * Return site id.
     *
     * @return string
     */
    public function getSiteId()
    {
    }
    /**
     * Return result.
     *
     * @return string
     */
    public function getResult()
    {
    }
    /**
     * Set params that will be used for replacing placeholders.
     *
     * @param array $params
     */
    public function setParams(array $params)
    {
    }
    /**
     * Set theme prolog.
     *
     * @param mixed $themeProlog
     */
    public function setThemeProlog($themeProlog)
    {
    }
    /**
     * Return theme prolog.
     *
     * @return mixed
     */
    public function getThemeProlog()
    {
    }
    /**
     * Set theme epilog.
     *
     * @param mixed $themeEpilog
     */
    public function setThemeEpilog($themeEpilog)
    {
    }
    /**
     * Return theme epilog.
     *
     * @return mixed
     */
    public function getThemeEpilog()
    {
    }
    /**
     * Set style.
     *
     * @param array $arPaths
     * @param bool $sort
     * @return void
     */
    public function setStyle($path, $sort = false)
    {
    }
    /**
     * Set style list.
     *
     * @param array $arPaths
     * @param bool $sort
     * @return void
     */
    public function setStyleArray(array $arPaths, $sort = false)
    {
    }
    /**
     * Return style list that will be added by template.
     *
     * @return array
     */
    public function getStyles()
    {
    }
    /**
     * Return styles as string that will be added by template.
     *
     * @return string
     */
    public function getStylesString()
    {
    }
    /**
     * Show styles that will be added by template.
     *
     * @return string
     */
    public function showStyles()
    {
    }
    protected function setTheme($site_template_id)
    {
    }
    protected function setBody($body)
    {
    }
    /**
     * Function includes language files from within the theme directory.
     *
     * <p>For example: $this->includeThemeLang("header.php") will include "lang/en/header.php" file. </p>
     * <p>Note: theme must be inited by setTheme method.</p>
     * @param string $relativePath
     * @return void
     *
     */
    public final function includeThemeLang($relativePath = "")
    {
    }
    /**
     * Execute prolog, body and epilog.
     *
     * @param
     */
    public function execute()
    {
    }
    protected function executePhp($template, $resourceOrder = 100)
    {
    }
    protected function addReplaceCallback($identificator, $callback)
    {
    }
    protected function executeReplaceCallback()
    {
    }
    /**
     * Include mail component.
     *
     * @return mixed
     */
    public static function includeComponent($componentName, $componentTemplate, $arParams = array(), $parentComponent = null, $arFunctionParams = array())
    {
    }
    /**
     * Stop execution of template. Throws an exception if instance is exists.
     *
     * @return void
     * @throws \Bitrix\Main\Mail\StopException
     */
    public static function stop()
    {
    }
}