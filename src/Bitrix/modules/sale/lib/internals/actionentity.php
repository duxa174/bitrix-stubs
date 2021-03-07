<?php

namespace Bitrix\Sale\Internals;

class ActionEntity extends \Bitrix\Sale\Internals\PoolBase
{
    protected static $pool = array();
    const ACTION_ENTITY_SHIPMENT_COLLECTION_RESERVED_QUANTITY = 'shipment_collection_reserved_quantity';
    const ACTION_ENTITY_SHIPMENT_RESERVED_QUANTITY = 'shipment_reserved_quantity';
    /**
     * @param $code
     * @param array $typeList
     *
     * @return Result
     */
    public static function runActions($code, array $typeList = array())
    {
    }
}