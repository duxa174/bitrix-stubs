<?php

namespace Bitrix\Iblock;

/**
 * @package    bitrix
 * @subpackage iblock
 */
class Property extends \Bitrix\Iblock\EO_Property
{
    /** @var Entity */
    protected $valueEntity;
    /**
     * Generates personal property entity
     *
     * @param ElementEntity $elementEntity
     *
     * @return Entity|null
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public function getValueEntity($elementEntity = null)
    {
    }
}