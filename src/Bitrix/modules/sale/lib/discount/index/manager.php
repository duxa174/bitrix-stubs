<?php

namespace Bitrix\Sale\Discount\Index;

final class Manager
{
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var  Manager */
    private static $instance;
    /**
     * Returns Singleton of Manager
     * @return Manager
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
    public function dropIndex($discountId)
    {
    }
    public function indexDiscount(array $discount)
    {
    }
    public function hasDataToIndex(array $discount)
    {
    }
    private function getConditionStructure(array $discount)
    {
    }
    private function extractElementsAndSections(array $condition)
    {
    }
    private function convertSkuToMainProducts(array $elementIds)
    {
    }
}