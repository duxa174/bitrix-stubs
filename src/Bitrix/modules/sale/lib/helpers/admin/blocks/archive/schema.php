<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks\Archive;

abstract class Schema
{
    protected $order;
    /**
     * Schema constructor.
     */
    function __construct()
    {
    }
    /**
     * Collect blocks into array.
     * 
     * @param Sale\Order $order
     *
     * @return array $html
     */
    public function getBlocks(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Return list of blocks's names.
     */
    protected abstract function collectBlocks();
}