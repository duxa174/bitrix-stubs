<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * @package Bitrix\Sale\Archive\Recovery
 */
abstract class PackedField
{
    protected $packedValue = '';
    public function __construct($packedValue = '')
    {
    }
    public function getPackedValue()
    {
    }
    /**
     * @return Result
     */
    public abstract function tryUnpack();
    public abstract function unpack();
}