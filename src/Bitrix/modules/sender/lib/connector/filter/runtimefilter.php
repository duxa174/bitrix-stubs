<?php

namespace Bitrix\Sender\Connector\Filter;

/**
 * Class RuntimeFilter
 * @package Bitrix\Sender\Connector\Filter
 */
class RuntimeFilter
{
    /** @var  string $key Key. */
    protected $key;
    /** @var  string $value Value. */
    protected $value;
    /** @var ExpressionField[] $runtime Runtime */
    protected $runtime = [];
    /**
     * Set filter.
     *
     * @param string $key Key.
     * @param string $value Value.
     * @return $this
     */
    public function setFilter($key, $value)
    {
    }
    /**
     * Add runtime field.
     *
     * @param array $field Field.
     * @return $this
     */
    public function addRuntime(array $field)
    {
    }
    /**
     * Get runtime.
     *
     * @return ExpressionField[]
     */
    public function getRuntime()
    {
    }
    /**
     * Get key.
     *
     * @return string
     */
    public function getKey()
    {
    }
    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
    }
}