<?php

namespace Bitrix\Sale\Exchange\OneC;

class ImportCollision implements \Bitrix\Sale\Exchange\ICollision
{
    protected $entityTypeId = \Bitrix\Sale\Exchange\EntityType::UNDEFINED;
    protected $typeId = null;
    protected $entity = null;
    protected $message = null;
    /**
     * @param $entityTypeId
     * @param $typeId
     * @param Entity $entity
     * @param null $message
     * @throws ArgumentOutOfRangeException
     * @throws NotImplementedException
     */
    public function addItem($entityTypeId, $typeId, \Bitrix\Sale\Internals\Entity $entity, $message = null)
    {
    }
    /**
     * @param $entityTypeId
     * @return self
     * @throws ArgumentOutOfRangeException
     */
    public static function getCurrent($entityTypeId)
    {
    }
    /**
     * @return mixed
     */
    public function getEntity()
    {
    }
    /**
     * @return int
     */
    public function getTypeId()
    {
    }
    /**
     * @return string
     */
    public function getMessage()
    {
    }
    /**
     * @return string
     */
    public function getTypeName()
    {
    }
    /**
     * @param Entity $entity
     */
    public function setEntity(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param EntityImport $item
     * @return Result
     * @throws ArgumentException
     */
    public function setCollision(\Bitrix\Sale\Exchange\Entity\EntityImport $item)
    {
    }
    /**
     * @param EntityImport $item
     * @return array
     */
    public function getCollision(\Bitrix\Sale\Exchange\Entity\EntityImport $item)
    {
    }
    /**
     * Resolve import collisions
     * @param EntityImport $item
     * @return Result
     */
    public function resolve(\Bitrix\Sale\Exchange\ImportBase $item)
    {
    }
}
class CollisionOrder extends \Bitrix\Sale\Exchange\OneC\ImportCollision
{
    /**
     * @param OrderImport $item
     * @return Result
     * @throws ArgumentException
     */
    public function resolve(\Bitrix\Sale\Exchange\ImportBase $item)
    {
    }
    /**
     * @param EntityImport $item
     * @return array
     */
    public function getCollision(\Bitrix\Sale\Exchange\Entity\EntityImport $item)
    {
    }
}
class CollisionPayment extends \Bitrix\Sale\Exchange\OneC\ImportCollision
{
    /**
     * Resolve import collisions
     * @param PaymentImport $item
     * @return Result
     */
    public function resolve(\Bitrix\Sale\Exchange\ImportBase $item)
    {
    }
    /**
     * @param EntityImport $item
     * @return array
     */
    public function getCollision(\Bitrix\Sale\Exchange\Entity\EntityImport $item)
    {
    }
}
class CollisionShipment extends \Bitrix\Sale\Exchange\OneC\ImportCollision
{
    /**
     * Resolve import collisions
     * @param ShipmentImport $item
     * @return Result
     */
    public function resolve(\Bitrix\Sale\Exchange\ImportBase $item)
    {
    }
    /**
     * @param EntityImport $item
     * @return array
     */
    public function getCollision(\Bitrix\Sale\Exchange\Entity\EntityImport $item)
    {
    }
}
class CollisionProfile extends \Bitrix\Sale\Exchange\OneC\ImportCollision
{
    /**
     * Resolve import collisions
     * @param ProfileImport $item
     * @return Result
     * @deprecated
     */
    public function resolve(\Bitrix\Sale\Exchange\ImportBase $item)
    {
    }
}