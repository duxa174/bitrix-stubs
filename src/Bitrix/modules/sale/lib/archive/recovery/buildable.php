<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * @package Bitrix\Sale\Archive\Recovery
 */
interface Buildable
{
    /**
     * @return Archive\Order
     */
    public function buildOrder();
    public function setEntityFields($entityName, array $fields = null);
}