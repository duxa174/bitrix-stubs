<?php

namespace Bitrix\Translate\Index;

/**
 * @see \Bitrix\Main\ORM\Objectify\Collection
 */
class PathLangCollection extends \Bitrix\Translate\Index\Internals\EO_PathLang_Collection
{
    /**
     * @var bool
     */
    static $verbose = false;
    /** @var string */
    private static $documentRoot;
    /** @var string[] */
    private static $enabledLanguages;
    /** @var bool */
    private static $useTranslationRepository;
    /** @var string[] */
    private static $translationRepositoryLanguages;
    /** @var string[] */
    private static $translationEnabledLanguages;
    /** @var string */
    private static $translationRepositoryRoot;
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
     * Collects lang folder paths.
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
     * Drops index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return self
     */
    public function purge(\Bitrix\Translate\Filter $filter = null)
    {
    }
}