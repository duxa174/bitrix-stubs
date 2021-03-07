<?php

namespace Bitrix\Main\ORM\Objectify;

/**
 * Entity object
 *
 * @property-read \Bitrix\Main\ORM\Entity $entity
 * @property-read array $primary
 * @property-read int $state @see State
 * @property-read Dictionary $customData
 * @property Context $authContext For UF values validation
 *
 * @package    bitrix
 * @subpackage main
 */
abstract class EntityObject implements \ArrayAccess
{
    /**
     * Entity Table class. Read-only property.
     * @var DataManager
     */
    public static $dataClass;
    /** @var Entity */
    protected $_entity;
    /**
     * @var int
     * @see State
     */
    protected $_state = \Bitrix\Main\ORM\Objectify\State::RAW;
    /**
     * Actual values fetched from DB and collections of relations
     * @var mixed[]|static[]|Collection[]
     */
    protected $_actualValues = [];
    /**
     * Current values - new or rewritten by setter (except changed collections - they are still in actual values)
     * @var mixed[]|static[]
     */
    protected $_currentValues = [];
    /**
     * Container for non-entity data
     * @var mixed[]
     */
    protected $_runtimeValues = [];
    /**
     * @var Dictionary
     */
    protected $_customData = null;
    /** @var callable[] */
    protected $_onPrimarySetListeners = [];
    /** @var Context */
    protected $_authContext;
    /**
     * Cache for lastName => LAST_NAME transforming
     * @var string[]
     */
    protected static $_camelToSnakeCache = [];
    /**
     * Cache for LAST_NAME => lastName transforming
     * @var string[]
     */
    protected static $_snakeToCamelCache = [];
    /**
     * EntityObject constructor
     *
     * @param bool|array $setDefaultValues
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function __construct($setDefaultValues = true)
    {
    }
    /**
     * Returns all objects values as an array
     *
     * @param int  $valuesType
     * @param int  $fieldsMask
     * @param bool $recursive
     *
     * @return array
     * @throws ArgumentException
     */
    public final function collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, $recursive = false)
    {
    }
    /**
     * ActiveRecord save.
     *
     * @return Result
     * @throws ArgumentException
     * @throws SystemException
     * @throws \Exception
     */
    public final function save()
    {
    }
    /**
     * ActiveRecord delete.
     *
     * @return Result
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function delete()
    {
    }
    /**
     * Constructs existing object from pre-selected data, including references and relations.
     *
     * @param mixed $row Array of [field => value] or single scalar primary value.
     *
     * @return static
     * @throws ArgumentException
     * @throws SystemException
     */
    public static final function wakeUp($row)
    {
    }
    /**
     * Fills all the values and relations of object
     *
     * @param int|string[] $fields Names of fields to fill
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
    {
    }
    /**
     * Fast popular alternative to __call().
     *
     * @return Collection|EntityObject|mixed
     * @throws SystemException
     */
    public function getId()
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function get($fieldName)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function remindActual($fieldName)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function require($fieldName)
    {
    }
    /**
     * @param $fieldName
     * @param $value
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function set($fieldName, $value)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function reset($fieldName)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function unset($fieldName)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function has($fieldName)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function isFilled($fieldName)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function isChanged($fieldName)
    {
    }
    /**
     * @param $fieldName
     * @param $value
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function addTo($fieldName, $value)
    {
    }
    /**
     * @param $fieldName
     * @param $value
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function removeFrom($fieldName, $value)
    {
    }
    /**
     * @param $fieldName
     *
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public final function removeAll($fieldName)
    {
    }
    public final function defineAuthContext(\Bitrix\Main\Authentication\Context $authContext)
    {
    }
    /**
     * Magic read-only properties
     *
     * @param $name
     *
     * @return mixed
     * @throws ArgumentException
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
     * @return mixed
     * @throws ArgumentException
     * @throws SystemException
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * @return Entity
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function sysGetEntity()
    {
    }
    /**
     * Returns [primary => value] array.
     *
     * @return array
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysGetPrimary()
    {
    }
    /**
     * Query Runtime Field values or just any runtime value getter
     * @internal For internal system usage only.
     *
     * @param $name
     *
     * @return mixed
     */
    public function sysGetRuntime($name)
    {
    }
    /**
     * Any runtime value setter
     * @internal For internal system usage only.
     *
     * @param $name
     * @param $value
     *
     * @return $this
     */
    public function sysSetRuntime($name, $value)
    {
    }
    /**
     * Sets actual value.
     * @internal For internal system usage only.
     *
     * @param $fieldName
     * @param $value
     */
    public function sysSetActual($fieldName, $value)
    {
    }
    /**
     * Changes state.
     * @see State
     * @internal For internal system usage only.
     *
     * @param $state
     */
    public function sysChangeState($state)
    {
    }
    /**
     * Returns current state.
     * @see State
     * @internal For internal system usage only.
     *
     * @return int
     */
    public function sysGetState()
    {
    }
    /**
     * Regular getter, called by __call.
     * @internal For internal system usage only.
     *
     * @param string $fieldName
     * @param bool $require Throws an exception in the absence of value
     *
     * @return mixed
     * @throws SystemException
     */
    public function sysGetValue($fieldName, $require = false)
    {
    }
    /**
     * Regular setter, called by __call. Doesn't validate values.
     * @internal For internal system usage only.
     *
     * @param $fieldName
     * @param $value
     *
     * @return $this
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysSetValue($fieldName, $value)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @return bool
     */
    public function sysHasValue($fieldName)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @return bool
     */
    public function sysIsFilled($fieldName)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @return bool
     */
    public function sysIsChanged($fieldName)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @return bool
     */
    public function sysHasPrimary()
    {
    }
    /**
     * @internal For internal system usage only.
     */
    public function sysOnPrimarySet()
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param callable $callback
     */
    public function sysAddOnPrimarySetListener($callback)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @return $this
     */
    public function sysUnset($fieldName)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @return $this
     */
    public function sysReset($fieldName)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @return $this
     */
    public function sysResetRelation($fieldName)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @return array
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysRequirePrimary()
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * Returns non-filled field names according to array of $fields
     *
     * @param array $fields
     *
     * @return array
     */
    public function sysGetIdleFields($fields = [])
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * Returns non-filled field names according to $mask
     *
     * @param int $mask
     *
     * @return array
     */
    public function sysGetIdleFieldsByMask($mask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param Result $result
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysSaveRelations(\Bitrix\Main\ORM\Data\Result $result)
    {
    }
    public function sysPostSave()
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     * @param $remoteObject
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysAddToCollection($fieldName, $remoteObject)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     * @param $remoteObject
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysRemoveFromCollection($fieldName, $remoteObject)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysRemoveAllFromCollection($fieldName)
    {
    }
    /**
     * @param OneToMany|ManyToMany|string $field
     *
     * @return Collection
     * @throws ArgumentException
     * @throws SystemException
     */
    public function sysFillRelationCollection($field)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $methodName
     *
     * @return string
     */
    public static function sysMethodToFieldCase($methodName)
    {
    }
    /**
     * @internal For internal system usage only.
     *
     * @param $fieldName
     *
     * @return string
     */
    public static function sysFieldToMethodCase($fieldName)
    {
    }
    /**
     * ArrayAccess interface implementation.
     *
     * @param mixed $offset
     *
     * @return bool
     * @throws ArgumentException
     * @throws SystemException
     */
    public function offsetExists($offset)
    {
    }
    /**
     * ArrayAccess interface implementation.
     *
     * @param mixed $offset
     *
     * @return mixed|null
     * @throws ArgumentException
     * @throws SystemException
     */
    public function offsetGet($offset)
    {
    }
    /**
     * ArrayAccess interface implementation.
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
     * ArrayAccess interface implementation.
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
    }
}