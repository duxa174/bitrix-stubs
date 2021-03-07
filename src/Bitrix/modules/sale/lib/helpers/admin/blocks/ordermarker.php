<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class OrderMarker
{
    /**
     * @param int $orderId
     *
     * @return array
     */
    public static function getView($orderId)
    {
    }
    /**
     * @param int $orderId
     * @param int $entityId
     *
     * @return array
     */
    public static function getViewForEntity($orderId, $entityId)
    {
    }
    /**
     * @param int $orderId
     * @param null|int $entityId
     *
     * @return array
     */
    protected static function getViewList($orderId, $entityId = null)
    {
    }
    /**
     * @param $orderId
     * @param $id
     * @param $text
     * @param $entityId
     * @param null $type
     * @param bool $forEntity
     *
     * @return string
     */
    protected static function getShipmentBlockHtml($orderId, $id, $text, $entityId, $type = null, $forEntity = false)
    {
    }
    /**
     * @param $orderId
     * @param $id
     * @param $text
     * @param $entityId
     * @param $type
     * @param bool $forEntity
     *
     * @return string
     */
    protected static function getPaymentBlockHtml($orderId, $id, $text, $entityId, $type = null, $forEntity = false)
    {
    }
    /**
     * @param $orderId
     * @param $id
     * @param $text
     * @param null $type
     *
     * @return string
     */
    protected static function getOrderBlockHtml($orderId, $id, $text, $type = null)
    {
    }
}