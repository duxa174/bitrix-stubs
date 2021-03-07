<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Sources;

/**
 * Class Section
 * Complex iterator for processing albums from several iblocks
 *
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Sources
 */
class Section extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Sources\DataSource implements \Iterator
{
    protected $sections;
    protected $resSections;
    protected $currentKey = 0;
    protected $currentRecord = array();
    protected $vk;
    protected $exportId;
    protected $sectionsToExport;
    protected $sectionsAliases;
    protected $startPosition = 0;
    /**
     * Section constructor.
     * @param $exportId
     * @param $startPosition
     */
    public function __construct($exportId, $startPosition)
    {
    }
    /**
     * Create object for get values. Later we well Fetch them
     *
     * @return array|bool|\CDBResult|\CIBlockResult
     */
    private function createSectionsDbObject()
    {
    }
    /**
     * More simply setStartPosition for albums
     *
     * @param string $startPosition - number of start position
     */
    protected function setStartPosition($startPosition)
    {
    }
    /**
     * Owerwrite ITERATOR method
     * @return array
     */
    public function current()
    {
    }
    /**
     * Owerwrite ITERATOR method
     * @return int
     */
    public function key()
    {
    }
    /**
     * Owerwrite ITERATOR method
     */
    public function next()
    {
    }
    /**
     * Fetch once next item from bd object
     *
     * @return null
     */
    private function nextItem()
    {
    }
    /**
     * Owerwrite ITERATOR method
     */
    public function rewind()
    {
    }
    /**
     * Owerwrite ITERATOR method
     * @return bool
     */
    public function valid()
    {
    }
}