<?php

namespace Bitrix\Sale\Discount;

final class Analyzer
{
    /** @var array */
    protected $internalModules = array('sale', 'catalog', 'main');
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var  static */
    private static $instance;
    /**
     * Returns Singleton of Analyzer
     * @return static
     */
    public static function getInstance()
    {
    }
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns true if the discount contains action with gift.
     *
     * @param array $discount Discount.
     * @return bool
     */
    public function isContainGiftAction(array $discount)
    {
    }
    /**
     * Tells if this discount can calculate separately. It means it doesn't depends on basket and other discounts.
     * @param array $discount Discount.
     *
     * @return bool
     */
    public function canCalculateSeparately(array $discount)
    {
    }
    /**
     * Tells if allowed to calculate discount on basket separately.
     *
     * @return bool
     */
    public function canCalculateSeparatelyAllDiscount()
    {
    }
    private function isThereCustomDiscountModules()
    {
    }
    private function isExistOnlySaleDiscountAction(array $discount)
    {
    }
    private function emptyConditionsList(array $discount)
    {
    }
    private function tryToFindAppliedCondition(array $discount)
    {
    }
}