<?php

namespace Bitrix\Main\ORM\Fields\Relations;

/**
 * Performs many to many relation through mediator entity
 * @package    bitrix
 * @subpackage main
 */
class ManyToMany extends \Bitrix\Main\ORM\Fields\Relations\Relation
{
    /** @var string */
    protected $mediatorEntityName;
    /** @var Entity */
    protected $mediatorEntity;
    /** @var string Used when mediator is a virtual entity */
    protected $mediatorTableName;
    /** @var string[] Stores owner entity primary => mediator primary */
    protected $localPrimaryNames;
    /** @var string Name of reference from mediator to owner entity */
    protected $localReferenceName;
    /** @var string[] Stores target entity primary => mediator primary */
    protected $remotePrimaryNames;
    /** @var string Name of reference from mediator to target entity */
    protected $remoteReferenceName;
    /** @var string */
    protected $joinType = \Bitrix\Main\ORM\Query\Join::TYPE_LEFT;
    /** @var int */
    protected $cascadeSavePolicy = \Bitrix\Main\ORM\Fields\Relations\CascadePolicy::NO_ACTION;
    protected $cascadeDeletePolicy = \Bitrix\Main\ORM\Fields\Relations\CascadePolicy::NO_ACTION;
    // follow_orphans | no_action
    /**
     * @param string        $name
     * @param string|Entity $referenceEntity
     *
     * @throws SystemException
     */
    public function __construct($name, $referenceEntity)
    {
    }
    public function getTypeMask()
    {
    }
    /**
     * Explicit mediator entity. By default will be generated automatically.
     *
     * @param string|Entity $entity
     *
     * @return $this
     */
    public function configureMediatorEntity($entity)
    {
    }
    /**
     * In case of auto-generated mediator, sets the custom table name.
     *
     * @param $name
     *
     * @return $this
     */
    public function configureMediatorTableName($name)
    {
    }
    /**
     * Short alias for configureMediatorTableName()
     *
     * @param $name
     *
     * @return $this
     */
    public function configureTableName($name)
    {
    }
    /**
     * In case of auto-generated mediator, sets the custom ID field name that stores owner entity ID.
     *
     * @param $fieldName
     * @param $mediatorFieldName
     *
     * @return $this
     */
    public function configureLocalPrimary($fieldName, $mediatorFieldName)
    {
    }
    /**
     * In case of auto-generated mediator, sets the custom reference field name that points to owner entity.
     *
     * @param $name
     *
     * @return $this
     */
    public function configureLocalReference($name)
    {
    }
    /**
     * In case of auto-generated mediator, sets the custom ID field name that stores target entity ID.
     *
     * @param $fieldName
     * @param $mediatorFieldName
     *
     * @return $this
     */
    public function configureRemotePrimary($fieldName, $mediatorFieldName)
    {
    }
    /**
     * In case of auto-generated mediator, sets the custom reference field name that points to target entity.
     *
     * @param $name
     *
     * @return $this
     */
    public function configureRemoteReference($name)
    {
    }
    /**
     * @return Entity
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getRemoteEntity()
    {
    }
    /**
     * @return Entity
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getMediatorEntity()
    {
    }
    /**
     * @return string
     */
    public function getLocalReferenceName()
    {
    }
    /**
     * Returns reference from mediator to owner entity
     *
     * @return \Bitrix\Main\ORM\Fields\Relations\Reference|\Bitrix\Main\ORM\Fields\Field
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getLocalReference()
    {
    }
    /**
     * @return string
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getRemoteReferenceName()
    {
    }
    /**
     * Returns reference from mediator to target entity
     *
     * @return \Bitrix\Main\ORM\Fields\Relations\Reference|\Bitrix\Main\ORM\Fields\Field
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getRemoteReference()
    {
    }
}