<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks\Archive;

class View
{
    /** @var Sale\Archive\Order  */
    protected $order;
    /**
     * View constructor.
     *
     * @param int $id
     */
    function __construct($id)
    {
    }
    /**
     * @return Sale\Order
     */
    public function loadOrder()
    {
    }
    /**
     * Return blocks appropriate archive version.
     *
     * @return array
     *
     * @throws Main\ObjectNotFoundException
     */
    public function getTemplates()
    {
    }
    private function getSchema()
    {
    }
}