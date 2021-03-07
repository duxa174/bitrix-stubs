<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class PresetBasket extends \Bitrix\Sale\Helpers\Admin\Blocks\OrderBasket
{
    /**
     * PresetBasket constructor.
     */
    public function __construct(\Bitrix\Sale\Order $order, $jsObjName = "", $idPrefix = "", $createProductBasement = true, $mode = self::EDIT_MODE)
    {
    }
    protected static function getDefaultVisibleColumns()
    {
    }
    public function getScripts($defTails = false)
    {
    }
    public function getEdit($defTails = false)
    {
    }
}