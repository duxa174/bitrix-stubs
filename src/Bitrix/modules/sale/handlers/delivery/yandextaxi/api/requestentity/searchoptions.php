<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class SearchOptions
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class SearchOptions extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var int */
    protected $offset = 0;
    /** @var int */
    protected $limit = 100;
    /**
     * @return int
     */
    public function getOffset() : int
    {
    }
    /**
     * @param int $offset
     * @return SearchOptions
     */
    public function setOffset(int $offset) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\SearchOptions
    {
    }
    /**
     * @return int
     */
    public function getLimit() : int
    {
    }
    /**
     * @param int $limit
     * @return SearchOptions
     */
    public function setLimit(int $limit) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\SearchOptions
    {
    }
}