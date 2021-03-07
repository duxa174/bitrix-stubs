<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * @package Bitrix\Sale\Archive\Recovery
 */
interface ArchivePackable
{
    /**
     * @return Result
     */
    public function tryUnpack();
    public function setPackedOrder(\Bitrix\Sale\Archive\Recovery\PackedField $field);
    public function addPackedBasketItem($id, \Bitrix\Sale\Archive\Recovery\PackedField $field);
}