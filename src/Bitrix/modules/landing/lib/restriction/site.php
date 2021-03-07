<?php

namespace Bitrix\Landing\Restriction;

class Site
{
    /**
     * Checks restriction for creating and publication site.
     * @param string $code Restriction code (not used here).
     * @param array $params Additional params.
     * @return bool
     */
    public static function isCreatingAllowed(string $code, array $params) : bool
    {
    }
    /**
     * Checks restriction for free domain.
     * @return bool
     */
    public static function isFreeDomainAllowed() : bool
    {
    }
    /**
     * Checks restriction for site export.
     * @return bool
     */
    public static function isExportAllowed() : bool
    {
    }
}