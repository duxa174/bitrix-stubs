<?php

namespace Bitrix\Translate\Index;

class PhraseIndexSearch
{
    const SEARCH_METHOD_EQUAL = 'equal';
    const SEARCH_METHOD_CASE_SENSITIVE = 'case_sensitive';
    const SEARCH_METHOD_EXACT_WORD = 'exact_word';
    const SEARCH_METHOD_START_WITH = 'start_with';
    const SEARCH_METHOD_END_WITH = 'end_with';
    const SEARCH_METHOD_ALL_PART = 'all_part';
    const SEARCH_METHOD_ANY_PART = 'any_part';
    /**
     * Performs search query and returns result.
     *
     * @param array $params Orm type params for the query.
     * @return Main\ORM\Query\Query
     * @throws Main\SystemException
     */
    public static function query($params = [])
    {
    }
    /**
     * Counts rows in search result.
     *
     * @param array $filterIn Filter params.
     * @return int
     * @throws Main\SystemException
     */
    public static function getCount($filterIn)
    {
    }
    /**
     * Searches phrase by index.
     *
     * @param array $params Orm type params for the query.
     * @return Main\ORM\Query\Result
     * @throws Main\SystemException
     */
    public static function getList($params)
    {
    }
    /**
     * Processes select and filter params to convert them into orm type.
     *
     * @param array $params Orm type params for the query.
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    private static function processParams($params)
    {
    }
}