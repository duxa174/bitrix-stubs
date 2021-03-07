<?php

namespace Bitrix\Translate\Index;

class FileIndexSearch
{
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