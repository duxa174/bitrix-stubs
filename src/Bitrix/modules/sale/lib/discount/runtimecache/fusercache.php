<?php

namespace Bitrix\Sale\Discount\RuntimeCache;

final class FuserCache
{
    /** @var array */
    private $fuserIds = array();
    /** @var FuserCache */
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns Singleton of FuserCache.
     * @return FuserCache
     */
    public static function getInstance()
    {
    }
    /**
     * Returns user by fuserId.
     * @param int $fuserId Fuser Id.
     * @return int
     */
    public function getUserIdById($fuserId)
    {
    }
    /**
     * Cleans fusers cache.
     * @return void
     */
    public function clean()
    {
    }
}