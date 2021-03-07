<?php

namespace Bitrix\UI\EntitySelector;

class NodeOptions implements \JsonSerializable
{
    protected $itemOrder = [];
    protected $open = false;
    protected $dynamic = false;
    public function __construct(array $options)
    {
    }
    public function setOpen(bool $open = true)
    {
    }
    public function isOpen()
    {
    }
    public function setDynamic(bool $dynamic = true)
    {
    }
    public function isDynamic()
    {
    }
    public function setItemOrder(array $order)
    {
    }
    public function getItemOrder()
    {
    }
    public function jsonSerialize()
    {
    }
}