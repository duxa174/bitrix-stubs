<?php

namespace Bitrix\Sale\Compatible;

class BasketCompatibility extends \Bitrix\Sale\Compatible\Internals\EntityCompatibility
{
    private static $proxyBasket = array();
    /** @var null|OrderCompatibility */
    protected $orderCompatibility = null;
    /**
     * @return string
     */
    protected static function getRegistryType()
    {
    }
    /**
     * @return Main\Entity\Base
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected static function getEntity()
    {
    }
    /**
     * @return string
     */
    protected static function getOrderCompatibilityClassName()
    {
    }
    /**
     * @param array $fields - field basket
     */
    protected function __construct(array $fields = array())
    {
    }
    /**
     * @param OrderCompatibility $orderCompatibility
     *
     * @return BasketCompatibility
     */
    public static function create(\Bitrix\Sale\Compatible\OrderCompatibility $orderCompatibility)
    {
    }
    /**
     * @internal
     *
     * @param Sale\Basket $basket
     * @param array $requestFields
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     */
    public function fillBasket(\Bitrix\Sale\Basket $basket, array $requestFields)
    {
    }
    /**
     * @param Sale\Basket $basket
     * @param array $requestBasketItems
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @throws Main\ObjectNotFoundException
     */
    protected function parseBasketItems(\Bitrix\Sale\Basket $basket, array $requestBasketItems)
    {
    }
    /**
     * @param Sale\Basket $basket
     * @param array $basketItemList
     * @param Sale\BasketItem|null $externalParentBasketItem
     * @throws Main\ObjectException
     * @throws Main\ObjectNotFoundException
     */
    private function setChildBundleCollection(\Bitrix\Sale\Basket $basket, array $basketItemList, \Bitrix\Sale\BasketItem $externalParentBasketItem = null)
    {
    }
    /**
     * Add the position of the basket
     *
     * @param array $fields - an array of fields with data element baskets
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public static function add(array $fields)
    {
    }
    /**
     * Update data element baskets
     *
     * @param $id
     * @param array $fields
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectNotFoundException
     */
    public static function update($id, array $fields)
    {
    }
    /**
     * @param $id
     * @return Sale\Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function delete($id)
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getAliasFields()
    {
    }
    /**
     * @return array
     */
    protected static function getSelectFields()
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @param $id
     * @return Sale\BasketItem|Sale\Result|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected static function loadEntityFromBasket($id)
    {
    }
    /**
     * @param Sale\Order $order
     * @param Sale\Basket $basket
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    protected static function appendBasketToOrder(\Bitrix\Sale\Order $order, \Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * @param array $list
     * @return Sale\Result
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function setBasketFields(array $list)
    {
    }
    /**
     * @return OrderCompatibility|null
     */
    protected function getOrderCompatibility()
    {
    }
    /**
     * Data synchronization basket and shipment
     *
     * @internal
     *
     * @param Sale\ShipmentCollection $shipmentCollection		Entity shipment collection.
     * @param Sale\Basket $basket								Entity basket.
     *
     * @return Sale\Result
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function syncShipmentCollectionAndBasket(\Bitrix\Sale\ShipmentCollection $shipmentCollection, \Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * @internal
     * @param Sale\BasketItem $basketItem
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public static function convertBasketItemToArray(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    protected function getWhiteListFields()
    {
    }
}
class BasketFetchAdapter implements \Bitrix\Sale\Compatible\FetchAdapter
{
    public function adapt(array $row)
    {
    }
}