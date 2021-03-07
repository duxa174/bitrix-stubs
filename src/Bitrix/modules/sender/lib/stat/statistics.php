<?php

namespace Bitrix\Sender\Stat;

class Statistics
{
    const AVERAGE_EFFICIENCY = 0.15;
    const USER_OPTION_FILTER_NAME = 'statistics_filter';
    /** @var Filter */
    protected $filter;
    /** @var integer */
    protected $cacheTtl = 3600;
    /** @var array */
    protected $counters = null;
    /** @var integer */
    protected $userId = null;
    /**
     * Create instance.
     *
     * @param Filter $filter Filter.
     * @return static
     */
    public static function create(\Bitrix\Sender\Stat\Filter $filter = null)
    {
    }
    /**
     * Constructor.
     *
     * @param Filter $filter Filter.
     */
    public function __construct(\Bitrix\Sender\Stat\Filter $filter = null)
    {
    }
    /**
     * Set cache TTL.
     *
     * @param integer $cacheTtl Cache ttl.
     * @return $this
     */
    public function setCacheTtl($cacheTtl)
    {
    }
    /**
     * Set user Id.
     *
     * @param integer $userId User Id.
     * @return $this
     */
    public function setUserId($userId)
    {
    }
    /**
     * Get cache TTL.
     *
     * @return integer
     */
    public function getCacheTtl()
    {
    }
    /**
     * Return filter.
     *
     * @return Filter
     */
    public function getFilter()
    {
    }
    /**
     * Return filter.
     *
     * @param string $name Filter name.
     * @param string $value Filter value.
     * @return $this
     */
    public function filter($name, $value = null)
    {
    }
    /**
     * Init filter from request.
     *
     * @return $this
     */
    public function initFilterFromRequest()
    {
    }
    /**
     * Init filter from request.
     *
     * @return $this
     */
    protected function initFilterFromUserOption()
    {
    }
    protected function saveFilterToUserOption()
    {
    }
    protected static function calculateEfficiency($counters, $maxEfficiency = null)
    {
    }
    protected static function div($dividendCode, $dividerCode, $items)
    {
    }
    protected static function formatNumber($number, $num = 1)
    {
    }
    protected static function getCounterCalculation($code, $value, $percentBase = 0)
    {
    }
    protected function getMappedFilter()
    {
    }
    /**
     * Return efficiency.
     *
     * @return float
     */
    public function getEfficiency()
    {
    }
    /**
     * Return dynamic of counters.
     *
     * @return array
     */
    public function getCountersDynamic()
    {
    }
    /**
     * Return counters.
     *
     * @return array
     */
    public function getCounters()
    {
    }
    public function initFromArray($postingData)
    {
    }
    protected function createListFromItem($item)
    {
    }
    /**
     * Return subscribers.
     *
     * @return array
     */
    public function getCounterPostings()
    {
    }
    /**
     * Return subscribers.
     *
     * @return array
     */
    public function getCounterSubscribers()
    {
    }
    /**
     * Return click links.
     *
     * @param integer $limit Limit.
     * @return array
     */
    public function getClickLinks($limit = 15)
    {
    }
    /**
     * Return read counter data by day time.
     *
     * @param int $step Step.
     * @return array
     */
    public function getReadingByDayTime($step = 2)
    {
    }
    /**
     * Return recommended sending time for mailing.
     *
     * @param integer $chainId Chain Id.
     * @return string
     */
    public function getRecommendedSendTime($chainId = null)
    {
    }
    /**
     * Return chain list.
     *
     * @param integer $limit Limit.
     * @return array
     */
    public function getChainList($limit = 20)
    {
    }
    /**
     * Return global filter data.
     *
     * @return array
     */
    public function getGlobalFilterData()
    {
    }
    /**
     * Return period list.
     *
     * @return array
     */
    protected function getPeriodList()
    {
    }
    /**
     * Return author list.
     *
     * @return array
     */
    protected function getAuthorList()
    {
    }
}