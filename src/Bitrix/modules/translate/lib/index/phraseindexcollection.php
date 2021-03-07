<?php

namespace Bitrix\Translate\Index;

/**
 * @see \Bitrix\Main\ORM\Objectify\Collection
 */
class PhraseIndexCollection extends \Bitrix\Translate\Index\Internals\EO_PhraseIndex_Collection
{
    /**
     * @var bool
     */
    static $verbose = false;
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
     * Collect index phrases.
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
     * Drop index.
     *
     * @param Translate\Filter $filter Params to filter file list.
     *
     * @return self
     */
    public function purge(\Bitrix\Translate\Filter $filter = null)
    {
    }
    /**
     * Returns phrase object by its code.
     *
     * @param string $code Phrase code to search.
     *
     * @return Index\PhraseIndex|null
     */
    public function getPhraseByCode($code)
    {
    }
}