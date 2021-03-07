<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * @package Bitrix\Sale\Archive\Recovery
 *
 * @deprecated No longer used by internal code and not recommended.
 */
abstract class Base
{
    /** @var Sale\Archive\Order $order */
    protected $order;
    /**
     * Recovery\Base constructor.
     */
    public function __construct()
    {
    }
    /**
     * @param array $archivedOrder
     * 
     * @return Sale\Archive\Order
     * 	 
     * @throws Main\ArgumentNullException
     */
    public function restoreOrder($archivedOrder = array())
    {
    }
    protected abstract function loadOrder($archivedOrder);
}