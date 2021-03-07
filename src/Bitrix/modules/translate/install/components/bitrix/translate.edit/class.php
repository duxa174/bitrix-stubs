<?php

class TranslateEditComponent extends \Bitrix\Translate\ComponentBase
{
    public const VIEW_MODE_UNTRANSLATED = 'Untranslated';
    public const VIEW_MODE_SHOW_ALL = 'ShowAll';
    public const VIEW_MODE_SOURCE_EDIT = 'SourceEdit';
    public const VIEW_MODE_SOURCE_VIEW = 'SourceView';
    public const TEMPLATE_SOURCE_EDIT = 'source_edit';
    public const TEMPLATE_SOURCE_VIEW = 'source_view';
    /** @var string */
    private $filePath;
    /** @var string */
    private $viewMode;
    /** @var array */
    private $langSettings = array();
    /** @var string */
    private $highlightPhraseId;
    /**
     * @return void
     */
    protected function prepareParams()
    {
    }
    /**
     * @return string
     */
    protected function detectTabId()
    {
    }
    /**
     * @return void
     */
    public function executeComponent()
    {
    }
    /**
     * Generates name for form field.
     *
     * @param string $phraseId Phrase code.
     * @param string $suffix Append name with.
     * @param string $prefix Start name with.
     *
     * @return string
     */
    public function generateFieldName($phraseId, $suffix = '', $prefix = '')
    {
    }
    /**
     * Merges all language files into one array.
     *
     * @param string[] $fullLangFilePaths Array of full paths to lang files.
     * @param string[] $languages Array of languages to merge.
     * @param string $encodingOut Output encoding.
     * @param boolean $collectUntranslated Leave only untranslated phrases.
     *
     * @return array
     */
    private function mergeLangFiles($fullLangFilePaths, $languages, $encodingOut = \null, $collectUntranslated = \false)
    {
    }
    /**
     * Finds requested path from.
     *
     * @param string $inpName Input parameter name.
     * @return string
     */
    private function detectPath($inpName = 'file')
    {
    }
    /**
     *  Restores current view mode.
     *
     * @return string
     */
    private function detectViewMode()
    {
    }
}