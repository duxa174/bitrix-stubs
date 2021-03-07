<?php

namespace Bitrix\Landing;

class Demos extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Item for show in 'create site'.
     */
    const TPL_TYPE_SITE = 'S';
    /**
     * Item for show in 'create page'.
     */
    const TPL_TYPE_PAGE = 'P';
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'DemosTable';
    /**
     * Delete all app items from repo.
     * @param string $code App code.
     * @return void
     */
    public static function deleteByAppCode($code)
    {
    }
}