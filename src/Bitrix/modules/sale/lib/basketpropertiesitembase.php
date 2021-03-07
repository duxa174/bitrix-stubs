<?php

namespace Bitrix\Sale;

/**
 * Class BasketPropertyItemBase
 * @package Bitrix\Sale
 */
abstract class BasketPropertyItemBase extends \Bitrix\Sale\Internals\CollectableEntity
{
    /**
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @return array
     */
    protected static function getMeaningfulFields()
    {
    }
    /**
     * @return string|void
     */
    public static function getRegistryEntity()
    {
    }
    /**
     * @param array $fields
     * @return BasketPropertyItem
     * @throws NotImplementedException
     * @throws Main\ArgumentException
     */
    private static function createBasketPropertyItemObject(array $fields = [])
    {
    }
    /**
     * @param BasketPropertiesCollectionBase $basketPropertiesCollection
     * @return BasketPropertyItem
     * @throws NotImplementedException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function create(\Bitrix\Sale\BasketPropertiesCollectionBase $basketPropertiesCollection)
    {
    }
    /**
     * @return string
     */
    protected static function generateXmlId()
    {
    }
    /**
     * @internal
     *
     * @return Result
     * @throws NotImplementedException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function save()
    {
    }
    /*
     * @return void
     */
    private function checkCallingContext()
    {
    }
    /**
     * @return Result
     * @throws NotImplementedException
     */
    public function verify()
    {
    }
    /**
     * @param $id
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws NotImplementedException
     */
    public static function loadForBasketItem($id)
    {
    }
    /**
     * @param $idList
     * @return array
     * @throws Main\ArgumentException
     * @throws NotImplementedException
     */
    public static function loadForBasket($idList)
    {
    }
    /**
     * @param array $data
     * @return Main\Entity\AddResult
     */
    protected abstract function addInternal(array $data);
    /**
     * @param $primary
     * @param array $data
     * @return Main\Entity\UpdateResult
     */
    protected abstract function updateInternal($primary, array $data);
    /**
     * @param array $parameters
     * @throws NotImplementedException
     */
    public static function getList(array $parameters = [])
    {
    }
    /**
     * @return null|string
     * @internal
     *
     */
    public static function getEntityEventName()
    {
    }
}