<?php

namespace Bitrix\Sender\Entity;

class Segment extends \Bitrix\Sender\Entity\Base
{
    const CODE_ALL = 'all';
    /** @var bool $isFilterOnly Is filter only. */
    protected $isFilterOnly = false;
    /**
     * Get default segments.
     *
     * @return array
     */
    public static function getDefaultIds()
    {
    }
    /**
     * Get segment ID by code.
     *
     * @param string|string[] $code Code.
     * @return integer|null
     */
    public static function getIdByCode($code)
    {
    }
    /**
     * Get list.
     *
     * @param array $parameters Parameters.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Get default data.
     *
     * @return array
     */
    protected function getDefaultData()
    {
    }
    /**
     * Load data.
     *
     * @param integer $id ID.
     * @return array|null
     */
    protected function loadData($id)
    {
    }
    /**
     * Save data.
     *
     * @param integer|null $id ID.
     * @param array $data Data.
     * @return integer|null
     */
    protected function saveData($id = null, array $data)
    {
    }
    private function updateDealCategory(int $groupId, $connector)
    {
    }
    /**
     * Return true if segment is hidden.
     *
     * @return bool
     */
    public function isHidden()
    {
    }
    /**
     * Return true if segment is system.
     *
     * @return bool
     */
    public function isSystem()
    {
    }
    /**
     * Is save filters only.
     *
     * @return bool
     */
    public function isFilterOnly()
    {
    }
    /**
     * Set save filter only mode.
     *
     * @param bool $mode Mode.
     * @return $this
     */
    public function setFilterOnlyMode($mode = true)
    {
    }
    /**
     * Append contact set connector.
     *
     * @param int|null $contactSetId Contact set ID.
     * @return $this
     */
    public function appendContactSetConnector($contactSetId = null)
    {
    }
    /**
     * Return fisrt contact set ID from in segment.
     *
     * @return int|null
     */
    protected function getFirstContactSetId()
    {
    }
    /**
     * Upload.
     *
     * @param array $list List of emails and phones.
     * @return $this
     */
    public function upload(array $list)
    {
    }
    /**
     * Update segment address counters.
     *
     * @param integer $segmentId Segment ID.
     * @param Connector\DataCounter[] $counters Counters.
     * @return bool
     */
    public static function updateAddressCounters($segmentId, array $counters)
    {
    }
    /**
     * Get segment address counter.
     *
     * @param integer $segmentId Segment ID.
     * @return Connector\DataCounter
     */
    public static function getAddressCounter($segmentId)
    {
    }
    /**
     * Get segment address counters.
     *
     * @param integer[] $list List of ID.
     * @return array
     */
    public static function getAddressCounters(array $list)
    {
    }
    /**
     * Update segment use counter.
     *
     * @param integer[] $list Segment ID list.
     * @param bool $isInclude Update include counters.
     * @return void
     */
    public static function updateUseCounters(array $list, $isInclude = true)
    {
    }
    /**
     * Remove.
     *
     * @return bool
     */
    public function remove()
    {
    }
    /**
     * Remove by letter ID.
     *
     * @param integer $id Letter ID.
     * @return bool
     */
    public static function removeById($id)
    {
    }
}