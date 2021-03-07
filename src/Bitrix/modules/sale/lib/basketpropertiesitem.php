<?php

namespace Bitrix\Sale;

/**
 * Class BasketPropertyItem
 * @package Bitrix\Sale
 */
class BasketPropertyItem extends \Bitrix\Sale\BasketPropertyItemBase
{
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param array $data
     * @return Entity\AddResult
     */
    protected function addInternal(array $data)
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return Entity\UpdateResult
     */
    protected function updateInternal($primary, array $data)
    {
    }
    /**
     * @return array
     */
    protected static function getFieldsMap()
    {
    }
    /**
     * @param array $parameters
     * @return \Bitrix\Main\ORM\Query\Result|Internals\EO_BasketProperty_Result|mixed
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getList(array $parameters = [])
    {
    }
}