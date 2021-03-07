<?php

namespace Bitrix\Sale\Helpers\Admin;

/**
 * Class - marker. It Can be terminal.
 * Class Result
 * @package Bitrix\Sale\Helpers\Admin
 */
class OrderEditResult extends \Bitrix\Sale\Result
{
    protected $isTerminal = false;
    /**
     * @return bool
     */
    public function isTerminal()
    {
    }
    /**
     * @param bool $isTerminal
     */
    public function setIsTerminal($isTerminal)
    {
    }
}