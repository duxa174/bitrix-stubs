<?php

namespace Bitrix\Translate\Index;

class Aggregate
{
    /** @var Main\ORM\Entity[] */
    private static $entities = [];
    /**
     * @param array $params Array of parameters:
     * $params = [
     *    'PARENT_ID' => (int) Top parent node Id.
     *    'CURRENT_LANG' => (string) Current language Id.
     *    'LANGUAGES' => (string[]) Languages Ids.
     *    'PATH_LIST' => (string) Path list to filter.
     * ].
     *
     * @return Main\ORM\Query\Query
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function buildAggregateQuery(array $params)
    {
    }
    /**
     * @param array $params Array of parameters:
     * $params = [
     *    'PARENT_ID' => (int) Top parent node Id.
     *    'CURRENT_LANG' => (string) Current language Id.
     *    'LANGUAGES' => (string[]) Languages Ids.
     *    'PATH_LIST' => (string) Path list to filter.
     * ].
     *
     * @return Main\ORM\Query\Query
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function buildQuery(array $params)
    {
    }
}