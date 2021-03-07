<?php

namespace Bitrix\Main\Grid;

/**
 * Class Declension
 * @package Bitrix\Main\Grid
 */
class Declension
{
    /**
     * @var string
     */
    public $oneItem;
    /**
     * @var string
     */
    public $fourItem;
    /**
     * @var string
     */
    public $fiveItem;
    /**
     * Declension constructor.
     *
     * @param string $one
     * @param string $four
     * @param string $five
     */
    public function __construct($one = "", $four = "", $five = "")
    {
    }
    /**
     * Gets declension
     * @param number|string $number
     * @return string
     */
    public function get($number)
    {
    }
}