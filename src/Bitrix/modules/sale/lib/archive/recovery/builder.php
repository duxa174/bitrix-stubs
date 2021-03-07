<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * @package Bitrix\Sale\Archive\Recovery
 */
abstract class Builder implements \Bitrix\Sale\Archive\Recovery\Buildable, \Bitrix\Sale\Archive\Recovery\ArchivePackable
{
    /** @var Archive\Order $order*/
    protected $order = null;
    /** @var PackedField $packedOrder*/
    protected $packedOrder = null;
    protected $entitiesFields = [];
    protected $packedBasketItems = [];
    public function setPackedOrder(\Bitrix\Sale\Archive\Recovery\PackedField $field)
    {
    }
    public function addPackedBasketItem($id, \Bitrix\Sale\Archive\Recovery\PackedField $field)
    {
    }
    public function tryUnpack()
    {
    }
    public function setEntityFields($name, array $value = null)
    {
    }
    public abstract function buildOrder();
}