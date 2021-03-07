<?php

namespace Bitrix\Fileman\Block;

class Editor
{
    const SLICE_SECTION_ID = 'BX_BLOCK_EDITOR_EDITABLE_SECTION';
    const BLOCK_PLACE_ATTR = 'data-bx-block-editor-place';
    const BLOCK_PHP_ATTR = 'data-bx-editor-php-slice';
    const STYLIST_TAG_ATTR = 'data-bx-stylist-container';
    const BLOCK_PLACE_ATTR_DEF_VALUE = 'body';
    const BLOCK_COUNT_PER_PAGE = 14;
    public $id;
    protected $site;
    protected $url;
    protected $previewUrl;
    protected $saveFileUrl;
    protected $templateType;
    protected $templateId;
    protected $charset;
    protected $isTemplateMode;
    protected $isUserHavePhpAccess;
    protected $useLightTextEditor;
    protected $ownResultId;
    /*
     * block list
     */
    public $tools = array();
    /*
     * block list
     */
    public $blocks = array();
    protected $componentFilter = array();
    public $componentsAsBlocks = array();
    public $previewModes = array();
    public $tabs = array();
    public $uiPatterns = array('main' => <<<HTML
\t\t#TEXTAREA#
\t\t<div id="bx-block-editor-container-#id#" class="bx-block-editor-container">
\t\t\t<div class="button-panel">
\t\t\t\t#tabs#

\t\t\t\t<span class="bx-editor-block-btn-close" title="#MESS_BTN_MIN#">#MESS_BTN_MIN#</span>
\t\t\t\t<span class="bx-editor-block-btn-full" title="#MESS_BTN_MAX#">#MESS_BTN_MAX#</span>
\t\t\t\t<span data-role="block-editor-tab-btn-get-html" class="bx-editor-block-btn-full bx-editor-block-btn-html-copy" title="#MESS_BTN_HTML_COPY#"></span>
\t\t\t</div>
\t\t\t#panels#
\t\t</div>
HTML
, 'block' => <<<HTML
\t\t<li data-bx-block-editor-block-status="blank"
\t\t\tdata-bx-block-editor-block-type="#code#"
\t\t\tclass="bx-editor-typecode-#code_class# bx-editor-type-#type_class# bx-block-editor-i-block-list-item"
\t\t\ttitle="#desc#"
\t\t\t>
\t\t\t<span class="bx-block-editor-i-block-list-item-icon"></span>
\t\t\t<span class="bx-block-editor-i-block-list-item-name">#name#</span>
\t\t</li>
HTML
, 'block_page' => <<<HTML
\t\t<ul class="bx-block-editor-i-block-list">
\t\t\t#blocks#
\t\t</ul>
HTML
, 'tool' => <<<HTML
\t\t<div class="bx-editor-block-tools" data-bx-editor-tool="#group#:#id#">
\t\t\t<div class="caption">#name#:</div>
\t\t\t<div class="item">#html#</div>
\t\t</div>
HTML
, 'device' => <<<HTML
\t\t<div class="device #class#" data-bx-preview-device-class="#class#" data-bx-preview-device-width="#width#" data-bx-preview-device-height="#height#">
\t\t\t<span>#MESS_NAME#</span>
\t\t</div>
HTML
, 'tab' => <<<HTML
\t\t\t<span class="bx-editor-block-btn bx-editor-block-btn-#code# #tab_active#">#name#</span>
HTML
, 'tab_active' => 'bx-editor-block-btn-active', 'panel' => <<<HTML
\t\t\t<div class="bx-editor-block-panel #code#-panel" #panel_hidden#>#html#</div>
HTML
, 'panel_hidden' => 'style="display: none;"', 'panel-edit' => <<<HTML
\t\t\t<div class="visual-part">
\t\t\t\t<div class="shadow">
\t\t\t\t\t<div class="edit-text"></div>
\t\t\t\t</div>
\t\t\t\t<iframe id="bx-block-editor-iframe-#id#" src="" style="border: none;" width="100%" height="100%"></iframe>
\t\t\t</div>
\t\t\t<div class="dialog-part">
\t\t\t\t<div style="overflow-x: hidden;">
\t\t\t\t\t<div class="block-list-cont">
\t\t\t\t\t\t<div class="block-list-tabs">

\t\t\t\t\t\t\t<div class="bx-editor-block-tabs">
\t\t\t\t\t\t\t\t<span class="tab-list">
\t\t\t\t\t\t\t\t\t<span class="tab blocks active">#MESS_BLOCKS#</span>
\t\t\t\t\t\t\t\t\t<span class="tab styles">#MESS_STYLES#</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class="edit-panel-tabs-style">
\t\t\t\t\t\t\t\t<ul class="bx-block-editor-i-place-list" data-bx-place-name="item"></ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style="clear: both;"></div>

\t\t\t\t\t\t\t<div class="edit-panel-tabs-block">

\t\t\t\t\t\t\t\t<div>#blocks#</div>

\t\t\t\t\t\t\t\t<div style="clear: both;"></div>
\t\t\t\t\t\t\t\t<div class="block-pager adm-nav-pages-block">
\t\t\t\t\t\t\t\t\t<span class="adm-nav-page adm-nav-page-prev #nav-display#"></span>
\t\t\t\t\t\t\t\t\t<span class="adm-nav-page adm-nav-page-next #nav-display#"></span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div style="clear: both;"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class="block-edit-cont">
\t\t\t\t<div class="bx-editor-block-form-head">
\t\t\t\t\t<div class="bx-editor-block-form-head-btn">
\t\t\t\t\t\t<a class="bx-editor-block-tools-btn bx-editor-block-tools-close" title="#MESS_TOOL_SAVE_TITLE#">#MESS_TOOL_SAVE#</a>
\t\t\t\t\t\t<a class="bx-editor-block-tools-btn bx-editor-block-tools-cancel" title="#MESS_TOOL_CANCEL_TITLE#">#MESS_TOOL_CANCEL#</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class="block-edit-tabs">
\t\t\t\t\t\t<div class="block-edit-tabs-inner">
\t\t\t\t\t\t\t<span data-bx-block-editor-settings-tab="cont" class="bx-editor-block-tab active">#MESS_TOOL_CONTENT#</span>
\t\t\t\t\t\t\t<span data-bx-block-editor-settings-tab="style" class="bx-editor-block-tab">#MESS_TOOL_STYLES#</span>
\t\t\t\t\t\t\t<span data-bx-block-editor-settings-tab="prop" class="bx-editor-block-tab">#MESS_TOOL_SETTINGS#</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class="block-edit-form-empty">
\t\t\t\t\t#MESS_TOOL_EMPTY#
\t\t\t\t</div>

\t\t\t\t<div class="block-edit-form">
\t\t\t\t\t#tools#
\t\t\t\t</div>
\t\t\t</div>
HTML
, 'panel-preview' => <<<HTML
\t\t<div class="bx-block-editor-preview-container">
\t\t\t<div class="shadow">
\t\t\t\t<div class="edit-text"></div>
\t\t\t\t<div class="error-text">#MESS_ACCESS_DENIED#</div>
\t\t\t</div>
\t\t\t<div class="devices">
\t\t\t\t#devices#
\t\t\t</div>

\t\t\t<center>
\t\t\t\t<div class="iframe-wrapper">
\t\t\t\t\t<iframe sandbox="allow-same-origin allow-forms" class="preview-iframe" src=""></iframe>
\t\t\t\t</div>
\t\t\t</center>
\t\t</div>

\t\t<div style="clear:both;"></div>
HTML
, 'panel-get-html' => <<<HTML
\t\t<textarea style="width: 100%; height: 100%; min-height: 400px;" onfocus="this.select()"></textarea>
HTML
);
    /**
     * Return editor object
     *
     * @param array $params
     * @return Editor
     */
    public static function createInstance($params)
    {
    }
    /**
     * Create editor object.
     *
     * @param array $params
     */
    public function __construct($params)
    {
    }
    /**
     * Set custom blocks
     *
     * @param array $blocks
     * @return void
     */
    public function setBlockList(array $blocks)
    {
    }
    /**
     * Set custom tools
     *
     * @param array $tools
     * @return void
     */
    public function setToolList(array $tools)
    {
    }
    /**
     * Return list of default blocks
     *
     * @return array
     */
    public function getDefaultBlockList()
    {
    }
    /**
     * Return true if can use Russian services.
     *
     * @return bool
     */
    public static function isAvailableRussian()
    {
    }
    /**
     * Return list of default tools, uses for block changing
     *
     * @return array
     */
    public function getDefaultToolList()
    {
    }
    /**
     * Return html of interface part.
     *
     * @param string $id
     * @param array $values
     * @return string
     */
    public function getUI($id, array $values)
    {
    }
    /**
     * Return html of editor interface without resources.
     *
     * @return string
     */
    public function showEditor()
    {
    }
    /**
     * Return html for showing editor and include all resources
     *
     * @return string
     */
    public function show()
    {
    }
    /**
     * Return received string, that php changed in special format for block editor.
     *
     * @param string $html
     * @param string $charset
     * @return string $html
     */
    public static function getHtmlForEditor($html, $charset = null)
    {
    }
    /**
     * Replace charset in HTML string.
     *
     * @param string $html
     * @param string $charset
     * @param bool $add
     * @return string $html
     */
    public static function replaceCharset($html, $charset = '#CHARSET#', $add = false)
    {
    }
    /**
     * Fill template(as a HTML) by slice content.
     * Result is string.
     *
     * @param string $template
     * @param string $string Content string.
     * @param string $encoding
     * @return string
     * @deprecated
     * @see \Bitrix\Fileman\Block\Content\Engine::fillHtmlTemplate
     */
    public static function fillTemplateBySliceContent($template, $string, $encoding = null)
    {
    }
    /**
     * Fill template(as a DOM Document) by content.
     *
     * @param Document $document Document.
     * @param string $string Content string.
     * @param string $encoding
     * @return boolean
     * @deprecated
     * @see \Bitrix\Fileman\Block\Content\Engine::fillHtmlTemplate
     */
    public static function fillDocumentBySliceContent(\Bitrix\Main\Web\DOM\Document $document, $string, $encoding = null)
    {
    }
    /**
     * Check string for the presence of tag attributes that indicates supporting of block editor
     *
     * @param string $content
     * @return boolean
     */
    public static function isContentSupported($content)
    {
    }
    /**
     * Check string for the presence of html
     *
     * @param string $content
     * @return bool
     */
    public static function isHtmlDocument($content)
    {
    }
    /**
     * Set components filter
     *
     * @param array $componentFilter
     * @return void
     */
    public function setComponentFilter(array $componentFilter = null)
    {
    }
    protected function getComponentList()
    {
    }
    protected function getComponentTree()
    {
    }
    protected function getComponentListPlain($list)
    {
    }
}