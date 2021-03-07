<?php

namespace Bitrix\Sale;

/**
 * Class PropertyValue
 * @package Bitrix\Sale
 */
class PropertyValue extends \Bitrix\Sale\PropertyValueBase
{
    /**
     * @return array
     */
    protected static function getFieldsMap()
    {
    }
    /**
     * @param OrderBase $order
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    protected static function extractPaySystemIdList(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param OrderBase $order
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    protected static function extractDeliveryIdList(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    protected function update()
    {
    }
    /**
     * @return array
     */
    private function getLogFieldsForUpdate()
    {
    }
    /**
     * @return array
     */
    private function getLogFieldsForAdd()
    {
    }
    /**
     * @param $type
     * @param $fields
     * @throws Main\ArgumentException
     * @throws Main\ObjectNotFoundException
     */
    private function addToLog($type, $fields)
    {
    }
    /**
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    protected function add()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param array $data
     * @throws Main\NotImplementedException
     * @return Main\Entity\AddResult
     */
    protected function addInternal(array $data)
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @throws Main\NotImplementedException
     * @return Main\Entity\UpdateResult
     */
    protected function updateInternal($primary, array $data)
    {
    }
    /**
     * @param array $parameters
     * @return Main\DB\Result|Main\ORM\Query\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters = array())
    {
    }
}