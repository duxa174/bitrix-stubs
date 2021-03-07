<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Base entity field class
 * @package bitrix
 * @subpackage main
 */
abstract class Field
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $dataType;
    /** @var array */
    protected $initialParameters;
    /** @var string */
    protected $title;
    /** @var null|callback */
    protected $validation = null;
    /** @var null|callback[]|Validators\Validator[] */
    protected $validators = null;
    /** @var array|callback[]|Validators\Validator[] */
    protected $additionalValidators = array();
    /** @var null|callback */
    protected $fetchDataModification = null;
    /** @var null|callback[] */
    protected $fetchDataModifiers;
    /** @var null|callback[] */
    protected $additionalFetchDataModifiers = array();
    /** @var null|callback */
    protected $saveDataModification = null;
    /** @var null|callback[] */
    protected $saveDataModifiers;
    /** @var null|callback[] */
    protected $additionalSaveDataModifiers = array();
    /**
     * @deprecated
     * @see ArrayField
     * @var bool
     */
    protected $isSerialized = false;
    /** @var Field */
    protected $parentField;
    /** @var Entity */
    protected $entity;
    /**
     * @deprecated
     * @var array
     */
    protected static $oldDataTypes = array('float' => 'Bitrix\\Main\\ORM\\Fields\\FloatField', 'string' => 'Bitrix\\Main\\ORM\\Fields\\StringField', 'text' => 'Bitrix\\Main\\ORM\\Fields\\TextField', 'datetime' => 'Bitrix\\Main\\ORM\\Fields\\DatetimeField', 'date' => 'Bitrix\\Main\\ORM\\Fields\\DateField', 'integer' => 'Bitrix\\Main\\ORM\\Fields\\IntegerField', 'enum' => 'Bitrix\\Main\\ORM\\Fields\\EnumField', 'boolean' => 'Bitrix\\Main\\ORM\\Fields\\BooleanField');
    /**
     * @param string $name
     * @param array  $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     */
    public function __construct($name, $parameters = array())
    {
    }
    /**
     * @param Entity $entity
     *
     * @throws SystemException
     */
    public function setEntity(\Bitrix\Main\ORM\Entity $entity)
    {
    }
    public function resetEntity()
    {
    }
    public abstract function getTypeMask();
    /**
     * @param        $value
     * @param        $primary
     * @param        $row
     * @param Result $result
     *
     * @return Result
     * @throws SystemException
     */
    public function validateValue($value, $primary, $row, \Bitrix\Main\ORM\Data\Result $result)
    {
    }
    /**
     * @param $value
     * @param $data
     *
     * @return mixed
     * @throws SystemException
     */
    public function modifyValueBeforeSave($value, $data)
    {
    }
    /**
     * @return callback[]|Validators\Validator[]
     * @throws SystemException
     */
    public function getValidators()
    {
    }
    /**
     * @param Validators\Validator|callable $validator
     *
     * @return $this
     * @throws SystemException
     */
    public function addValidator($validator)
    {
    }
    /**
     * @param Validators\Validator|callable $validator
     *
     * @throws SystemException
     */
    protected function appendValidator($validator)
    {
    }
    /**
     * @return array|callback[]|null
     * @throws SystemException
     */
    public function getFetchDataModifiers()
    {
    }
    /**
     * @param \callable $modifier
     *
     * @return $this
     * @throws SystemException
     */
    public function addFetchDataModifier($modifier)
    {
    }
    /**
     * @param \callable $modifier
     *
     * @throws SystemException
     */
    protected function appendFetchDataModifier($modifier)
    {
    }
    /**
     * @return array|callback[]|null
     * @throws SystemException
     */
    public function getSaveDataModifiers()
    {
    }
    /**
     * @param \callable $modifier
     *
     * @return $this
     * @throws SystemException
     */
    public function addSaveDataModifier($modifier)
    {
    }
    /**
     * @param \callable $modifier
     *
     * @throws SystemException
     */
    protected function appendSaveDataModifier($modifier)
    {
    }
    /**
     * @return boolean
     */
    public function isSerialized()
    {
    }
    /**
     * @throws SystemException
     */
    public function setSerialized()
    {
    }
    /**
     * @deprecated
     * @return $this
     * @throws SystemException
     */
    public function configureSerialized()
    {
    }
    public function getName()
    {
    }
    public function setName($name)
    {
    }
    /**
     * Lang phrase
     *
     * @param $title
     *
     * @return $this
     */
    public function configureTitle($title)
    {
    }
    public function getTitle()
    {
    }
    public function setParameter($name, $value)
    {
    }
    public function getParameter($name)
    {
    }
    public function hasParameter($name)
    {
    }
    /**
     * @param Field $parentField
     */
    public function setParentField(\Bitrix\Main\ORM\Fields\Field $parentField)
    {
    }
    /**
     * @return Field
     */
    public function getParentField()
    {
    }
    /**
     * @deprecated
     * @return null|string
     */
    public function getDataType()
    {
    }
    /**
     * @deprecated
     * @param $class
     *
     * @return bool
     */
    public static function getOldDataTypeByClass($class)
    {
    }
    /**
     * @deprecated
     * @param Field $field
     *
     * @return bool
     */
    public static function getOldDataTypeByField(\Bitrix\Main\ORM\Fields\Field $field)
    {
    }
    /**
     * @deprecated
     * @param $dateType
     *
     * @return bool
     */
    public static function getClassByOldDataType($dateType)
    {
    }
    public function getEntity()
    {
    }
    public function getLangCode()
    {
    }
    /**
     * @return \Bitrix\Main\DB\Connection
     * @throws SystemException
     */
    public function getConnection()
    {
    }
    public function serialize($value)
    {
    }
    public function unserialize($value)
    {
    }
    /**
     * Called after being initialized by Entity
     * @return null
     */
    public function postInitialize()
    {
    }
}