<?php

namespace Bitrix\Iblock\ORM;

/**
 * @package    bitrix
 * @subpackage iblock
 */
abstract class ElementEntity extends \Bitrix\Main\ORM\Entity
{
    /** @var Iblock */
    protected $iblock;
    /**
     * @param EO_Iblock $iblock
     *
     * @throws \Bitrix\Main\ArgumentException
     */
    public function setIblock($iblock)
    {
    }
    /**
     * @return EO_Iblock
     */
    public function getIblock()
    {
    }
    public abstract function getSingleValueTableName();
    public abstract function getMultiValueTableName();
}