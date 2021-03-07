<?php

namespace Bitrix\Main\ORM\Fields\Relations;

/**
 * Reference field describes relation 1-to-1 or 1-to-many between two entities
 * @package bitrix
 * @subpackage main
 */
class Reference extends \Bitrix\Main\ORM\Fields\Relations\Relation
{
    /** @var array|Filter */
    protected $reference;
    protected $joinType = \Bitrix\Main\ORM\Query\Join::TYPE_LEFT;
    protected $cascadeSavePolicy = \Bitrix\Main\ORM\Fields\Relations\CascadePolicy::NO_ACTION;
    protected $cascadeDeletePolicy = \Bitrix\Main\ORM\Fields\Relations\CascadePolicy::NO_ACTION;
    // follow | no_action
    const ELEMENTAL_THIS = 1;
    const ELEMENTAL_REF = 2;
    const ELEMENTAL_BOTH = 3;
    /**
     * @param string        $name
     * @param string|Entity $referenceEntity
     * @param array|Filter  $referenceFilter
     * @param array         $parameters deprecated, use configure* and add* methods instead
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function __construct($name, $referenceEntity, $referenceFilter, $parameters = array())
    {
    }
    public function getTypeMask()
    {
    }
    /**
     * @param        $value
     * @param        $primary
     * @param        $row
     * @param Result $result
     *
     * @return Result
     * @throws ArgumentException
     * @throws SystemException
     */
    public function validateValue($value, $primary, $row, \Bitrix\Main\ORM\Data\Result $result)
    {
    }
    public function getDataType()
    {
    }
    public function getReference()
    {
    }
    /**
     * Returns set of strictly linked fields of this and ref entities [localFieldName => remoteFieldName]
     *
     * @return array|bool
     */
    public function getElementals()
    {
    }
    protected static function getElementalFlag($definition)
    {
    }
}