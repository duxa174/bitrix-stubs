<?php

namespace Bitrix\Main\ORM\Query\Filter\Expressions;

/**
 * Wrapper for columns values in QueryFilter.
 * @package    bitrix
 * @subpackage main
 */
class ColumnExpression extends \Bitrix\Main\ORM\Query\Filter\Expressions\Expression
{
    /**
     * @var string
     */
    protected $definition;
    /**
     * @param $definition
     */
    public function __construct($definition)
    {
    }
    /**
     * @return string
     */
    public function getDefinition()
    {
    }
    /**
     * @param string $definition
     */
    public function setDefinition($definition)
    {
    }
}