<?php

namespace Bitrix\Security\Filter;

/**
 * Filter for Server variables, such as $_SERVER["REQUEST_URI"]
 *
 * @package Bitrix\Security\Filter
 * @since 14.0.0
 */
class Server extends \Bitrix\Security\Filter\Request implements \Bitrix\Main\Type\IRequestFilter
{
    protected $interestingKeys = array('REQUEST_URI', 'QUERY_STRING', 'SCRIPT_URL', 'SCRIPT_URI', 'PHP_SELF');
    /**
     * Return filtered values or null if auditors not triggered (by default)
     *
     * @example tests/security/filter/serverfilter.php
     * @param array $values Array of values to be checked.
     * @param bool $isReturnChangedOnly If true - return values only if it changed by some auditors, otherwise return null.
     * @return array|null
     */
    public function filter(array $values, $isReturnChangedOnly = true)
    {
    }
}