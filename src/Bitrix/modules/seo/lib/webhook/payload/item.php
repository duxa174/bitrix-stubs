<?php

namespace Bitrix\Seo\WebHook\Payload;

/**
 * Class Item
 *
 * @package Bitrix\Seo\WebHook\Payload
 */
abstract class Item
{
    /** @var  array $data Data. */
    protected $data = ['source' => null];
    /**
     * Item constructor.
     *
     * @param array $data Data.
     */
    public function __construct(array $data)
    {
    }
    /**
     * Get data.
     *
     * @return array
     */
    public function getData()
    {
    }
    /**
     * Set data.
     *
     * @param array $data Data.
     * @return $this
     */
    public function setData(array $data)
    {
    }
    /**
     * Get source.
     *
     * @return string
     * @throws ArgumentException
     */
    public function get($key)
    {
    }
    /**
     * Set source.
     *
     * @param string $key Key.
     * @param string|array $value Value
     * @return $this
     * @throws ArgumentException
     */
    public function set($key, $value)
    {
    }
    /**
     * Magic method __call.
     *
     * @param string $name Name.
     * @param array $arguments Arguments.
     * @return mixed
     * @throws ArgumentException
     */
    public function __call($name, $arguments)
    {
    }
}