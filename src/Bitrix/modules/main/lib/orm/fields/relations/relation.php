<?php

namespace Bitrix\Main\ORM\Fields\Relations;

/**
 * Performs relation mapping: back-reference and many-to-many relations.
 *
 * @package    bitrix
 * @subpackage main
 */
abstract class Relation extends \Bitrix\Main\ORM\Fields\Field implements \Bitrix\Main\ORM\Fields\ITypeHintable
{
    /** @var string Name of target entity */
    protected $refEntityName;
    /** @var Entity Target entity */
    protected $refEntity;
    /** @var string */
    protected $joinType = null;
    /** @var int */
    protected $cascadeSavePolicy;
    /** @var int */
    protected $cascadeDeletePolicy;
    /**
     * @param int $cascadeSavePolicy
     *
     * @return Relation
     */
    public function configureCascadeSavePolicy($cascadeSavePolicy)
    {
    }
    /**
     * @param int $cascadeDeletePolicy
     *
     * @return Relation
     */
    public function configureCascadeDeletePolicy($cascadeDeletePolicy)
    {
    }
    /**
     * @return Entity
     * @throws \Bitrix\Main\ArgumentException
     * @throws SystemException
     */
    public function getRefEntity()
    {
    }
    /**
     * @return string
     */
    public function getRefEntityName()
    {
    }
    /**
     * @param $type
     *
     * @return $this
     * @throws ArgumentException
     */
    public function configureJoinType($type)
    {
    }
    /**
     * @return string
     */
    public function getJoinType()
    {
    }
    /**
     * @return int
     */
    public function getCascadeSavePolicy()
    {
    }
    /**
     * @return int
     */
    public function getCascadeDeletePolicy()
    {
    }
    /**
     * @return EntityObject|string
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getGetterTypeHint()
    {
    }
    /**
     * @return EntityObject|string
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getSetterTypeHint()
    {
    }
}