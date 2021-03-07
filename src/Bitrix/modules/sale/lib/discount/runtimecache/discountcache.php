<?php

namespace Bitrix\Sale\Discount\RuntimeCache;

final class DiscountCache
{
    /** @var DiscountCache */
    private static $instance;
    private $discounts = array();
    private $discountIds = array();
    private $discountModules = array();
    private $discountEntities = array();
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns Singleton of DiscountCache.
     * @return DiscountCache
     */
    public static function getInstance()
    {
    }
    public function getDiscountIds(array $userGroups)
    {
    }
    public function getDiscountModules(array $discountIds)
    {
    }
    public function getDiscountEntities(array $discountIds)
    {
    }
    public function getDiscounts(array $discountIds, array $executeModuleFilter, $siteId, array $couponList = array())
    {
    }
    /**
     * Added keys from source array to destination array.
     *
     * @param array &$dest			Destination array.
     * @param array $src			Source array.
     * @return void
     */
    private static function recursiveMerge(&$dest, $src)
    {
    }
}