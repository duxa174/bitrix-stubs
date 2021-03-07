<?php

namespace Bitrix\Security\Filter\Auditor;

/**
 * Path security auditor
 * Searching "path traversal" like strings, for example: /foo/../bar/
 *
 * @package Bitrix\Security\Filter\Auditor
 * @since 14.0.0
 */
class Path extends \Bitrix\Security\Filter\Auditor\Base
{
    protected $name = 'PHP';
    protected function getFilters()
    {
    }
}