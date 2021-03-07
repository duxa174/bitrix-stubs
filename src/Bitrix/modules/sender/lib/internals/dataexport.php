<?php

namespace Bitrix\Sender\Internals;

/**
 * Class DataExport
 * @package Bitrix\Sender\Internals
 */
class DataExport
{
    /**
     * Export to csv.
     *
     * @param array $columns Columns.
     * @param array|Result $list Data list.
     * @param callable|null $rowCallback Row callback.
     * @return void
     */
    public static function toCsv(array $columns, $list, $rowCallback = null)
    {
    }
    protected static function flushHeaders()
    {
    }
}