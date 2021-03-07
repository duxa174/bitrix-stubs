<?php

namespace Bitrix\Sender\Connector;

/**
 * Class DataCounter
 * @package Bitrix\Sender\Connector
 */
class DataCounter
{
    /** @var array $data Data. */
    public $data;
    /**
     * DataCounter constructor.
     *
     * @param array $data Data.
     */
    public function __construct(array $data)
    {
    }
    /**
     * Get summary.
     *
     * @return integer
     */
    public function getSummary()
    {
    }
    /**
     * Get count by type.
     *
     * @param integer $typeId Type ID.
     * @return integer
     */
    public function getCount($typeId)
    {
    }
    /**
     * Leave by type ID.
     *
     * @param integer $leaveTypeId Type ID.
     * @return $this
     */
    public function leave($leaveTypeId = null)
    {
    }
    /**
     * Get count by type.
     *
     * @return array
     */
    public function getList()
    {
    }
    /**
     * Get array.
     *
     * @return array
     */
    public function getArray()
    {
    }
    /**
     * Get array counters.
     *
     * @return array
     */
    public function getArrayCounters()
    {
    }
    /**
     * Get default array.
     *
     * @return array
     */
    public static function getDefaultArray()
    {
    }
}