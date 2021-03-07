<?php

namespace Bitrix\Sale\Delivery;

class Menu
{
    protected $currentDeliveryId;
    public function __construct($currentDeliveryId = 0)
    {
    }
    public function getItems()
    {
    }
    protected function getChildren(array $parentIds = array(0))
    {
    }
}