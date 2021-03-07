<?php

namespace Bitrix\Sender\Templates;

/**
 * Class Type
 * @package Bitrix\Sender\Templates
 */
class Type extends \Bitrix\Sender\Internals\ClassConstant
{
    const BASE = 1;
    const USER = 2;
    const ADDITIONAL = 3;
    const SITE_TMPL = 4;
    /**
     * Get caption.
     *
     * @param integer $id ID.
     * @return integer|null
     */
    public static function getName($id)
    {
    }
}