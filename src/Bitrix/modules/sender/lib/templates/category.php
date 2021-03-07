<?php

namespace Bitrix\Sender\Templates;

/**
 * Class Category
 * @package Bitrix\Sender\Templates
 */
class Category extends \Bitrix\Sender\Internals\ClassConstant
{
    const RECENT = 100;
    const BASE = 1;
    const USER = 2;
    const ADDITIONAL = 3;
    const CASES = 4;
    /**
     * Get caption.
     *
     * @param integer $id ID.
     * @return integer|null
     */
    public static function getName($id)
    {
    }
    /**
     * Sort by code.
     *
     * @param string $codeA Code A.
     * @param string $codeB Code B.
     * @return integer
     */
    public static function sortByCode($codeA, $codeB)
    {
    }
}