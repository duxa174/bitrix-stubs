<?php

namespace Bitrix\Main\Component;

/**
 * Class BaseUfComponent
 * @package Bitrix\Main\Component
 */
abstract class BaseUfComponent extends \CBitrixComponent
{
    public const MODE_DEFAULT = '.default', TEMPLATE_PAGE_DEFAULT = '.default', TEMPLATE_NAME_DEFAULT = '.default';
    /*
     * List of available media types
     * MediaType === Template folder by default, may be overriding in child class
     */
    public const MEDIA_TYPE_DEFAULT = '.default', MEDIA_TYPE_MOBILE = 'mobile';
    /**
     * @var array $htmlBuilder
     */
    protected static $htmlBuilder = [];
    /**
     * @var CBitrixComponentTemplate $componentTemplate
     * @var array $userField
     * @var array $additionalParameters
     */
    protected $componentTemplate, $userField = [], $additionalParameters = [];
    /**
     * @var string $mediaType
     * @var string $mode
     */
    private $mediaType = '', $mode = '', $availableModes = [];
    public function __construct($component = null)
    {
    }
    public final function executeComponent()
    {
    }
    protected final function initResult() : void
    {
    }
    /**
     * @return array|bool
     */
    public function getUserField()
    {
    }
    /**
     * @param array|bool $userField
     */
    public function setUserField($userField) : void
    {
    }
    /**
     * @param string $key
     * @return mixed|null
     */
    public function getAdditionalParameter(string $key)
    {
    }
    /**
     * @return array
     */
    public function getAdditionalParameters() : array
    {
    }
    /**
     * @param array $additionalParameters
     */
    public function setAdditionalParameters(?array $additionalParameters) : void
    {
    }
    /**
     * @return CBitrixComponent|null
     */
    public function getParentComponent() : ?\CBitrixComponent
    {
    }
    /**
     * @param CBitrixComponent|null $_parent
     */
    public function setParentComponent(?\CBitrixComponent $_parent) : void
    {
    }
    /**
     * You can override this method in a child class
     * to add the personal custom functionality of the child class
     */
    protected function prepareResult() : void
    {
    }
    protected function initAvailableModes() : void
    {
    }
    /**
     * @return array
     */
    public function getAvailableModes() : array
    {
    }
    /**
     * @param array $availableModes
     */
    public function setAvailableModes(array $availableModes) : void
    {
    }
    protected function initMode() : void
    {
    }
    /**
     * @param string $mode
     */
    protected function setMode(string $mode) : void
    {
    }
    protected function initMediaType() : void
    {
    }
    /**
     * @param string $mediaType
     */
    protected function setMediaType(string $mediaType) : void
    {
    }
    /**
     * Resolving a mode name to template name.
     * By default mode === templateFolderName, can be otherwise in child class
     * @return string
     */
    protected function resolveTemplateName() : string
    {
    }
    /**
     * @return string
     */
    public final function getMode() : string
    {
    }
    /**
     * @return string
     */
    protected function getTemplateNameFromMode() : string
    {
    }
    /**
     * Return templatePage name from mediaType
     * or null if mediaType incorrect
     * @return null|string
     */
    protected final function resolveTemplatePage() : ?string
    {
    }
    /**
     * @param string|null $templatePage
     * @return bool
     */
    protected final function isExistTemplatePage(?string $templatePage = '') : bool
    {
    }
    /**
     * Checking if mediaType specified when calling the component is valid
     * @return bool
     */
    protected final function isPossibleMediaType() : bool
    {
    }
    /**
     * @return string
     */
    protected function getTemplatePageFromMediaType() : string
    {
    }
    /**
     * Return all mediaTypes
     * @return array
     */
    protected final function getMediaTypes() : array
    {
    }
    /**
     * @return string
     */
    protected function getMediaType() : string
    {
    }
    /**
     * @return bool
     */
    protected final function hasTemplateFolder() : bool
    {
    }
    /**
     * Returning first correct template folder from array of availables modes
     * @return null|string
     */
    protected final function getAvailableTemplateFolder() : ?string
    {
    }
    /**
     * @return string
     */
    protected final function generateAvailableModesHash() : string
    {
    }
    /**
     * @param string $templatePage
     * @return bool
     */
    protected final function hasTemplatePage(string $templatePage) : bool
    {
    }
    /**
     * @return string
     */
    protected function getFieldName() : string
    {
    }
    /**
     * @return array
     */
    protected function getFieldValue() : array
    {
    }
    /**
     * @param mixed $value
     * @return array
     */
    protected static final function normalizeFieldValue($value) : array
    {
    }
    /**
     * @return HtmlBuilder
     */
    public final function getHtmlBuilder()
    {
    }
    /**
     * @param HtmlBuilder $htmlBuilder
     */
    public final function setHtmlBuilder(\Bitrix\Main\UserField\HtmlBuilder $htmlBuilder) : void
    {
    }
    /**
     * @return bool
     */
    public final function isDefaultMode() : bool
    {
    }
    /**
     * @return bool
     */
    public final function isMobileMode() : bool
    {
    }
    /**
     * @return string
     */
    protected static abstract function getUserTypeId() : string;
}