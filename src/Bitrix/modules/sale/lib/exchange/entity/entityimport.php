<?php

namespace Bitrix\Sale\Exchange\Entity;

/**
 * Class EntityImport
 * @package Bitrix\Sale\Exchange\Entity
 * @internal
 */
abstract class EntityImport extends \Bitrix\Sale\Exchange\ImportBase
{
    public $collisions = array();
    protected $parentEntity = null;
    /** @var Sale\Internals\Entity $entity*/
    protected $entity = null;
    protected $external = null;
    protected $marked = false;
    public function __construct($parentEntityContext = null)
    {
    }
    /**
     * @return int
     */
    public function getOwnerTypeId()
    {
    }
    /**
     * @internal
     * @param Sale\Order $parentEntity
     */
    public function setParentEntity(\Bitrix\Sale\Order $parentEntity)
    {
    }
    /**
     * @return null|Sale\Order
     */
    public function getParentEntity()
    {
    }
    /**
     * @return bool
     */
    public function isLoadedParentEntity()
    {
    }
    /**
     * @param array $fields
     * @return Sale\Order
     */
    protected function loadParentEntity(array $fields)
    {
    }
    /**
     * @param Sale\Internals\Entity $entity
     * @throws Main\NotImplementedException
     */
    public abstract function setEntity(\Bitrix\Sale\Internals\Entity $entity);
    /**
     * @return Sale\Internals\Entity $entity|null
     */
    public function getEntity()
    {
    }
    /**
     * @return string
     */
    protected function isExternal()
    {
    }
    /**
     * @param bool|true $external
     */
    public function setExternal($external = true)
    {
    }
    /**
     * @param $tipeId
     * @param Sale\Internals\Entity $entity
     * @param null $message
     * @internal
     */
    public function setCollisions($tipeId, \Bitrix\Sale\Internals\Entity $entity, $message = null)
    {
    }
    /**
     * @return Exchange\ICollision[]
     */
    public function getCollisions()
    {
    }
    /**
     * @return int
     */
    public function hasCollisions()
    {
    }
    /**
     * @param $collisions
     */
    public function markedEntityCollisions($collisions)
    {
    }
    /**
     * @param $order
     * @param $entity
     * @param $result
     */
    protected function addMarker($order, $entity, $result)
    {
    }
    /**
     * @return bool
     */
    public function isMarked()
    {
    }
    /**
     * @return null|string
     */
    public function getId()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function isImportable()
    {
    }
    /**
     * @param array $params
     * @return Sale\Internals\Entity|Sale\Result
     * @internal param $fields
     */
    public function import(array $params)
    {
    }
    /**
     * @return Main\Entity\AddResult|Main\Entity\UpdateResult|Sale\Result|mixed
     */
    public abstract function save();
    /**
     * @param Sale\Internals\Entity $entity
     * @param array $fields
     * @throws Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    function marked(\Bitrix\Sale\Internals\Entity $entity, array $fields)
    {
    }
    /**
     * @return null|string
     */
    public function getEntityId()
    {
    }
    /**
     * @param $id
     * @return bool
     */
    protected function checkEntity($id)
    {
    }
    /**
     * @return string
     */
    protected abstract function getExternalFieldName();
    /**
     * @param Sale\Internals\Entity $entity
     * @return int
     */
    public static function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @return string
     */
    public static function getFieldExternalId()
    {
    }
}