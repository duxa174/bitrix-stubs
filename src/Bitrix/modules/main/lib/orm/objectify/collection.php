<?php

namespace Bitrix\Main\ORM\Objectify;

/**
 * Collection of entity objects. Used to hold 1:N and N:M object collections.
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 *
 * @package    bitrix
 * @subpackage main
 */
abstract class Collection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * Entity Table class. Read-only property.
     * @var DataManager
     */
    public static $dataClass;
    /** @var Entity */
    protected $_entity;
    /** @var EntityObject */
    protected $_objectClass;
    /** @var  EntityObject[] */
    protected $_objects = [];
    /** @var bool */
    protected $_isFilled = false;
    /** @var bool */
    protected $_isSinglePrimary;
    /** @var array [SerializedPrimary => OBJECT_CHANGE_CODE] */
    protected $_objectsChanges;
    /** @var  EntityObject[] */
    protected $_objectsRemoved;
    /** @var EntityObject[] Used for Iterator interface, allows to delete elements during foreach loop */
    protected $_iterableObjects;
    /** @var int Code for $objectsChanged */
    const OBJECT_ADDED = 1;
    /** @var int Code for $objectsChanged */
    const OBJECT_REMOVED = 2;
    /**
     * Collection constructor.
     *
     * @param Entity $entity
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function __construct(\Bitrix\Main\ORM\Entity $entity = null)
    {
    }
    /**
     * @param EntityObject $object
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function add(\Bitrix\Main\ORM\Objectify\EntityObject $object)
    {
    }
    /**
     * @param EntityObject $object
     *
     * @return bool
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function has(\Bitrix\Main\ORM\Objectify\EntityObject $object)
    {
    }
    /**
     * @param $primary
     *
     * @return bool
     * @throws ArgumentException
     */
    public final function hasByPrimary($primary)
    {
    }
    /**
     * @param $primary
     *
     * @return EntityObject
     * @throws ArgumentException
     */
    public final function getByPrimary($primary)
    {
    }
    /**
     * @return EntityObject[]
     */
    public final function getAll()
    {
    }
    /**
     * @param EntityObject $object
     *
     * @return void
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function remove(\Bitrix\Main\ORM\Objectify\EntityObject $object)
    {
    }
    /**
     * @param $primary
     *
     * @throws ArgumentException
     */
    public final function removeByPrimary($primary)
    {
    }
    public function sysRemove($srPrimary)
    {
    }
    /**
     * Fills all the values and relations of object
     *
     * @param int|string[] $fields Names of fields to fill
     *
     * @return array|Collection
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
    {
    }
    public final function save($ignoreEvents = false)
    {
    }
    /**
     * Constructs set of existing objects from pre-selected data, including references and relations.
     *
     * @param $rows
     *
     * @return array|static
     * @throws ArgumentException
     * @throws SystemException
     */
    public static final function wakeUp($rows)
    {
    }
    /**
     * Magic read-only properties
     *
     * @param $name
     *
     * @return array|Entity
     * @throws SystemException
     */
    public function __get($name)
    {
    }
    /**
     * Magic read-only properties
     *
     * @param $name
     * @param $value
     *
     * @throws SystemException
     */
    public function __set($name, $value)
    {
    }
    /**
     * Magic to handle getters, setters etc.
     *
     * @param $name
     * @param $arguments
     *
     * @return array
     * @throws ArgumentException
     * @throws SystemException
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param \Bitrix\Main\ORM\Objectify\EntityObject $object
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysAddActual(\Bitrix\Main\ORM\Objectify\EntityObject $object)
    {
    }
    /**
     * Callback for object event when it gets primary
     *
     * @param $object
     */
    public function sysOnObjectPrimarySet($object)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @return bool
     */
    public function sysIsFilled()
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @return bool
     */
    public function sysIsChanged()
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @return array
     * @throws SystemException
     */
    public function sysGetChanges()
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param bool $rollback
     */
    public function sysResetChanges($rollback = false)
    {
    }
    /**
     * @param $fieldName
     *
     * @return array
     * @throws SystemException
     */
    protected function sysGetList($fieldName)
    {
    }
    /**
     * @param $fieldName
     *
     * @return Collection
     * @throws ArgumentException
     * @throws SystemException
     */
    protected function sysGetCollection($fieldName)
    {
    }
    /**
     * @internal For internal system usage only.
     */
    public function sysReviseDeletedObjects()
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param bool $value
     */
    public function sysSetFilled($value = true)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $primary
     *
     * @return array
     * @throws ArgumentException
     */
    protected function sysNormalizePrimary($primary)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param \Bitrix\Main\ORM\Objectify\EntityObject $object
     *
     * @return false|mixed|string
     * @throws ArgumentException
     * @throws SystemException
     */
    protected function sysGetPrimaryKey(\Bitrix\Main\ORM\Objectify\EntityObject $object)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $primary
     *
     * @return false|mixed|string
     * @throws ArgumentException
     */
    protected function sysSerializePrimaryKey($primary)
    {
    }
    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset
     *
     * @return bool|void
     * @throws NotImplementedException
     */
    public function offsetExists($offset)
    {
    }
    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset
     *
     * @throws NotImplementedException
     */
    public function offsetUnset($offset)
    {
    }
    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset
     *
     * @return mixed|void
     * @throws NotImplementedException
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Iterator implementation
     */
    public function rewind()
    {
    }
    /**
     * Iterator implementation
     *
     * @return EntityObject|mixed
     */
    public function current()
    {
    }
    /**
     * Iterator implementation
     *
     * @return int|mixed|null|string
     */
    public function key()
    {
    }
    /**
     * Iterator implementation
     */
    public function next()
    {
    }
    /**
     * Iterator implementation
     *
     * @return bool
     */
    public function valid()
    {
    }
    /**
     * Countable implementation
     *
     * @return int
     */
    public function count()
    {
    }
}