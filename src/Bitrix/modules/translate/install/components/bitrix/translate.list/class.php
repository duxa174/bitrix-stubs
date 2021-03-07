<?php

class TranslateListComponent extends \Bitrix\Translate\ComponentBase
{
    public const ACTION_FILE_LIST = 'FILE_LIST';
    public const ACTION_SEARCH_FILE = 'SEARCH_FILE';
    public const ACTION_SEARCH_PHRASE = 'SEARCH_PHRASE';
    public const ACTION_EDIT = 'EDIT';
    /** @var string */
    private $action;
    public const VIEW_MODE_COUNT_PHRASES = 'CountPhrases';
    public const VIEW_MODE_COUNT_FILES = 'CountFiles';
    public const VIEW_MODE_UNTRANSLATED = 'UntranslatedPhrases';
    public const VIEW_MODE_UNTRANSLATED_FILES = 'UntranslatedFiles';
    public const VIEW_MODE_HIDE_EMPTY_FOLDERS = 'HideEmptyFolders';
    public const VIEW_MODE_SHOW_DIFF_LINKS = 'ShowDiffLinks';
    /** @var string */
    private $filterId = 'translate_filter';
    /** @var string */
    private $gridId = 'translate_list';
    /** @var Main\Grid\Options */
    private $gridOptions;
    /** @var Main\UI\Filter\Options */
    private $filterOptions;
    /** @var boolean Request include new filter state. */
    private $filterApplying = \false;
    /** @var Main\UI\PageNavigation */
    private $pageNavigation;
    /** @var Translate\Filter */
    private $filter;
    /** @var Translate\Index\PathIndex */
    private $topIndexPath;
    /** @var string[] */
    private $viewMode = array();
    /** @var array */
    private $fileData = array();
    /** @var array */
    private $dirData = array();
    /** @var array */
    private $indexData = array();
    /** @var int */
    private $totalItemsFound = 0;
    /**
     * @return void
     */
    protected function prepareParams()
    {
    }
    /**
     * @return void
     */
    public function executeComponent()
    {
    }
    /**
     * Returns ui grid headers definition.
     *
     * @return array
     */
    private function getHeaderDefinition()
    {
    }
    /**
     * Returns filter fields definitions.
     *
     * @return array
     */
    private function getFilterDefinition()
    {
    }
    /**
     * Returns filter presets definitions.
     *
     * @return array
     */
    private function getFilterPresetsDefinition()
    {
    }
    /**
     * @return array
     */
    private function getOrder($defaultSort = array('TITLE' => 'asc'), $aliases = array())
    {
    }
    /**
     * Returns filter object.
     *
     * @return Translate\Filter
     */
    private function getFilter($reset = \false)
    {
    }
    /**
     * Returns established filter.
     *
     * @return Translate\Filter
     */
    private function detectFilter()
    {
    }
    /**
     * Action actual dir/file date from disk.
     *
     * @return void
     */
    private function executeFileListAction()
    {
    }
    /**
     * Searches file by index.
     *
     * @return void
     */
    private function executeSearchFileAction()
    {
    }
    /**
     * Searches phrase by index.
     *
     * @return void
     */
    private function executeSearchPhraseAction()
    {
    }
    /**
     *  Restores current view mode.
     *
     * @return string[]
     */
    private function detectViewMode()
    {
    }
    /**
     *  Finds requested path from.
     *
     * @return string
     */
    private function detectPath($inpName = 'path')
    {
    }
    /**
     *  Finds top folder for request.
     *
     * @return Translate\Index\PathIndex|null
     */
    private function detectTopIndexPath()
    {
    }
    /**
     * Loads actual data from disk files. Initializes $this->dirData and $this->fileData.
     *
     * @return int
     */
    private function loadActualFileData()
    {
    }
    /**
     * Appends actual file data by date from index. Initializes $this->indexData.
     *
     * @param string[] $pathList Folder path list to filter.
     * @param boolean $loadPathsDiff Load path data for link.
     *
     * @return int
     */
    private function loadIndexFileData(array $pathList = [], $loadPathsDiff = \false)
    {
    }
    /**
     * todo: Revert module assigment
     *
     * @return string[]
     */
    private function getModuleList()
    {
    }
    /**
     * todo: Revert module assigment
     *
     * @param string $moduleId Module Id.
     * @return string
     */
    private function getModuleTitle($moduleId)
    {
    }
    /**
     * todo: Revert type assigment
     *
     * @param string $assignmentId Assignment Id.
     * @return string
     */
    private function getAssignmentTitle($assignmentId)
    {
    }
    /**
     * @return string
     */
    private function detectAction()
    {
    }
    /**
     * Returns items for grid menu with group action.
     *
     * @param string $action Component action command.
     *
     * @return array
     */
    protected function getGridGroupAction($action)
    {
    }
}