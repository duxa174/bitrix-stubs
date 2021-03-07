<?php

namespace Bitrix\Security\Filter\Auditor;

/**
 * Sql security auditor
 * Searching SQLi like strings, for example: union select money,1,2,3 from big_guy;
 *
 * @package Bitrix\Security\Filter\Auditor
 * @since 14.0.0
 */
class Sql extends \Bitrix\Security\Filter\Auditor\Base
{
    protected $name = 'SQL';
    protected function getFilters()
    {
    }
}