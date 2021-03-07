<?php

namespace Bitrix\Sale;

/**
 * Class TradeBindingEntity
 * @package Bitrix\Sale
 */
class TradeBindingEntity extends \Bitrix\Sale\Internals\CollectableEntity
{
    private $tradePlatform = null;
    /**
     * @return string
     */
    public static function getRegistryEntity()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
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
     * @return array
     */
    protected static function getFieldsMap()
    {
    }
    /**
     * @param TradeBindingCollection $collection
     * @param TradingPlatform\Platform|null $platform
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function create(\Bitrix\Sale\TradeBindingCollection $collection, \Bitrix\Sale\TradingPlatform\Platform $platform = null)
    {
    }
    /**
     * @return string
     */
    public static function generateXmlId()
    {
    }
    /**
     * @param array $fields
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    private static function createEntityObject(array $fields = array())
    {
    }
    /**
     * @param $id
     * @return array|false
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function loadForOrder($id)
    {
    }
    /**
     * @return Result
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @return TradingPlatform\Platform|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getTradePlatform()
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return Main\Entity\UpdateResult
     * @throws \Exception
     */
    protected function updateInternal($primary, array $data)
    {
    }
    /**
     * @param array $data
     * @return Main\Entity\AddResult
     * @throws \Exception
     */
    protected function addInternal(array $data)
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