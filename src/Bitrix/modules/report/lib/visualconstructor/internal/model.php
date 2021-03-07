<?php

namespace Bitrix\Report\VisualConstructor\Internal;

/**
 * This class developed now only for models influencing with report visual constructor.
 * @package Bitrix\Report\VisualConstructor\Internal
 */
abstract class Model implements \Bitrix\Report\VisualConstructor\Internal\Error\IErrorable
{
    const ATTRIBUTE_SLICE_DELIMITER = '__';
    protected $id;
    protected $createdAt;
    protected $updatedAt;
    protected $errors;
    private $deletedEntities = array();
    private $currentDbState = array();
    //private $lazyAttributes;
    /**
     * Model constructor.
     */
    public function __construct()
    {
    }
    /**
     * Gets the fully qualified name of table class which belongs to current model.
     * @throws \Bitrix\Main\NotImplementedException
     * @return string
     */
    public static function getTableClassName()
    {
    }
    /**
     * Returns the list of pair for mapping data and object properties.
     * Key is field in DataManager, value is object property.
     * @return array
     */
    public static function getMapAttributes()
    {
    }
    /**
     * Returns map of lazy loaded attributes of current model.
     * supported relation types ONE_TO_MANY, MANY_TO_ONE, MANY_TO_MANY
     * example:
     *      array(
     *          'lazyLoadAttributeName_1' => array(
     *              'type' => Common::ONE_TO_MANY,
     *              'targetEntity' => TargetEntityClass::getClassName(), //inheritor of this class
     *              'mappedBy' => 'targetEntityField',
     *          ),
     *          'lazyLoadAttributeName_2' => array(
     *              'type' => Common::MANY_TO_ONE,
     *              'targetEntity' => TargetEntityClass::getClassName(), //inheritor of this class
     *              'inveredBy' => '',
     *              'join' => array(
     *                  'field' => array('thisFieldName', 'relationEntityFieldMame')
     *              )
     *          ),
     *          'lazyLoadAttributeName_1' => array(
     *              'type' => Common::MANY_TO_MANY,
     *              'targetEntity' => TargetEntityClass::getClassName(), //inheritor of this class
     *              'join' => array(
     *                  'tableClassName' => TableClassName::getClassName //Supporting table ORM class name for connecting 2 entities
     *                  'column' => array(SUPPORTING_CONNECT_COLUMN => array('thisPrimaryFieldName', 'SUPPORTING_TABLE_APPROPRIATE_FIELD_NAME')),
     *                  'inverseColumn' => array(SUPPORTING_CONNECT_COLUMN => array('relationEntityPrimaryFieldName', 'SUPPORTING_TABLE_APPROPRIATE_FIELD_NAME')),
     *              ),
     *           )
     *      )
     * @return array
     */
    public static function getMapReferenceAttributes()
    {
    }
    /**
     * @return Model
     */
    public function save()
    {
    }
    /**
     * @param static[] $references
     * @param $assoc
     * @param $ownerEntityId
     */
    private function saveOneToManyReferences($references, $assoc, $ownerEntityId)
    {
    }
    /**
     * @param static[] $references
     * @param $assoc
     * @param $ownerEntityId
     */
    private function saveManyToManyReferences($references, $assoc, $ownerEntityId)
    {
    }
    /**
     * @param static $reference
     * @param $assoc
     */
    private function saveManyToOneReference($reference, $assoc)
    {
    }
    /**
     * @return array
     */
    private function getConvertedMapAttributesToOrmFields()
    {
    }
    /**
     * @param array $data
     * @return \Bitrix\Main\Entity\AddResult
     */
    private function add(array $data)
    {
    }
    /**
     * @param $newEntityAttributes
     * @return array
     */
    private function getChangedOrmAttributes($newEntityAttributes)
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return \Bitrix\Main\Entity\UpdateResult
     */
    private function update($primary, array $data)
    {
    }
    /**
     * @return string
     */
    public static function getClassName()
    {
    }
    /**
     * @param array|ConditionTree $filter Filter parameters.
     * @param array $with Relation keys to load.
     * @param array $order Order parameters.
     * @return static
     */
    public static function load($filter, array $with = array(), $order = array())
    {
    }
    /**
     * Get model list like getList
     * @param array $parameters
     * @return static[]
     */
    protected static function getModelList(array $parameters)
    {
    }
    /**
     * @param array $parameters
     * @return \Bitrix\Main\DB\Result
     * @throws \Bitrix\Main\NotImplementedException
     */
    protected static function getList(array $parameters)
    {
    }
    /**
     * Builds model from array.
     * @param array $attributes Model attributes.
     * @param $parentEntity
     * @return static
     * @internal
     */
    protected static function buildFromArray(array $attributes, $parentEntity = null)
    {
    }
    /**
     * Method which transfer from Array to object of special type.
     *
     * @param array $attributes
     * @param $parentEntity
     * @return Model
     */
    private function setAttributes(array $attributes, $parentEntity)
    {
    }
    /**
     * @param array $parameters
     * @throws \Bitrix\Main\SystemException
     * @return array
     */
    protected static function prepareGetListParameters(array $parameters)
    {
    }
    /**
     * @param array $with
     * @return array
     * @throws ArgumentException
     */
    protected static function buildOrmSelectForReference(array $with)
    {
    }
    /**
     * @return bool|null
     */
    public function delete()
    {
    }
    /**
     * @param static[] $referenceEntities
     */
    private function deleteOneToManyReferences($referenceEntities)
    {
    }
    /**
     * @param static[] $referenceEntities
     * @param $assoc
     * @param $ownerId
     */
    private function deleteManyToManyReferences($referenceEntities, $assoc, $ownerId)
    {
    }
    /**
     * Clean from parent reference list deleted entity
     * @param $referenceEntity
     * @param $assoc
     * @param $ownerId
     */
    private function deleteManyToOneReference(&$referenceEntity, $assoc, $ownerId)
    {
    }
    /**
     * @return mixed
     */
    public function getId()
    {
    }
    /**
     * @param mixed $id Id property value.
     * @return void
     */
    public function setId($id)
    {
    }
    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
    }
    /**
     * @param DateTime $createdAt Record create time.
     * @return void
     */
    public function setCreatedAt(\Bitrix\Main\Type\DateTime $createdAt)
    {
    }
    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
    }
    /**
     * @param DateTime $updatedAt Record update time.
     * @return void
     */
    public function setUpdatedAt(\Bitrix\Main\Type\DateTime $updatedAt)
    {
    }
    /**
     * @param mixed $id Load entity by id.
     * @return static
     */
    public static function loadById($id)
    {
    }
    /**
     * @param string $attributeName Attribute name to load to property from db.
     * @return void
     */
    public function loadAttribute($attributeName)
    {
    }
    /**
     * Implement delete and add actions for nested relations.
     *
     * @param string $name Getter name.
     * @param array $arguments Arguments passed to getter.
     * @return void
     */
    public function __call($name, array $arguments)
    {
    }
    /**
     * @param static[][] $deletedReferenceEntities
     */
    private function deleteReference($deletedReferenceEntities)
    {
    }
    /**
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * @return array
     */
    public function getCurrentDbState()
    {
    }
    public static function factoryWithHorizontalCells($cellCount = 1)
    {
    }
}