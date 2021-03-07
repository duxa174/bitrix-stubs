<?php

namespace Bitrix\Sender\Connector\Filter;

/**
 * Class DateField
 * @package Bitrix\Sender\Connector\Filter
 */
abstract class AbstractField
{
    /** @var array $data Data. */
    protected $data;
    /**
     * DateField constructor.
     *
     * @param array $data Data.
     * @return static
     */
    public static function create(array $data)
    {
    }
    /**
     * DateField constructor.
     *
     * @param array $data Data.
     */
    public function __construct(array $data)
    {
    }
    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Get filter key.
     *
     * @return string
     */
    public function getFilterKey()
    {
    }
    /**
     * Get value.
     *
     * @param mixed $defaultValue Default value.
     * @return string
     */
    public function getValue($defaultValue = null)
    {
    }
    /**
     * Apply filter.
     *
     * @param array $filter Filter.
     * @return void
     */
    public abstract function applyFilter(array &$filter = array());
}