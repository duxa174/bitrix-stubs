<?php

namespace Bitrix\Translate\Index;

/**
 * @see \Bitrix\Main\ORM\Objectify\Collection
 */
class PathIndexCollection extends \Bitrix\Translate\Index\Internals\EO_PathIndex_Collection
{
    /** @var bool */
    static $verbose = false;
    /** @var string */
    private static $documentRoot;
    /** @var string[] */
    private static $enabledLanguages;
    /** @var string[] */
    private static $availableLanguages;
    /** @var bool */
    private static $useTranslationRepository;
    /** @var string[] */
    private static $translationRepositoryLanguages;
    /** @var string[] */
    private static $translationEnabledLanguages;
    /** @var string */
    private static $translationRepositoryRoot;
    /** @var array */
    private $immediateChildren = array();
    /** @var array */
    private $ancestorsPaths = array();
    /** @var string[] */
    private $checkLanguages = array();
    /**
     * Sets up configuration.
     *
     * @return void
     */
    private static function configure()
    {
    }
    /**
     * Counts items to process.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return int
     */
    public function countItemsToProcess(\Bitrix\Translate\Filter $filter = null)
    {
    }
    /**
     * Collect path structure.
     *
     * @param Translate\Filter $filter Params to filter file list.
     * @param Translate\Controller\ITimeLimit $timer Time counter.
     * @param Translate\Filter $seek Params to seek position.
     *
     * @return int
     */
    public function collect(\Bitrix\Translate\Filter $filter = null, \Bitrix\Translate\Controller\ITimeLimit $timer = null, \Bitrix\Translate\Filter $seek = null)
    {
    }
    /**
     * Collect path structure.
     *
     * @param string $relPath Path to lang folder to index.
     *
     * @return int
     */
    private function collectFilePath($relPath)
    {
    }
    /**
     * Searchs or creates ancestor index by path.
     *
     * @param string $path Path to search.
     *
     * @return array|null
     */
    public function constructAncestorsByPath($path)
    {
    }
    /**
     * Looks for immediate children.
     *
     * @param int $parentId Parent Id.
     *
     * @return Index\PathIndex[]
     */
    private function getImmediateChildren($parentId)
    {
    }
    /**
     * Looks for ancestors by path.
     *
     * @param int $nodeId Index path to search ancestors.
     * @param int $topNodeId The highest index path.
     *
     * @return Index\PathIndex[]
     */
    private function getAncestors($nodeId, $topNodeId = -1)
    {
    }
    /**
     * Rearrange tree as nested set structure.
     *
     * @return self
     */
    public function arrangeTree()
    {
    }
    /**
     * Drop index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     * @param bool $recursively Drop index recursively.
     *
     * @return self
     */
    public function purge(\Bitrix\Translate\Filter $filter = null, $recursively = true)
    {
    }
    /**
     * Unvalidate index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     * @param bool $recursively Drop index recursively.
     *
     * @return self
     */
    public function validate(\Bitrix\Translate\Filter $filter = null, $recursively = true)
    {
    }
    /**
     * Unvalidate index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     * @param bool $recursively Drop index recursively.
     *
     * @return self
     */
    public function unvalidate(\Bitrix\Translate\Filter $filter = null, $recursively = true)
    {
    }
    /**
     * Collect sssignment file to module.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return self
     */
    public function collectModuleAssignment(\Bitrix\Translate\Filter $filter = null)
    {
    }
    /**
     * Collect file asssignment.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return self
     */
    public function collectAssignment(\Bitrix\Translate\Filter $filter = null)
    {
    }
}