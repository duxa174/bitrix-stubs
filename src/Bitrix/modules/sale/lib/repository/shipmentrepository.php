<?php

namespace Bitrix\Sale\Repository;

/**
 * Class ShipmentRepository
 * @package Bitrix\Sale\Repository
 * @internal
 */
final class ShipmentRepository
{
    /** @var ShipmentRepository */
    private static $instance;
    /**
     * ShipmentRepository constructor.
     */
    private function __construct()
    {
    }
    /**
     * @return ShipmentRepository
     */
    public static function getInstance() : \Bitrix\Sale\Repository\ShipmentRepository
    {
    }
    /**
     * @param int $id
     * @return \Bitrix\Sale\Shipment|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getById(int $id) : ?\Bitrix\Sale\Shipment
    {
    }
}