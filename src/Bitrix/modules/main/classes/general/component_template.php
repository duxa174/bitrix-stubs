<?php

class CBitrixComponentTemplate
{
    public $__name = "";
    public $__page = "";
    public $__engineID = "";
    public $__file = "";
    public $__fileAlt = "";
    public $__folder = "";
    public $__siteTemplate = "";
    public $__templateInTheme = \false;
    public $__hasCSS = \null;
    public $__hasJS = \null;
    /** @var CBitrixComponent */
    public $__component = \null;
    public $__component_epilog = \false;
    public $__bInited = \false;
    private $__view = array();
    /** @var \Bitrix\Main\Composite\BufferArea[] */
    private $frames = array();
    private $frameMode = \null;
    private $languageId = \false;
    private $externalCss = array();
    private $externalJs = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns name of the template.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetName()
    {
    }
    /**
     * Returns template page.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetPageName()
    {
    }
    /**
     * Returns path to the template file within DOCUMENT_ROOT.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetFile()
    {
    }
    /**
     * Returns path to the template folder within DOCUMENT_ROOT.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetFolder()
    {
    }
    /**
     * Returns site template name.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetSiteTemplate()
    {
    }
    /**
     * Returns true if template belongs to another template of an complex component.
     *
     * Requires Init call before usage.
     *
     * @return null|boolean
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function IsInTheme()
    {
    }
    /**
     * Sets template language identifier.
     *
     * @param string $languageId
     *
     * @return void
     */
    public function setLanguageId($languageId)
    {
    }
    /**
     * Returns template language.
     *
     * @return string
     *
     * @see CBitrixcomponentTemplate::setLanguageId
     */
    public function getLanguageId()
    {
    }
    /**
     * Returns data to be stored in the component cache.
     *
     * Requires Init call before usage.
     *
     * @return null|array
     *
     * @see CBitrixComponentTemplate::Init
     * @see CBitrixComponentTemplate::ApplyCachedData
     */
    public function GetCachedData()
    {
    }
    /**
     * Performs actions on cached hit.
     *
     * @param array $arData
     *
     * @return void
     * @see CBitrixComponentTemplate::GetCachedData
     */
    public function ApplyCachedData($arData)
    {
    }
    /**
     * Called automatically on first usage of related functions.
     *
     * @param array $arTemplateEngines Array of engines to add.
     *
     * @return void
     */
    public function InitTemplateEngines($arTemplateEngines = array())
    {
    }
    /**
     * Have to be called before any template usage.
     * Returns true on success.
     *
     * @param CBitrixComponent $component Parent component.
     * @param boolean|string $siteTemplate Site template name.
     * @param string $customTemplatePath Additional path to look for template in.
     *
     * @return boolean
     */
    public function Init(&$component, $siteTemplate = \false, $customTemplatePath = "")
    {
    }
    /**
     * Checks the template name for correctness.
     * Letters, digits, minus, underscore and dots are allowed.
     *
     * @param string $name Name of the template.
     *
     * @return boolean
     */
    public static function CheckName($name)
    {
    }
    /**
     * Search file by its path and name without extention.
     *
     * @param string $path Directory.
     * @param string $fileName File name (without extention).
     *
     * @return false|string
     */
    public function __SearchTemplateFile($path, $fileName)
    {
    }
    /**
     * Checking existence of the template
     * @return bool
     */
    public function hasTemplate() : bool
    {
    }
    /**
     * Checking existence of the template page
     * @param string $templatePage
     * @return bool
     */
    public function hasTemplatePage(string $templatePage) : bool
    {
    }
    /**
     * @return array
     */
    public function generatePossibleTemplatePath() : array
    {
    }
    //AddEventHandler("main", "OnUserTypeBuildList", array("CUserTypeWebdavElement", "GetUserTypeDescription"));
    /**
     * Search template by its name in various locations.
     * <ol>
     * <li>/local/templates/&lt;site template&gt;/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/local/templates/.default/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/local/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/local/templates/&lt;site template&gt;/components/&lt;component path&gt;/
     * <li>/local/templates/.default/components/&lt;component path&gt;/
     * <li>/local/components/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/&lt;site template&gt;/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/.default/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/bitrix/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/&lt;site template&gt;/components/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/.default/components/&lt;component path&gt;/
     * <li>/bitrix/components/&lt;component path&gt;/
     * </ol>
     *
     * @param string $customTemplatePath
     *
     * @return false|string
     */
    public function __SearchTemplate($customTemplatePath = "")
    {
    }
    /**
     * Executes template.php via include function.
     *
     * Requires Init call before usage.
     *
     * @param array &$arResult Result of the component calculations.
     * @param array &$arParams Parameters of the component call.
     * @param string $parentTemplateFolder Parent template.
     *
     * @return false|void
     * @throws \Bitrix\Main\NotSupportedException
     * @see CBitrixComponentTemplate::Init
     */
    public function __IncludePHPTemplate(
        /** @noinspection PhpUnusedParameterInspection */
        &$arResult,
        &$arParams,
        $parentTemplateFolder = ""
    )
    {
    }
    /**
     * Executes template using appropriate template engine.
     *
     * Requires Init call before usage.
     * @param array &$arResult
     *
     * @return false|void
     * @see CBitrixComponentTemplate::Init
     */
    public function IncludeTemplate(&$arResult)
    {
    }
    /**
     * Includes template language file.
     *
     * @param string $relativePath
     * @param false|string $lang
     * @param boolean $return
     *
     * @return array
     */
    public function IncludeLangFile($relativePath = "", $lang = \false, $return = \false)
    {
    }
    /**
     * @param array &$arResult
     * @param array &$arParams
     *
     * @return void
     * @internal
     */
    public function __IncludeMutatorFile(
        /** @noinspection PhpUnusedParameterInspection */
        &$arResult,
        &$arParams
    )
    {
    }
    /**
     * @return void
     * @internal
     */
    public function __IncludeCSSFile()
    {
    }
    /**
     * @return void
     * @internal
     */
    public function __IncludeJSFile()
    {
    }
    /**
     * @param string $templateName File name.
     *
     * @return string
     * @internal
     */
    public function __GetTemplateExtension($templateName)
    {
    }
    /**
     * @return void
     * @internal
     */
    function __GetTemplateEngine()
    {
    }
    /**
     * Begins special output which will be showed by $APPLICATION->ShowViewContent.
     *
     * @param string $target Code name of the area.
     * @param integer $pos Sort index.
     *
     * @return void
     * @see CMain::ShowViewContent
     * @see CBitrixcomponentTemplate::EndViewTarget
     */
    public function SetViewTarget($target, $pos = 500)
    {
    }
    /**
     * Ends special output which will be showed by $APPLICATION->ShowViewContent.
     *
     * @return void
     * @see CMain::ShowViewContent
     * @see CBitrixcomponentTemplate::SetViewTarget
     */
    public function EndViewTarget()
    {
    }
    /**
     * Shows menu with edit action in edit mode.
     * <code>
     * $this->AddEditAction(
     * 	'USER'.$arUser['ID'],
     * 	$arUser['EDIT_LINK'],
     * 	GetMessage('INTR_ISP_EDIT_USER'),
     * 	array(
     * 		'WINDOW' => array("width"=>780, "height"=>500), // popup params
     * 		'ICON' => 'bx-context-toolbar-edit-icon' // icon css
     * 		'SRC' => '/bitrix/images/myicon.gif' // icon image
     * 	)
     * );
     * </code>
     *
     * @param string $entryId Entry identifier. prefix like 'USER' needed only in case when template has two or more lists of different editable entities.
     * @param string $editLink Edit form link, Should be set in a component. Will be opened in js popup.
     * @param false|string $editTitle Button caption.
     * @param array $arParams Additional parameters.
     *
     * @return void
     * @see CBitrixcomponentTemplate::GetEditAreaId
     */
    public function AddEditAction($entryId, $editLink, $editTitle = \false, $arParams = array())
    {
    }
    /**
     * Shows menu with delete action in edit mode.
     * <ul>
     * $arParams['CONFIRM'] = false - disable confirm;
     * $arParams['CONFIRM'] = 'Text' - confirm with custom text;
     * no $arParams['CONFIRM'] at all - confirm with default text
     * </ul>
     *
     * @param string $entryId Entry identifier. prefix like 'USER' needed only in case when template has two or more lists of different editable entities.
     * @param string $deleteLink Delete action link, Should be set in a component.
     * @param false|string $deleteTitle Button caption.
     * @param array $arParams Additional parameters.
     *
     * @return void
     * @see CBitrixcomponentTemplate::GetEditAreaId
     */
    public function AddDeleteAction($entryId, $deleteLink, $deleteTitle = \false, $arParams = array())
    {
    }
    /**
     * Returns identifier to mark an html element as a container for highlight.
     *
     * <code>
     * &lt;tr id="&lt;?=$this-&gt;GetEditAreaId('USER'.$arUser['ID']);?&gt;"&gt;
     * </code>
     *
     * @param $entryId
     *
     * @return string
     * @see CBitrixcomponentTemplate::AddEditAction
     */
    public function GetEditAreaId($entryId)
    {
    }
    /**
     * Function returns next pseudo random value.
     *
     * @param int $length
     *
     * @return string
     * @see \Bitrix\Main\Type\RandomSequence::randString
     */
    public function randString($length = 6)
    {
    }
    /**
     * Marks a template as capable of composite mode.
     *
     * @param bool $mode
     *
     * @return void
     */
    public function setFrameMode($mode)
    {
    }
    /**
     * Returns frame mode
     * @return bool
     */
    public function getFrameMode()
    {
    }
    public function getRealFrameMode()
    {
    }
    /**
     * Returns new frame helper object to work with composite frame.
     *
     * <code>
     * $frame = $this->createFrame()->begin("");
     * echo "10@".(time()+15);
     * $frame->end();
     * </code>
     *
     * @param string $id
     * @param bool $autoContainer
     *
     * @return Bitrix\Main\Composite\BufferArea
     * @see Bitrix\Main\Composite\BufferArea
     */
    public function createFrame($id = \null, $autoContainer = \true)
    {
    }
    /**
     * Shows css file in the head of html.
     * Supports caching.
     *
     * @param string $cssPath Path to css file.
     *
     * @return void
     * @see CMain::SetAdditionalCSS
     */
    public function addExternalCss($cssPath)
    {
    }
    /**
     * Shows js file in the head of html.
     * Supports caching.
     *
     * @param string $jsPath Path to js file.
     *
     * @return void
     * @see CMain::AddHeadScript
     */
    public function addExternalJs($jsPath)
    {
    }
    /**
     * A bit more civilised method of getting the parent component.
     * @return CBitrixComponent
     */
    public function getComponent()
    {
    }
}