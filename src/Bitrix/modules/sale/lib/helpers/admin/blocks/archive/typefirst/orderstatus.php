<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks\Archive\TypeFirst;

class OrderStatus extends \Bitrix\Sale\Helpers\Admin\Blocks\Archive\Template
{
    protected $name = "statusorder";
    /**
     * @return string $result
     */
    public function buildBlock()
    {
    }
    /**
     * @param Sale\Order $order
     * @param array $data
     *
     * @return string
     */
    protected static function getCancelBlockHtml(\Bitrix\Sale\Order $order, array $data)
    {
    }
}