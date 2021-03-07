<?php

namespace Bitrix\ABTest;

class AdminHelper
{
    /**
     * Returns script filename by URL
     *
     * @param string $site Site ID.
     * @param string $url URL.
     * @return string|null
     */
    public static function getRealPath($site, $url)
    {
    }
    /**
     * Returns urlrewrite array
     *
     * @param string $site Site ID.
     * @return array
     */
    private static function getRewriteRules($site)
    {
    }
    /**
     * Returns site traffic capacity
     *
     * @param string $id Site ID.
     * @return array
     */
    public static function getSiteCapacity($id)
    {
    }
    /**
     * Returns A/B-test traffic amounts
     *
     * @param int $id A/B-test ID.
     * @return array
     */
    public static function getTestCapacity($id)
    {
    }
}