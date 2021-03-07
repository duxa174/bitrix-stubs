<?php

namespace Bitrix\Main\ORM\Fields\Relations;

/**
 * Performs back-reference relation
 *
 * @package    bitrix
 * @subpackage main
 */
class OneToMany extends \Bitrix\Main\ORM\Fields\Relations\Relation
{
    /** @var string */
    protected $referenceName;
    /** @var int */
    protected $cascadeSavePolicy = \Bitrix\Main\ORM\Fields\Relations\CascadePolicy::FOLLOW;
    protected $cascadeDeletePolicy = \Bitrix\Main\ORM\Fields\Relations\CascadePolicy::SET_NULL;
    // follow | no_action | set_null
    public function __construct($name, $referenceEntity, $referenceName)
    {
    }
    public function getTypeMask()
    {
    }
    public function getRefField()
    {
    }
    /**
     * @return string
     */
    public function getReferenceName()
    {
    }
}