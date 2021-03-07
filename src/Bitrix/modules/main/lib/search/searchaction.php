<?php

namespace Bitrix\Main\Search;

abstract class SearchAction extends \Bitrix\Main\Engine\Action
{
    public final function run($searchQuery, array $options = null, \Bitrix\Main\UI\PageNavigation $pageNavigation = null)
    {
    }
    protected final function adjustResultItem(\Bitrix\Main\Search\ResultItem $item)
    {
    }
    protected function prepareSearchQuery($searchQuery)
    {
    }
    protected function provideLimits($searchQuery, array $options = null)
    {
    }
    /**
     * Provides search results.
     *
     * @param string $searchQuery
     * @param array|null $options
     * @param PageNavigation|null $pageNavigation
     *
     * @return ResultItem[]
     */
    abstract function provideData($searchQuery, array $options = null, \Bitrix\Main\UI\PageNavigation $pageNavigation = null);
}