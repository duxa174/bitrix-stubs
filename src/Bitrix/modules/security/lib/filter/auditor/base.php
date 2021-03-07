<?php

namespace Bitrix\Security\Filter\Auditor;

/**
 * Abstract class of all security auditors
 *
 * @package Bitrix\Security\Filter\Auditor
 * @since 14.0.0
 */
abstract class Base
{
    private $splittingChar = ' ';
    private $filteredValue = '';
    protected $filters = array();
    protected $name = '';
    function __construct($splittingChar = '')
    {
    }
    /**
     * Process and save filtered value
     * Return true if value triggered auditor filtration
     * For get filtered value use Base::getFilteredValue
     *
     * Simple example:
     * <code>
     * $ob = new Base();
     * if ($ob->process($someValue))
     *     $someValue = $ob->getFilteredValue();
     * </code>
     * @param string $value
     * @return bool
     */
    public function process($value)
    {
    }
    /**
     * Return filtered value after last value processing
     *
     * @see Base::process
     * @return string
     */
    public function getFilteredValue()
    {
    }
    /**
     * Return auditor name
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @param string $string
     */
    protected function setFilteredValue($string)
    {
    }
    /**
     * @param string $char
     */
    protected function setSplittingChar($char)
    {
    }
    /**
     * @param string $customChar
     * @return string
     */
    protected function getSplittingChar($customChar = '')
    {
    }
    /**
     * make string like '\\1 * \\2 * \\3 * \\4'
     * @param int $splitItemsCount
     * @param string $customSplitChar
     * @return string
     */
    protected function getSplittingString($splitItemsCount = 2, $customSplitChar = '')
    {
    }
    protected function initializeFilters()
    {
    }
    /**
     * @return array
     */
    protected abstract function getFilters();
}