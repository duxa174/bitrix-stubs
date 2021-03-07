<?php

namespace Bitrix\Landing;

class Debug
{
    /**
     * Gets last query in ORM.
     * @return string
     */
    public static function q()
    {
    }
    /**
     * Logging in system log.
     * @param string $itemId Log item id.
     * @param mixed $itemDesc Log item description.
     * @param string $typeId Log type id.
     * @return void
     */
    public static function log($itemId, $itemDesc, $typeId = 'LANDING_LOG')
    {
    }
}