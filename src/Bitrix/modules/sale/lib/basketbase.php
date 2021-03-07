<?php

namespace Bitrix\Sale;

/**
 * Class BasketBase
 * @package Bitrix\Sale
 */
abstract class BasketBase extends \Bitrix\Sale\BasketItemCollection
{
    /** @var string */
    protected $siteId = null;
    /** @var int */
    protected $fUserId = null;
    /** @var OrderBase */
    protected $order = null;
    /** @var array $basketItemIndexMap */
    protected $basketItemIndexMap = array();
    /** @var int $maxItemSort */
    protected $maxItemSort = null;
    /** @var bool $isLoadForFUserId */
    private $isLoadForFUserId = false;
    /** @var bool $isSaveExecuting */
    protected $isSaveExecuting = false;
    /**
     * @param $code
     * @return BasketItemBase|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentNullException
     */
    public function getItemByBasketCode($code)
    {
    }
    /**
     * @param BasketItemBase $item
     * @return BasketItemBase|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     */
    public function getExistsItemByItem(\Bitrix\Sale\BasketItemBase $item)
    {
    }
    /**
     * @return OrderBase
     */
    protected function getEntityParent()
    {
    }
    /**
     * @return BasketBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    private static function createBasketObject()
    {
    }
    /**
     * @param $fUserId
     * @param $siteId
     * @return BasketBase
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     */
    public static function loadItemsForFUser($fUserId, $siteId)
    {
    }
    /**
     * @param array $filter
     * @return BasketBase
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     */
    protected function loadFromDb(array $filter)
    {
    }
    /**
     * Attach to the essence of the object of the order basket
     *
     * @param OrderBase $order - object of the order
     */
    public function setOrder(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * Getting the object of the order
     *
     * @return OrderBase
     */
    public function getOrder()
    {
    }
    /**
     * @param BasketItemBase $item
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function verifyItemSort(\Bitrix\Sale\BasketItemBase $item)
    {
    }
    /**
     * @param $siteId
     * @return BasketBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function create($siteId)
    {
    }
    /**
     * Getting basket price with discounts and taxes
     *
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getPrice()
    {
    }
    /**
     * Getting basket price without discounts
     *
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getBasePrice()
    {
    }
    /**
     * Getting the value of the tax basket
     *
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getVatSum()
    {
    }
    /**
     * Getting the value of the tax rate basket
     *
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getVatRate()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     */
    public function verify()
    {
    }
    /**
     * Getting the weight basket
     *
     * @return int
     */
    public function getWeight()
    {
    }
    /**
     * @return array
     */
    private function getOriginalItemsValues()
    {
    }
    /**
     * @param array $itemValues
     * @return Result
     */
    protected abstract function deleteInternal(array $itemValues);
    /**
     * Save basket
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     */
    public function save()
    {
    }
    /**
     * @param $itemValues
     * @return void
     */
    private function callEventOnBeforeSaleBasketItemDeleted($itemValues)
    {
    }
    /**
     * @param $itemValues
     * @return void
     */
    protected function callEventOnSaleBasketItemDeleted($itemValues)
    {
    }
    /**
     * @return Result
     */
    protected function callEventOnSaleBasketBeforeSaved()
    {
    }
    /**
     * @return Result
     */
    protected function callEventOnSaleBasketSaved()
    {
    }
    /**
     * Setting Customer ID to basket
     *
     * @param $fUserId - customer ID
     */
    public function setFUserId($fUserId)
    {
    }
    /**
     * Setting site ID to basket
     *
     * @param $siteId - site ID
     */
    protected function setSiteId($siteId)
    {
    }
    /**
     * Getting Customer ID
     *
     * @param bool $skipCreate - Creating a buyer if it is not found
     * @return int|null
     */
    public function getFUserId($skipCreate = false)
    {
    }
    /**
     * Getting Site ID
     *
     * @return string
     */
    public function getSiteId()
    {
    }
    /**
     * @param array $parameters
     * @throws Main\NotImplementedException
     * @return mixed
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param Internals\CollectableEntity $item
     * @param null $name
     * @param null $oldValue
     * @param null $value
     * @return Result
     * @throws Main\ArgumentTypeException
     */
    public function onItemModify(\Bitrix\Sale\Internals\CollectableEntity $item, $name = null, $oldValue = null, $value = null)
    {
    }
    /**
     * @param RefreshStrategy|null $strategy
     * @return Result
     */
    public function refresh(\Bitrix\Sale\Basket\RefreshStrategy $strategy = null)
    {
    }
    /**
     * @return BasketBase
     * @throws Main\ArgumentNullException
     */
    public function getOrderableItems()
    {
    }
    /**
     * @return BasketBase
     */
    public function getBasket()
    {
    }
    /**
     * @param $idOrder
     * @throws Main\NotImplementedException
     * @return Result
     */
    public static function deleteNoDemand($idOrder)
    {
    }
    /**
     * @return bool
     */
    public function isSaveRunning()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     */
    public function getContext()
    {
    }
    /**
     * Getting a list of a count of elements in the basket
     *
     * @return array
     * @throws Main\ArgumentNullException
     */
    public function getQuantityList()
    {
    }
    /**
     * @internal
     *
     * @param $index
     * @return mixed
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function deleteItem($index)
    {
    }
    /**
     * Apply the result of the discounts to the basket.
     * @internal
     *
     * @param array $basketRows
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function applyDiscount(array $basketRows)
    {
    }
    /**
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return BasketItemCollection
     */
    public function createClone(\SplObjectStorage $cloneEntity = null)
    {
    }
    /**
     * Returns copy of current basket.
     * For example, the copy will be used to calculate discounts.
     * So, basket does not contain full information about BasketItem with bundleCollection, because now it is not
     * necessary.
     *
     * Attention! Don't save the basket.
     *
     * @internal
     * @return BasketBase
     * @throws Main\SystemException
     */
    public function copy()
    {
    }
    /**
     * @internal
     *
     * Load the contents of the basket to order
     *
     * @param OrderBase $order
     * @return BasketBase
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     */
    public static function loadItemsForOrder(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @internal
     *
     * @param Internals\CollectableEntity $basketItem
     * @return Internals\CollectableEntity|void
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public function addItem(\Bitrix\Sale\Internals\CollectableEntity $basketItem)
    {
    }
    /**
     * @deprecated Use \Bitrix\Sale\BasketBase::refresh instead
     *
     * @param array $select
     * @param BasketItemBase|null $refreshItem
     * @return Result
     * @throws Main\ArgumentNullException
     */
    public function refreshData($select = array(), \Bitrix\Sale\BasketItemBase $refreshItem = null)
    {
    }
}