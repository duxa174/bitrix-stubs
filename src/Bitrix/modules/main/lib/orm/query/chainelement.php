<?php

namespace Bitrix\Main\ORM\Query;

class ChainElement
{
    /** @var array|Entity|Field|\Bitrix\Main\ORM\Fields\Relations\Reference|ScalarField|Relation */
    protected $value;
    protected $parameters;
    protected $type;
    protected $definition_fragment;
    protected $alias_fragment;
    /**
     * Value format:
     * 1. Field - normal scalar field
     * 2. Reference - pointer to another entity
     * 3. array(Base, Reference) - pointer from another entity to this
     * 4. Base - all fields of entity
     *
     * @param Field|array|Entity $element
     * @param array              $parameters
     *
     * @throws SystemException
     */
    public function __construct($element, $parameters = array())
    {
    }
    /**
     * @return array|Entity|ExpressionField|\Bitrix\Main\ORM\Fields\Relations\Reference|ScalarField|Relation|OneToMany|ManyToMany
     */
    public function getValue()
    {
    }
    /**
     * @param $name
     *
     * @return mixed|null
     */
    public function getParameter($name)
    {
    }
    public function setParameter($name, $value)
    {
    }
    /**
     * @return string
     * @throws SystemException
     * @throws ArgumentException
     */
    public function getDefinitionFragment()
    {
    }
    /**
     * @return string
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getAliasFragment()
    {
    }
    /**
     * @return mixed|string
     * @throws ArgumentException
     * @throws SystemException
     */
    public function getSqlDefinition()
    {
    }
    /**
     * @return bool
     * @throws ArgumentException
     * @throws SystemException
     */
    public function isBackReference()
    {
    }
    public function dump()
    {
    }
}