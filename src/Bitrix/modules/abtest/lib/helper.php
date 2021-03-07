<?php

namespace Bitrix\ABTest;

class Helper
{
    /**
     * Returns active A/B-test
     *
     * @return array|null
     */
    public static function getActiveTest()
    {
    }
    /**
     * Returns an A/B-test context array
     *
     * @param array $abtest A/B-test.
     * @param string $section Section.
     * @return array
     */
    private static function context($abtest, $section)
    {
    }
    /**
     * Returns current A/B-test context
     *
     * @return array|null
     */
    public static function getContext()
    {
    }
    /**
     * Returns alternative test value for current A/B-test context
     *
     * @param string $type Test type.
     * @param string $value Test original value.
     * @return string|null
     */
    public static function getAlternative($type, $value)
    {
    }
    /**
     * Starts an A/B-test
     *
     * @param int $id A/B-test ID.
     * @return bool
     */
    public static function startTest($id)
    {
    }
    /**
     * Stops an A/B-test
     *
     * @param int $id A/B-test ID.
     * @param bool $auto Auto-stop flag.
     * @return bool
     */
    public static function stopTest($id, $auto = false)
    {
    }
    /**
     * Deletes an A/B-test
     *
     * @param int $id A/B-test ID.
     * @return bool
     */
    public static function deleteTest($id)
    {
    }
    /**
     * Cleans active A/B-test cache
     *
     * @param int $siteId Site ID.
     * @return void
     */
    public static function clearCache($siteId)
    {
    }
}