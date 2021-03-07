<?php

namespace Bitrix\Main\ORM\Annotations;

/**
 * Bitrix Framework
 * @package    bitrix
 * @subpackage main
 * @copyright  2001-2018 Bitrix
 */
trait AnnotationTrait
{
    public static function annotateEntity(\Bitrix\Main\ORM\Entity $entity)
    {
    }
    public static function annotateScalarField(\Bitrix\Main\ORM\Fields\ScalarField $field)
    {
    }
    public static function annotateUserType(\Bitrix\Main\ORM\Fields\UserTypeField $field)
    {
    }
    public static function annotateExpression(\Bitrix\Main\ORM\Fields\ExpressionField $field)
    {
    }
    public static function annotateReference(\Bitrix\Main\ORM\Fields\Relations\Reference $field)
    {
    }
    public static function annotateOneToMany(\Bitrix\Main\ORM\Fields\Relations\OneToMany $field)
    {
    }
    public static function annotateManyToMany(\Bitrix\Main\ORM\Fields\Relations\ManyToMany $field)
    {
    }
    public static function tryToFindEntity($entityClass)
    {
    }
    protected static function getFieldNameCamelCase($fieldName)
    {
    }
}