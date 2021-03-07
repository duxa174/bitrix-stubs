<?php

namespace Bitrix\Landing;

class Placement extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'PlacementTable';
    /**
     * Delete records by app id.
     * @param int $id App id.
     * @return void
     */
    public static function deleteByAppId($id)
    {
    }
}