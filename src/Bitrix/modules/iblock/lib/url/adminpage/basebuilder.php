<?php

namespace Bitrix\Iblock\Url\AdminPage;

abstract class BaseBuilder
{
    public const TYPE_AUTODETECT = 'AUTO';
    public const TYPE_ID = 'BASE';
    protected const TYPE_WEIGHT = null;
    protected const PATH_PREFIX = '';
    protected const PAGE_ELEMENT_LIST = 'elementList';
    protected const PAGE_ELEMENT_DETAIL = 'elementDetail';
    protected const PAGE_ELEMENT_COPY = 'elementCopy';
    protected const PAGE_ELEMENT_SAVE = 'elementSave';
    protected const PAGE_ELEMENT_SEARCH = 'elementSearch';
    protected const PAGE_SECTION_LIST = 'sectionList';
    protected const PAGE_SECTION_DETAIL = 'sectionDetail';
    protected const PAGE_SECTION_COPY = 'sectionCopy';
    protected const PAGE_SECTION_SAVE = 'sectionSave';
    protected const PAGE_SECTION_SEARCH = 'sectionSearch';
    protected $id = null;
    protected $weight = null;
    protected $languageId = null;
    /** @var int */
    protected $iblockId = null;
    /** @var array */
    protected $iblock = null;
    /** @var string */
    protected $iblockListMode = null;
    /** @var bool */
    protected $iblockListMixed = null;
    /** @var string */
    protected $prefix = null;
    protected $urlParams = [];
    protected $compiledUrlParams = '';
    protected $config = [];
    protected $urlTemplates = [];
    protected $templateVariables = [];
    public function __construct()
    {
    }
    public function getId() : string
    {
    }
    public function getWeight() : ?int
    {
    }
    public function setLanguageId(string $languageId) : void
    {
    }
    public function getLanguageId() : string
    {
    }
    public function setIblockId(int $iblockId) : void
    {
    }
    public function setPrefix(string $prefix) : void
    {
    }
    public function setUrlParams(array $list) : void
    {
    }
    public function getCompiledParams(array $params) : string
    {
    }
    public function isIblockListMixed() : bool
    {
    }
    public abstract function use() : bool;
    public function getSectionListUrl(?int $parentId, array $options = [], string $additional = '') : string
    {
    }
    public function getSectionDetailUrl(?int $entityId, array $options = [], string $additional = '') : string
    {
    }
    public function getSectionSaveUrl(?int $entityId, array $options = [], string $additional = '') : string
    {
    }
    public function getSectionSearchUrl(array $options = [], string $additional = '') : string
    {
    }
    public function getElementListUrl(?int $parentId, array $options = [], string $additional = '') : string
    {
    }
    public function getElementDetailUrl(?int $entityId, array $options = [], string $additional = '') : string
    {
    }
    public function getElementCopyUrl(?int $entityId, array $options = [], string $additional = '') : string
    {
    }
    public function getElementSaveUrl(?int $entityId, array $options = [], string $additional = '') : string
    {
    }
    public function getElementSearchUrl(array $options = [], string $additional = '') : string
    {
    }
    public function getBaseParams() : string
    {
    }
    public function getLanguageParam() : string
    {
    }
    protected function initSettings() : void
    {
    }
    protected function initConfig() : void
    {
    }
    protected static function clearNull($value) : bool
    {
    }
    protected function resetIblock() : void
    {
    }
    protected function initIblockListMode() : void
    {
    }
    protected function compileUrlParams(array $params) : string
    {
    }
    protected function compileParamsLevel(string &$result, string $prefix, array $params) : void
    {
    }
    protected function getParentFilter(?int $parentId) : string
    {
    }
    protected function extendUrl(array $options = [], string $additional = '') : string
    {
    }
    protected abstract function initUrlTemplates() : void;
    protected function getUrlTemplate(string $templateId) : ?string
    {
    }
    protected function fillUrlTemplate(?string $template, array $replaces) : string
    {
    }
    protected function setTemplateVariable(string $name, string $value) : void
    {
    }
    protected function getExtendedVariables(array $options = [], string $additional = '') : array
    {
    }
    protected function getListVariables(string $page, ?int $parentId, array $options = [], string $additional = '') : array
    {
    }
    protected function getDetailVariables(string $page, int $entityId, array $options = [], string $additional = '') : array
    {
    }
    protected function getCopyAction() : string
    {
    }
}