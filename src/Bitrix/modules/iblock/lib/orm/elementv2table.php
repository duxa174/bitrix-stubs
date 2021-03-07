<?php

namespace Bitrix\Iblock\ORM;

/**
 * @package    bitrix
 * @subpackage iblock
 *
 * @method static ElementV2Entity getEntity()
 */
class ElementV2Table extends \Bitrix\Iblock\ORM\CommonElementTable
{
    public static function getEntityClass()
    {
    }
    public static function getObjectParentClass()
    {
    }
    /**
     * Protection from ElementTable classes
     * @return EntityObject|string
     */
    public static function getObjectClass()
    {
    }
    /**
     * Protection from ElementTable classes
     * @return Collection|string
     */
    public static function getCollectionClass()
    {
    }
}