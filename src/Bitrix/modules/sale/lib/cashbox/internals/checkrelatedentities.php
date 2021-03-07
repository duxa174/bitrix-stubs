<?php

namespace Bitrix\Sale\Cashbox\Internals;

/**
 * Class Check2EntitiesTable
 * @package Bitrix\Sale\Cashbox\Internals
 */
class CheckRelatedEntitiesTable extends \Bitrix\Main\Entity\DataManager
{
    const ENTITY_TYPE_PAYMENT = 'P';
    const ENTITY_TYPE_SHIPMENT = 'S';
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
}