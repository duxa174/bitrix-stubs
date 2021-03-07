<?php

namespace Bitrix\Security\Filter\Auditor;

/**
 * Xss security auditor
 * Searching XSS like strings, for example: <img src=x onerror=prompt(/Hi_big_guy/)>
 *
 * @package Bitrix\Security\Filter\Auditor
 * @since 14.0.0
 */
class Xss extends \Bitrix\Security\Filter\Auditor\Base
{
    protected $name = 'XSS';
    private $whiteList = array();
    /**
     * Process and save filtered value
     * Return true if value triggered auditor filtration
     * For get filtered value use Xss::getFilteredValue
     *
     * Simple example:
     * <code>
     * $ob = new Xss();
     * if ($ob->process($someValue))
     *     $someValue = $ob->getFilteredValue();
     * </code>
     * @param string $value
     * @return bool
     */
    public function process($value)
    {
    }
    protected function initializeWhiteList()
    {
    }
    protected function getFilters()
    {
    }
    /**
     * @return array
     */
    protected function getWhiteList()
    {
    }
    /**
     * @param string $value
     * @param string $action - only 'store' or 'restore'
     * @return string
     */
    protected function processWhiteList($value, $action = 'store')
    {
    }
}