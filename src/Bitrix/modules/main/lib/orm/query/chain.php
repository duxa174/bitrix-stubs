<?php

namespace Bitrix\Main\ORM\Query;

class Chain
{
    /** @var ChainElement[] */
    protected $chain;
    protected $size = 0;
    /** @var string[] Definition caches ([0] - full length) */
    protected $definition;
    /** @var array Definition cache */
    protected $definitionParts;
    protected $alias;
    protected $custom_alias;
    /** @var boolean */
    protected $forcesDataDoublingOff = false;
    /** @var ChainElement */
    protected $last_element;
    public function __construct()
    {
    }
    /**
     * @param ChainElement $element
     *
     * @throws SystemException
     */
    public function addElement(\Bitrix\Main\ORM\Query\ChainElement $element)
    {
    }
    /**
     * @param ChainElement $element
     */
    public function prependElement(\Bitrix\Main\ORM\Query\ChainElement $element)
    {
    }
    /**
     * @param Chain $chain
     */
    public function prepend(\Bitrix\Main\ORM\Query\Chain $chain)
    {
    }
    public function getFirstElement()
    {
    }
    /**
     * @return ChainElement
     */
    public function getLastElement()
    {
    }
    /**
     * @return array|ChainElement[]
     */
    public function getAllElements()
    {
    }
    public function removeLastElement()
    {
    }
    public function removeFirstElement()
    {
    }
    public function hasBackReference()
    {
    }
    public function getSize()
    {
    }
    /**
     * @param int $elementsSlice Definition length, e.g. -1 would exclude last element.
     *
     * @return string
     */
    public function getDefinition($elementsSlice = 0)
    {
    }
    /**
     * @return array
     */
    public function getDefinitionParts()
    {
    }
    public function getAlias()
    {
    }
    public function setCustomAlias($alias)
    {
    }
    /**
     * @param Entity $init_entity
     * @param      $definition
     *
     * @return Chain
     * @throws Main\ArgumentException
     * @throws SystemException
     */
    public static function getChainByDefinition(\Bitrix\Main\ORM\Entity $init_entity, $definition)
    {
    }
    public static function getDefinitionByChain(\Bitrix\Main\ORM\Query\Chain $chain)
    {
    }
    public static function getDefinitionPartsByChain(\Bitrix\Main\ORM\Query\Chain $chain)
    {
    }
    public static function appendDefinition($currentDefinition, $newDefinitionPart)
    {
    }
    public static function getAliasByChain(\Bitrix\Main\ORM\Query\Chain $chain)
    {
    }
    /**
     * @param Entity $entity
     * @param      $definition
     *
     * @return string
     * @throws Main\ArgumentException
     * @throws SystemException
     */
    public static function getAliasByDefinition(\Bitrix\Main\ORM\Entity $entity, $definition)
    {
    }
    /**
     * @return bool
     * @throws SystemException
     */
    public function hasAggregation()
    {
    }
    /**
     * @return bool
     * @throws SystemException
     */
    public function hasSubquery()
    {
    }
    public function isConstant()
    {
    }
    public function forceDataDoublingOff()
    {
    }
    public function forcesDataDoublingOff()
    {
    }
    /**
     * @param bool $with_alias
     *
     * @return mixed|string
     * @throws SystemException
     */
    public function getSqlDefinition($with_alias = false)
    {
    }
    public function __clone()
    {
    }
    public function dump()
    {
    }
}