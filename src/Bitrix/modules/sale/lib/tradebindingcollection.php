<?php

namespace Bitrix\Sale;

/**
 * Class TradeBindingCollection
 * @package Bitrix\Sale
 */
class TradeBindingCollection extends \Bitrix\Sale\Internals\EntityCollection
{
    protected $order = null;
    /**
     * @return Internals\Entity
     */
    protected function getEntityParent()
    {
    }
    /**
     * @return null
     */
    public function getOrder()
    {
    }
    /**
     * @return TradeBindingCollection
     * @throws \Bitrix\Main\ArgumentException
     */
    private static function createCollectionObject()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param Order $order
     */
    public function setOrder(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     * @return TradeBindingCollection
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
     */
    public static function load(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param array $parameters
     * @return \Bitrix\Main\DB\Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param TradingPlatform\Platform|null $platform
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     * @throws Main\SystemException
     */
    public function createItem(\Bitrix\Sale\TradingPlatform\Platform $platform = null)
    {
    }
    /**
     * @param Internals\CollectableEntity $item
     * @return Internals\CollectableEntity
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function addItem(\Bitrix\Sale\Internals\CollectableEntity $item)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectNotFoundException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @internal
     *
     * @param $idOrder
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function deleteNoDemand($idOrder)
    {
    }
    /**
     * @param $primary
     * @return Main\ORM\Data\DeleteResult
     * @throws \Exception
     */
    protected static function deleteInternal($primary)
    {
    }
    /**
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return TradeBindingCollection
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
}