<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks\Archive;

abstract class Template
{
    /** @var  Order $order*/
    protected $order;
    protected $name = "";
    /**
     * Template constructor.
     */
    function __construct()
    {
    }
    /**
     * @param Order $order
     * 
     * @return void
     */
    public function setOrder(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @return string
     * 
     * @return void
     */
    public function getName()
    {
    }
    /**
     * Build block's html.
     */
    public abstract function buildBlock();
}