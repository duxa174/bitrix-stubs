<?php

namespace Bitrix\Sale\Internals;

class Pool
{
    /** @var array */
    protected $quantities = array();
    /** @var array */
    protected $items = array();
    public function __construct()
    {
    }
    /**
     * Returns any variable by its name. Null if variable is not set.
     *
     * @param $code
     * @return float | null
     */
    public function get($code)
    {
    }
    /**
     * @param $code
     * @param $quantity
     */
    public function set($code, $quantity)
    {
    }
    /**
     * @param $code
     */
    public function delete($code)
    {
    }
    /**
     * @param $code
     * @param $item
     */
    public function addItem($code, $item)
    {
    }
    /**
     * @return array
     */
    public function getQuantities()
    {
    }
    /**
     * @return array
     */
    public function getItems()
    {
    }
}